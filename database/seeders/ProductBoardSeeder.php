<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_boards')->insert([
            'product_id' => 1,
            'board_id' => 1,
            'invoiced' => 1
        ]);

        DB::table('product_boards')->insert([
            'product_id' => 2,
            'board_id' => 1,
            'invoiced' => 1
        ]);

        DB::table('product_boards')->insert([
            'product_id' => 3,
            'board_id' => 1,
            'invoiced' => 1
        ]);

        DB::table('product_boards')->insert([
            'product_id' => 4,
            'board_id' => 1,
            'invoiced' => 1
        ]);
    }
}
