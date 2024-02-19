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
        Schema::create('code_discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('discount');
            $table->integer('used_count');
            $table->boolean('display');
            $table->date('date_start');
            $table->date('date_expire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('code_discounts');
    }
};
