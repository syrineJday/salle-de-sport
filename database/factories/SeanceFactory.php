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
            "startDate" =>$this->faker->dateTime(),
            "endDate" =>$this->faker->dateTime(),
            "user_id" => User::all()->random()->id,
            "salle_id" => Salle::all()->random()->id,
            "activity_id" => Activity::all()->random()->id
        ];
    }
}
