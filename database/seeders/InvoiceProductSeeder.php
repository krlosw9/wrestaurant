<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice_products')->insert([
            'invoice_id' => 1,
            'product_id' => 1,
            'remove_ingredient' => '',
            'comments_additional' => ''
        ]);

        DB::table('invoice_products')->insert([
            'invoice_id' => 1,
            'product_id' => 2,
            'remove_ingredient' => '',
            'comments_additional' => ''
        ]);
    }
}
