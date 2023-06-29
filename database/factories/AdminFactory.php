<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'what' => $this->faker->randomElement(['postpone of meeting', 'postpone of classes', 'Pademic']),
            'where' => $this->faker->address,
            'whenn' => $this->faker->date(),
            'message' => $this->faker->paragraph,
            

        ];
    }
}
