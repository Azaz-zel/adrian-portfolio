<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('category');
            $table->unsignedSmallInteger('year');
            $table->string('role')->nullable();
            $table->text('summary');
            $table->text('body')->nullable();
            $table->string('live_url')->nullable();
            $table->string('stack')->nullable();
            $table->text('surface')->nullable();
            $table->text('function')->nullable();
            $table->text('foundation')->nullable();
            $table->string('cover_path')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('position')->default(0);
            $table->timestamps();
        });

        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->string('path');
            $table->string('caption')->nullable();
            // Which pyramid tab shows this image: surface, function, foundation, or null for gallery only.
            $table->string('layer')->nullable();
            $table->unsignedInteger('position')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
    }
};
