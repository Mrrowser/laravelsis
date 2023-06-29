<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'status' => $this->faker->randomElement(['single', 'married']),
            'nationality' => $this->faker->randomElement(['Filipino', 'Chinese','English','Japanese','Australian']),
            'religion' => $this->faker->randomElement(['Judaism', 'Christianity','Muslim','Islam','Hinduism ']),

        ];
    }
}
