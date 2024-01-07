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
        Schema::create('pending_trainings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->foreignId('billing_id')->constrained('billing_tos')->onDelete('cascade');
            $table->string('company');
            $table->string('branch', 10);
            $table->string('address');
            $table->string('contact');
            $table->string('position');
            $table->string('phone', 10);
            $table->string('email');
            $table->string('fax', 20);
            $table->string('training_reserve');
            $table->string('code_train', 10);
            $table->decimal('fee', 8, 2);
            $table->integer('number_participants');
            $table->date('date_reserve');
            $table->string('special_request')->nullable();
            $table->string('reserve_name');
            $table->string('reserve_position');
            $table->string('reserve_tel', 10);
            $table->string('reserve_email');
            $table->string('status', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_trainings');
    }
};
