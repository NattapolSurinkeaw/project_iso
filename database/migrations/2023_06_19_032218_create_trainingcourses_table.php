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
        Schema::create('trainingcourses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id')->unsigned();
            $table->string('code');
            $table->string('name');
            $table->integer('day');
            //สร้างฟิล์ด description บอกรายละเอียดของ training
            $table->decimal('fee',8,2);
            $table->string('img_training')->nullable(); // เพิ่มคอลัมน์ img_training ในตาราง
            $table->date('date');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
