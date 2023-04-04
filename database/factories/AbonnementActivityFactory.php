<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbonnementActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "activity_id" => Activity::all()->random()->id,
            "abonnement_id" =>Abonnement::all()->random()->id,
        ];
    }
}
