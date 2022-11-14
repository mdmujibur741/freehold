<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\bed;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\road;
use App\Models\shower;
use App\Models\User;
use App\Models\zipCode;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        City::factory(20)->create();
        bed::factory(20)->create();
        shower::factory(20)->create();
        road::factory(20)->create();
        zipCode::factory(20)->create();

        
    }
}
