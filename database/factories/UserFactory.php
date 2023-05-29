<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'adresse' => $this->faker->name(),
            'numTel' => $this->faker->phoneNumber,
            'numMobile' => $this->faker->phoneNumber,
            'specialite' => $this->faker->text(10),
            'photo' => $this->faker->randomElement(['images/kpKXCmRbDQlYUwjUe4Jqtk7V9ZtnQzTwaaGkAbSy.jpg', 'images/6ajVjHCnPaoMsB8LLNKToecC1u5kuEq3bwMqOUGY.jpg', 'images/YwEiXopitNFX92xOaJL7IzWFwkhCCsCCECfmCQit.jpg', 'images/LFFnSvK8kEwTJBuyyTqxz8cjQvkrL3IIHr7v40yV.jpg']),
            'role' => json_encode(["ROLE_CLIENT" => true]),
            'date_naissance' => $this->faker->dateTime(),
            'email' => $this->faker->unique()->safeEmail(),
            'cin' => $this->faker->numerify("########"),
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
