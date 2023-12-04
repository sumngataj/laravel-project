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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->string('fullname');
            $table->string('address');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('account_number')->nullable();
            $table->longtext('bank_details')->nullable();
            $table->string('bankReceipt')->nullable();
            $table->string('gcash')->nullable();
            $table->string('gcashReceipt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
