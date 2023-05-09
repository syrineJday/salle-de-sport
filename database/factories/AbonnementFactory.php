<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "label" => $this->faker->text(10),
            "prix" => 120,
            "type" => "1 MOIS",
        ];
    }
}
