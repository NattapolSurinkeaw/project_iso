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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('elerningcoruse_id')->unsigned();
            $table->string('question');
            $table->string('choice1');
            $table->string('choice2');
            $table->string('choice3');
            $table->string('choice4');
            $table->string('answer')->nullable();
            $table->timestamps();

            $table->foreign('elerningcoruse_id')->references('id')->on('elerningcourses')->onDe;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
