<?php

namespace Database\Factories;

use App\Models\OrderStep;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderStep>
 */
class OrderStepFactory extends Factory
{
    /**
     * @return array{icon: string, icon_color: string, step_number: int, title: string, description: string, sort_order: int, is_active: bool}
     */
    public function definition(): array
    {
        return [
            'icon' => fake()->randomElement(['chat-bubble-left', 'arrow-up-tray', 'computer-desktop', 'pencil-square', 'check']),
            'icon_color' => fake()->randomElement(['orange', 'green']),
            'step_number' => fake()->numberBetween(1, 5),
            'title' => fake()->words(2, true),
            'description' => fake()->sentence(),
            'sort_order' => fake()->numberBetween(0, 10),
            'is_active' => true,
        ];
    }

    /**
     * Mark the order step as inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes): array => [
            'is_active' => false,
        ]);
    }
}
