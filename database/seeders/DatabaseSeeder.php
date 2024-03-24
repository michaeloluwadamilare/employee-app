<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

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
            'category_id' => 2,
        ]);

        DB::table('menu_lists')->insert([
            'name' => 'Gulder',
            'description' => '',
            'amount' => '2500.00',
            'status' => 'Active',
            'category_id' => 2,
        ]);
        DB::table('menu_lists')->insert([
            'name' => 'Trophy',
            'description' => '',
            'amount' => '2000.00',
            'status' => 'Active',
            'category_id' => 2,
        ]);
        DB::table('orders')->insert([
            'table_no'=>'Table 007',
            'total_amount' => '18000.00',
            'created_at' => '2024-03-23 03:04:15',
        ]);

        DB::table('orders')->insert([
            'table_no'=>'Table 002',
            'total_amount' => '12000.00',
            'created_at' => '2024-03-23 03:04:15',
        ]);

        DB::table('order_details')->insert([
            'order_id'=>'1',
            'product_name' => 'Grilled Fish And Chips (Croaker/Cat)',
            'quantity'=>'2',
            'unit_price'=>'3000.00',
            'amount'=>'6000.00',
            'created_at' => '2024-03-23 03:04:15',
        ]);
        DB::table('order_details')->insert([
            'order_id'=>'1',
            'product_name' => 'Guinea Fowl Suya',
            'quantity'=>'4',
            'unit_price'=>'4000.00',
            'amount'=>'12000.00',
            'created_at' => '2024-03-23 03:04:15',
        ]);
        DB::table('order_details')->insert([
            'order_id'=>'2',
            'product_name' => 'Guinea Fowl Suya',
            'quantity'=>'1',
            'unit_price'=>'4000.00',
            'amount'=>'4000.00',
            'created_at' => '2024-03-23 03:04:15',
        ]);
        DB::table('order_details')->insert([
            'order_id'=>'2',
            'product_name' => 'Guinea Fowl Suya',
            'quantity'=>'2',
            'unit_price'=>'4000.00',
            'amount'=>'8000.00',
            'created_at' => '2024-03-23 03:04:15',
        ]);
    }
}

