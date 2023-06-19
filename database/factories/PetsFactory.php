<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owner;
use App\Models\PetCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
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
            'owner_id' => Owner::factory(),
            'category_id' =>  PetCategory::factory(),
            'microchip_id' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->word(),
            'mark' => $this->faker->randomDigit(),
            'color' => $this->faker->colorName(),
            'gender' => $this->faker->word(),
            'breed' => $this->faker->word(),
            'dob' => $this->faker->date(),
            'created_by' => $this->faker->name(),
            'weight' => $this->faker->numberBetween(0, 1),
            'delete_status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
