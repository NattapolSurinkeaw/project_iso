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
        Schema::create('other_trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pending_id')->constrained('pending_trainings')->onDelete('cascade');
            $table->string('other_course');
            $table->date('other_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_trainings');
    }
};
