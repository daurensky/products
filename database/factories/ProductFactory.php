<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->text;

        return [
            'title_ru'            => $title,
            'title_kz'            => $title,
            'details'             => $this->faker->text,
            'price'               => $this->faker->numberBetween(0, 90000),
            'product_category_id' => $this->faker->randomElement(ProductCategory::pluck('id')->toArray())
        ];
    }
}
