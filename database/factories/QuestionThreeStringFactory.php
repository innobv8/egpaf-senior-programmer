<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionThreeStringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'string' => $this->faker->text(9),
            'disabled' => false
        ];
    }
}
