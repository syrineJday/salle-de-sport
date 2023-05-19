<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                "nom" => "admin",
                "prenom" => "admin",
                "adresse" => "tunis",
                "numTel" => 12333222,
                "cin" => 12333225,
                "photo" => "images/K8iymhCNMkIVkSsrYBPhyoHzcsDM5MF2fvlJqWu7.jpg",
                "role" => \json_encode(['ROLE_ADMIN' => true]),
                "date_naissance" => "2015-07-19",
                "email" => "admin@gmail.com",
                "password" => Hash::make('adminadmin'),
            ],
            [
                "nom" => "client",
                "prenom" => "client",
                "adresse" => "tunis",
                "numTel" => 1233329,
                "cin" => 12333229,
                "photo" => "images/K8iymhCNMkIVkSsrYBPhyoHzcsDM5MF2fvlJqWu7.jpg",
                "role" => \json_encode(['ROLE_CLIENT' => true]),
                "date_naissance" => "2015-07-19",
                "email" => "client@gmail.com",
                "password" => Hash::make('adminadmin'),
            ],
            [
                "nom" => "coach",
                "prenom" => "coach",
                "adresse" => "tunis",
                "numTel" => 12333224,
                "cin" => 123332254,
                "photo" => "images/K8iymhCNMkIVkSsrYBPhyoHzcsDM5MF2fvlJqWu7.jpg",
                "role" => \json_encode(['ROLE_ENTRAINEUR' => true]),
                "date_naissance" => "2015-07-19",
                "email" => "coach@gmail.com",
                "password" => Hash::make('adminadmin'),
            ],
        ]);

        \App\Models\User::factory(4)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Salle::factory(5)->create();
        \App\Models\Activity::factory(4)->create();
        \App\Models\Seance::factory(10)->create();
        \App\Models\Abonnement::factory(3)->create();
        // \App\Models\UsersAbonnement::factory(3)->create();
        \App\Models\AbonnementActivity::factory(3)->create();
        \App\Models\Horaire::factory(3)->create();
    }
}
