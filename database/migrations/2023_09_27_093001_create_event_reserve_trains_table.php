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
        Schema::create('event_reserve_trains', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('pending_id')->constrained('pending_trainings')->onDelete('cascade');
            $table->foreignId('pending_id')->constrained('pending_trainings')->onDelete('cascade');
            $table->string('reserve_name');
            $table->date('reserve_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_reserve_trains');
    }
};
