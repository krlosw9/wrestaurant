<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Hamburguesas',
            'order' => 1
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Perros',
            'order' => 2
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Sandwich',
            'order' => 3
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Maicitos',
            'order' => 4
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Picadas',
            'order' => 5
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Carnes',
            'order' => 6
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Bebidas',
            'order' => 7
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Otras Delicias',
            'order' => 8
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Servicios',
            'order' => 9
        ]);
    }
}
