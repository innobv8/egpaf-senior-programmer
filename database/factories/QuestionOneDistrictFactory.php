<?php

namespace Database\Factories;

use App\Models\QuestionOneRegion;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionOneDistrictFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'region_id' => QuestionOneRegion::firstOrCreate([], QuestionOneRegion::factory()->make()->toArray()),
            'name' => $this->faker->name(),
            'population' => $this->faker->randomNumber(),
            'total_area' => $this->faker->randomNumber(),
        ];
    }
}
