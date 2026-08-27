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

            $table->ulid('public_id')->unique();

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->longText('problem')->nullable();
            $table->longText('solution')->nullable();

            $table->string('role')->nullable();

            $table->longText('architecture')->nullable();
            $table->longText('implementation')->nullable();

            $table->longText('challenges')->nullable();
            $table->longText('result')->nullable();
            $table->longText('lessons_learned')->nullable();

            $table->string('github_url')->nullable();
            $table->string('live_url')->nullable();

            $table->string('cover_image')->nullable();

            $table->boolean('featured')->default(false);

            $table->string('status')->default('draft');

            $table->date('started_at')->nullable();
            $table->date('completed_at')->nullable();

            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->index([
                'status',
                'featured',
            ]);

            $table->index('published_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
