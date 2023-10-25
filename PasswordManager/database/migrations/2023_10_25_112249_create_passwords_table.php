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
        Schema::create('passwords', function (Blueprint $table) {
            $table->id();
            $table->string('Account Domain');
            $table->string('Account User');
            $table->string('Account Password');
            $table->string('Admin Panel Url');
            $table->string('Admin Panel User');
            $table->string('Admin Pannel Passwrord');
            $table->string('FTP User');
            $table->string('FTP Password');
            $table->string('DB Name');
            $table->string('DB Username');
            $table->string('DB Password');
            $table->string('Email Account');
            $table->string('Email Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passwords');
    }
};
