<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->ulid('public_id')->unique();

            $table->string('name');
            $table->string('headline');
            $table->text('short_bio')->nullable();
            $table->longText('long_bio')->nullable();

            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->string('avatar')->nullable();
            $table->string('resume_path')->nullable();

            $table->string('github_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('website_url')->nullable();

            $table->boolean('available_for_work')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
