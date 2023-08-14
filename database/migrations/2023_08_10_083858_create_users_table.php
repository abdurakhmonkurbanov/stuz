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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone')->unique();
            $table->string('password');
            $table->integer('viloyat_id')->nullable();
            $table->integer('tuman_id')->nullable();
            $table->integer('school_id')->nullable();
            $table->float('cash')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->dateTime('cash_date')->nullable();
            $table->integer('user_type_id')->unsigned()->default(1);
            $table->timestamps();
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
