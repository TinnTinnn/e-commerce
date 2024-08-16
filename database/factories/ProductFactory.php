<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'category' => fake()->sentence(),
            'price' => fake()->numberBetween(100, 50000),
            'stock' => fake()->numberBetween(0, 100),
            'created_at' => fake()->dateTimeBetween('-3 months'),
            'updated_at' => fake()->dateTimeBetween('created_at', 'now')
        ];
    }
}
