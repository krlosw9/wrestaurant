<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'nit' => '88.274.666-0',
            'name' => 'Restaurante Comidas Rapidas La Tartara de Alex',
            'district' => 'Urb. Tasajero - Cúcuta - Col',
            'address' => 'Calle 21N #3-05',
            'phone' => '3123978238',
            'logo' => 'store-false(modificar)'
        ]);
    }
}
