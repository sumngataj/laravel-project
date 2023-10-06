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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('venue_id')->constrained('venues', 'venue_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('package_id')->constrained('packages', 'package_id')->nullable()->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('reservation_date');
            $table->string('add_ons')->nullable();
            $table->string('status');
            $table->integer('price');
            $table->integer('guests')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

