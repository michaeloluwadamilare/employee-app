<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        DB::statement("ALTER TABLE `menu_lists` CHANGE `status` `status` ENUM('Active', 'Inactive', 'Deactivate')");
        DB::statement("ALTER TABLE `menu_lists` ALTER `status` SET DEFAULT 'Active'");



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE `menu_lists` CHANGE `status` `status` ENUM('Active', 'Inactive')");
        DB::statement("ALTER TABLE `menu_lists` ALTER `status` SET DEFAULT 'Active'");

    }
};
