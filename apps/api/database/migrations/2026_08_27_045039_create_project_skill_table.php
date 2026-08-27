<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_skill', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->foreignUlid('project_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignUlid('skill_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->text('evidence')->nullable();

            $table->timestamps();

            $table->unique([
                'project_id',
                'skill_id',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_skill');
    }
};
