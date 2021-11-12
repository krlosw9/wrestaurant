<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Hamburguesa Sencilla',
            'cost' => 3500,
            'price' => 7000,
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Hamburguesa Tartara',
            'cost' => 4500,
            'price' => 10000,
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Perro Americano',
            'cost' => 3500,
            'price' => 7000,
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Domicilio',
            'cost' => 0,
            'price' => 0,
            'for_profit' => 0,
            'category_id' => 9
        ]);
    }
}
