<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            'name' => 'Mesa #1'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #2'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #3'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #4'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #5'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #6'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #7'
        ]);

        DB::table('boards')->insert([
            'name' => 'Mesa #8'
        ]);
    }
}
