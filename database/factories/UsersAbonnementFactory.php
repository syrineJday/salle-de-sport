<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersAbonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "startDate" => $this->faker->date(),
            "endDate" => $this->faker->date(),
            "user_id" => User::all()->random()->id,
            "abonnement_id" =>Abonnement::all()->random()->id,
        ];
    }
}
