<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdditionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additionals')->insert([
            'name' => 'Tocineta',
            'cost' => '500',
            'price' => '1000'
        ]);

        DB::table('additionals')->insert([
            'name' => 'Queso',
            'cost' => '500',
            'price' => '1000'
        ]);
    }
}
