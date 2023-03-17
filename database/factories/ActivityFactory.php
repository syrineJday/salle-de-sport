<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
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
            "description" => $this->faker->text(150),
            "prix" => 12.3,
            "category_id" =>Category::all()->random()->id,
        ];
    }
}
