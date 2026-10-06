<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->input('slug') ?: $this->input('title')),
            'is_published' => $this->boolean('is_published'),
        ]);

        // Only one project is featured, so the flag belongs to the whole site, not to one
        // form. The editor sends it only when the owner flips it; a save that leaves it
        // out must not undo a change made to another project since this form loaded.
        if ($this->has('is_featured')) {
            $this->merge(['is_featured' => $this->boolean('is_featured')]);
        }
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:120'],
            'slug' => ['required_with:title', 'nullable', 'string', 'max:120', Rule::unique('projects', 'slug')->ignore($this->route('project'))],
            'category' => ['required', 'string', 'max:80'],
            'year' => ['required', 'integer', 'between:2000,2100'],
            'role' => ['nullable', 'string', 'max:120'],
            'summary' => ['required', 'string', 'max:300'],
            'body' => ['nullable', 'string', 'max:10000'],
            'live_url' => ['nullable', 'url:http,https', 'max:255'],
            'stack' => ['nullable', 'string', 'max:255'],
            'surface' => ['nullable', 'string', 'max:2000'],
            'function' => ['nullable', 'string', 'max:2000'],
            'foundation' => ['nullable', 'string', 'max:2000'],
            'cover' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'is_published' => ['boolean'],
            'is_featured' => ['sometimes', 'boolean'],
            'position' => ['required', 'integer', 'min:0', 'max:9999'],
        ];
    }

    public function attributes(): array
    {
        return ['slug' => 'address', 'live_url' => 'live URL'];
    }
}
