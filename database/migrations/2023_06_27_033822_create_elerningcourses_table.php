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
        Schema::create('elerningcourses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('user_name');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('img_course')->nullable(); // เพิ่มคอลัมน์ img_course ในตาราง
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elerningcourses');
    }
};
