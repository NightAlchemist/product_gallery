<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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

        protected $model = Product::class;

    public function definition()
    {

        return [
            'title' => $this->faker->randomElement(['Nike Shirt', 'Nike Skirt', 'Nike Shoes', 'Nike Sweatpants']),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2,100,150),
            'price_after_discount' => $this->faker->randomFloat(2,50,99),
            'reviews' => $this->faker->numberBetween(21,145),
            'total_sales' => $this->faker->numberBetween(15,480),
            'stock' => $this->faker->numberBetween(0,80),
            'tags' => $this->faker->randomElements(['clothes', 'wearable', 'accessories', 'shoes', 'fashion']),
        ];
    }
}
