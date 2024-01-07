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
        Schema::create('billing_tos', function (Blueprint $table) {
            $table->id();
            $table->string('bil_company');
            $table->string('bil_branch', 10);
            $table->string('bil_address');
            $table->string('bil_tax_id',10);
            $table->string('bil_contact',100);
            $table->string('bil_title');
            $table->string('bil_phone', 10);
            $table->string('bil_email');
            $table->string('bil_fax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_tos');
    }
};
