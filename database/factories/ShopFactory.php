<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'     => $this->faker->text,
            'place_id' => $this->faker->randomElement(Place::pluck('id')->toArray()),
            'street'   => $this->faker->streetName,
            'house'    => $this->faker->randomNumber(),
        ];
    }
}
