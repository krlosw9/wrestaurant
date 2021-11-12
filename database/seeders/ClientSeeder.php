<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'nit' => '1',
            'name' => 'Juan',
            'district' => '',
            'address' => '',
            'phone' => '1'
        ]);

        DB::table('clients')->insert([
            'nit' => '2',
            'name' => 'Rappi',
            'district' => '',
            'address' => '',
            'phone' => '2'
        ]);

        DB::table('clients')->insert([
            'nit' => '3',
            'name' => 'ifood',
            'district' => '',
            'address' => '',
            'phone' => '3'
        ]);

        DB::table('clients')->insert([
            'nit' => '3172891700',
            'name' => 'Carlos (Domi)',
            'district' => 'Trigal del Norte',
            'address' => 'Calle 8D #4N-69',
            'phone' => '3172891700'
        ]);
    }
}
