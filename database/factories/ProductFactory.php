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
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'price_after_discount' => $this->faker->optional(0.5)->randomFloat(2, 5, 500),
            'reviews' => $this->faker->numberBetween(0, 100),
            'total_sales' => $this->faker->numberBetween(0, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'tags' => $this->faker->words(3, true),
            'image_path' => $this->faker->imageUrl(600, 400, 'products', true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
