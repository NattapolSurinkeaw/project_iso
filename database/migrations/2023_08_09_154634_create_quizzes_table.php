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
            $table->string('quiz_name');
            $table->unsignedBigInteger('elerningcourse_id')->unsigned();
            $table->string('quiz_type');
            //เพิ่มฟิล์ด เวลา $table->integer('timer');
            $table->timestamps();

            $table->foreign('elerningcourse_id')->references('id')->on('elerningcourses')->onDelete('cascade');
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
