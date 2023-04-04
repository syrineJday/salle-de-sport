<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HoraireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "jour" => $this->faker->text(5),
            "startDate" => $this->faker->dateTime(),
            "endDate" => $this->faker->dateTime()
        ];
    }
}
