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
            
            'mark' => $this->faker->word,
            'model' => $this->faker->word,
            'price' => $this->faker->numberBetween(1000, 30000),
            'year' => $this->faker->numberBetween(1990, 2023),
            'milestone' => $this->faker->numberBetween(0, 60000),
            'description' => $this->faker->text,
        ];
    }
}
