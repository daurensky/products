<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Shop;
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
        \App\Models\User::factory(9)->create();
        \App\Models\User::factory()->create([
            'email' => 's@s.s',
            'type'  => 'STOCK'
        ]);

        ProductCategory::factory(500)->create();
        Product::factory(5000)->create();

        Place::factory(50)->create();
        Shop::factory(10)->create();
    }
}
