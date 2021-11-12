<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            'name' => 'Efectivo'
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Credito'
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Transferencia'
        ]);

        DB::table('payment_methods')->insert([
            'name' => 'Datafono'
        ]);
    }
}
