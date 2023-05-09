<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Salle;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "day" => $this->faker->randomElement(['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche']),
            "startTime" =>$this->faker->time(),
            "endTime" =>$this->faker->time(),
            "user_id" => User::all()->random()->id,
            "salle_id" => Salle::all()->random()->id,
            "activity_id" => Activity::all()->random()->id
        ];
    }
}
