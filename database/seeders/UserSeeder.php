<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'example@gmail.com',
            'password' => '$2y$12$5xfeJ4tfms2SxksIw0FjoucmHHIjpwLwhIaBjRqjPcMfJqutT2m/6',
        ]);

        DB::table('categories')->insert([
            'name' => 'Soft Drinks',
            'status' => 'Active',
        ]);

        DB::table('categories')->insert([
            'name' => 'Beer',
            'status' => 'Active',
        ]);

        DB::table('menu_lists')->insert([
            'name' => 'Coca-Cola',
            'description' => '',
            'amount' => '1000.00',
            'status' => 'Active',
            'category_id' => 1
        ]);

        DB::table('menu_lists')->insert([
            'name' => 'Fanta',
            'description' => '',
            'amount' => '1000.00',
            'status' => 'Active',
            'category_id' => 1
        ]);

        DB::table('menu_lists')->insert([
            'name' => 'Star',
            'description' => 'Star lager beer',
            'amount' => '2500.00',
            'status' => 'Active',
            'category_id' => 2
        ]);

        DB::table('menu_lists')->insert([
            'name' => 'Gulder',
            'description' => '',
            'amount' => '2500.00',
            'status' => 'Active',
            'category_id' => 2
        ]);
        DB::table('menu_lists')->insert([
            'name' => 'Trophy',
            'description' => '',
            'amount' => '2000.00',
            'status' => 'Active',
            'category_id' => 2
        ]);
    }
}
