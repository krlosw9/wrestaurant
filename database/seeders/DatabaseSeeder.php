<?php

namespace Database\Seeders;

use App\Models\{User, Additional, Board};

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        
        $this->call(CompanySeeder::class);
        $this->call(AdditionalSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(BoardSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(OrderTypeSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductCommentSeeder::class);
        $this->call(ProductBoardSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(InvoiceProductSeeder::class);
        $this->call(ClientCreditSeeder::class);
        $this->call(PayCreditSeeder::class);
    }
}
