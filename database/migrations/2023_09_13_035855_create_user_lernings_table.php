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
        Schema::create('user_lernings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('quiz_id')->unsigned();
            $table->string('watch_video',100)->nullable();
            $table->integer('total_round')->unsigned()->default(0);
            $table->integer('score')->unsigned()->default(0);
            $table->integer('total_score')->unsigned()->default(0);
            $table->string('certificate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_lernings');
    }
};
