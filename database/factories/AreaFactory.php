<?php

namespace Database\Factories;

use App\Models\AllienClan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'population' => fake()->numberBetween(0, 200),
            'discription' => fake()->realText(500),
            'allien_clan_id' => AllienClan::inRandomOrder()->first()->id,
        ];
    }
}
