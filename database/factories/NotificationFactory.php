<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "contenue" => $this->faker->text(30),
            "user_id" => 1,
            // "user_id" => User::whereJsonContains('role->ROLE_CLIENT', true)->get()->random()->id,
        ];
    }
}
