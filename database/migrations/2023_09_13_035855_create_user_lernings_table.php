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
            $table->integer('elearning_id',5)->unsigned();
            $table->integer('quiz_id')->unsigned()->default(0);
            $table->string('watch_video',100)->nullable();
            $table->integer('total_round')->unsigned()->default(0);
            $table->integer('score')->unsigned()->default(0);
            $table->integer('last_score')->unsigned()->default(0);
            $table->integer('total_score')->unsigned()->default(0);
            $table->string('quiz_type', 20)->nullable();
            //เอาไว้เช็คว่าทำหรือยัง
            // pretest(yes , no) 
            // $table->string('pretest', 3)->default("no");
            // posttest(yes , no) 
            // $table->string('posttest',3)->default("no");
            $table->string('certificate',3)->default("no"); // yes , no เอาไว้เช็คว่าให้โหลด cer ไหม
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
