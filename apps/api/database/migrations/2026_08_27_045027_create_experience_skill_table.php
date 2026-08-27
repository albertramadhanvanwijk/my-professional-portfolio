<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experience_skill', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->foreignUlid('experience_id')
                ->constrained('experiences')
                ->cascadeOnDelete();

            $table->foreignUlid('skill_id')
                ->constrained('skills')
                ->cascadeOnDelete();

            $table->text('evidence')->nullable();

            $table->timestamps();

            $table->unique([
                'experience_id',
                'skill_id',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experience_skill');
    }
};