<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Shop;
use App\Models\User;
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
        User::factory(7)->create();
        User::factory()->create([
            'email' => 'stock@gmail.com',
            'type'  => 'STOCK'
        ]);
        User::factory()->create([
            'email' => 'shop@gmail.com',
            'type'  => 'SHOP'
        ]);
        User::factory()->create([
            'email' => 'operator@gmail.com',
            'type'  => 'OPERATOR'
        ]);

        ProductCategory::factory(500)->create();
        Product::factory(5000)->create();

        Place::factory(50)->create();
        Shop::factory(10)->create();
    }
}
