<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'badge' => strtoupper($this->faker->bothify('??######')),
            'institutional_email' => $this->faker->unique()->safeEmail(),
            'available_permits' => $this->faker->numberBetween(0, 4),
            'state' => $this->faker->randomElement(['activa', 'inactiva']),
        ];
    }
}
