<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->userName(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'digital_address' => $this->faker->streetAddress(),
            'area' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'purpose' => $this->faker->word(),
            'created_by' => $this->faker->name(),
            'delete_status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
