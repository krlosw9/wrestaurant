<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_types')->insert([
            'name' => 'Mesa',
        ]);

        DB::table('order_types')->insert([
            'name' => 'Domicilio',
        ]);

        DB::table('order_types')->insert([
            'name' => 'Llevar',
        ]);
    }
}
