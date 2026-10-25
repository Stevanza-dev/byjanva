<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * @return array{icon: string, icon_color: string, title: string, description: string, sort_order: int, is_active: bool}
     */
    public function definition(): array
    {
        return [
            'icon' => fake()->randomElement(['map', 'clock', 'shield-check', 'camera']),
            'icon_color' => fake()->randomElement(['orange', 'red', 'yellow', 'green']),
            'title' => fake()->words(2, true),
            'description' => fake()->sentence(),
            'sort_order' => fake()->numberBetween(0, 10),
            'is_active' => true,
        ];
    }

    /**
     * Mark the feature as inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes): array => [
            'is_active' => false,
        ]);
    }
}
