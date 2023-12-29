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
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('street');
            $table->string('country');
            $table->string('uuid');
            $table->rememberToken();
            //$table->timestamps();
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
