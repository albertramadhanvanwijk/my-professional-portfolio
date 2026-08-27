<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->ulid('public_id')->unique();

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();

            $table->string('cover_image')->nullable();

            $table->string('status')->default('draft');

            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->index([
                'status',
                'published_at',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
