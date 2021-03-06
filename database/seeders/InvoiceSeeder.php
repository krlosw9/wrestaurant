<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'client_id' => 1,
            'order_type_id' => 1,
            'payment_method_id' => 1,
            'turn' => 1,
            'total' => 0,
            'comment' => ''
        ]);
    }
}
