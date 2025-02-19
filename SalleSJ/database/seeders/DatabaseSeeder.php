<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;
use App\Models\Salle;

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
        Role::factory(10)->create();
        User::factory(10)->create();
        Salle::factory(10)->create();
        Reservation::factory(10)->create();
    }
}
