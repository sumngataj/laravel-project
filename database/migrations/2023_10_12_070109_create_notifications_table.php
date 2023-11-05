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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notif_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('venue_id')->constrained('venues', 'venue_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('package_id')->constrained('packages', 'package_id')->nullable()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('status');
            $table->datetime('uploaded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};