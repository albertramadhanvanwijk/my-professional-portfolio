<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experience_highlights', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->foreignUlid('experience_id')
                ->constrained('experiences')
                ->cascadeOnDelete();

            $table->string('title');
            $table->text('description')->nullable();

            $table->string('metric')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index('sort_order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experience_highlights');
    }
};