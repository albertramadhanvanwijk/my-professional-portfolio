<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->ulid('public_id')->unique();

            $table->string('company');
            $table->text('company_description')->nullable();

            $table->string('position');
            $table->string('employment_type')->nullable();
            $table->string('location')->nullable();

            $table->date('start_date');
            $table->date('end_date')->nullable();

            $table->boolean('is_current')->default(false);

            $table->longText('description')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index([
                'start_date',
                'end_date',
            ]);

            $table->index('sort_order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
