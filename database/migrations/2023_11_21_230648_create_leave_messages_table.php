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
        Schema::create('leave_messages', function (Blueprint $table) {
            $table->id();
            $table->string('fname_lname');
            $table->string('phone_number', 10);
            $table->string('organiz');
            $table->string('email');
            $table->text('leave_message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_messages');
    }
};
