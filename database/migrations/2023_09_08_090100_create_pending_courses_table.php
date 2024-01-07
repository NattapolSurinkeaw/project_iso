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
        Schema::create('pending_courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('total_courses', 30);
            $table->decimal('total_price', 8, 2);
            $table->string('customer_banknumber', 30);
            $table->decimal('totalmoney', 8, 2);
            $table->string('customer_tel', 10);
            $table->string('bankcustomer', 100);
            $table->string('bankcompany', 100);
            $table->string('payment_slip');
            $table->timestamps('date_transfer');
            $table->string('user_id', 10);
            $table->string('reading', 4);
            $table->string('comment')->nullable();
            $table->string('status', 55);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_courses');
    }
};
