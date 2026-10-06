<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

#[Fillable([
    'slug', 'title', 'category', 'year', 'role', 'summary', 'body', 'live_url', 'stack',
    'surface', 'function', 'foundation', 'cover_path', 'is_published', 'is_featured', 'position',
])]
class Project extends Model
{
    public const LAYERS = ['surface', 'function', 'foundation'];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
        ];
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProjectImage::class)->orderBy('position')->orderBy('id');
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true)->orderBy('position')->orderBy('id');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Seeded projects point at files already in public/images; admin uploads live on the media disk.
     */
    public static function url(?string $path): ?string
    {
        if (! $path) {
            return null;
        }

        return str_starts_with($path, 'images/') ? asset($path) : Storage::disk(config('filesystems.media'))->url($path);
    }

    /**
     * Seeded images ship with the repo, so only uploaded files are ever deleted.
     */
    public static function deleteFile(?string $path): void
    {
        if ($path && ! str_starts_with($path, 'images/')) {
            Storage::disk(config('filesystems.media'))->delete($path);
        }
    }

    /**
     * Everything the public pages need, with image paths already resolved to URLs.
     */
    public function toPublicArray(): array
    {
        $images = $this->images->map(fn (ProjectImage $image) => [
            'id' => $image->id,
            'url' => self::url($image->path),
            'caption' => $image->caption,
            'layer' => $image->layer,
        ]);

        return [
            'slug' => $this->slug,
            'title' => $this->title,
            'category' => $this->category,
            'year' => $this->year,
            'role' => $this->role,
            'summary' => $this->summary,
            'paragraphs' => self::split($this->body, "/\R{2,}/"),
            'live_url' => $this->live_url,
            'stack' => $this->stack,
            'cover' => self::url($this->cover_path),
            'layers' => collect(self::LAYERS)->map(fn (string $layer) => [
                'key' => $layer,
                'items' => self::split($this->{$layer}, "/\R/"),
                'image' => $images->firstWhere('layer', $layer)['url'] ?? null,
            ])->all(),
            'gallery' => $images->values()->all(),
        ];
    }

    private static function split(?string $text, string $pattern): array
    {
        return array_values(array_filter(array_map('trim', preg_split($pattern, (string) $text))));
    }
}
