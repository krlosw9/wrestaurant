<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_credits')->insert([
            'client_id' => 1,
            'invoice_id' => 1,
            'invoice_paid' => 0
        ]);
    }
}
