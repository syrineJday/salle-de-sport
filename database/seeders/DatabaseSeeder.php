<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Salle::factory(5)->create();
        \App\Models\Activity::factory(4)->create();
        \App\Models\Seance::factory(10)->create();
        \App\Models\Abonnement::factory(3)->create();
    }
}
