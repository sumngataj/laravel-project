<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MakePackageIdNullableInReservations extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Alter the 'package_id' column to make it nullable
        DB::statement('ALTER TABLE reservations MODIFY package_id BIGINT UNSIGNED NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // If you need to reverse this change (make 'package_id' not nullable again),
        // you can define the down method here.
    }
}

