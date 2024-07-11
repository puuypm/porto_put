<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone',30);
            $table->string('email',50);
            $table->string('address');
            $table->text('description');
            $table->string('linkedin_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
