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
        Schema::create('user_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('modul_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->string('unit_questions_ids')->nullable();
            $table->string('modul_questions_ids')->nullable();
            $table->boolean('unit_finished')->default(false);
            $table->boolean('modul_finished')->default(false);
            $table->string('unit_result')->nullable();
            $table->string('modul_result')->nullable();
            $table->longText('unit_result_text')->nullable();
            $table->longText('modul_result_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_histories');
    }
};
