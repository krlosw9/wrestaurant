<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_comments')->insert([
            'product_id' => 1,
            'comment_id' => 1
        ]);

        DB::table('product_comments')->insert([
            'product_id' => 2,
            'comment_id' => 1
        ]);
    }
}
