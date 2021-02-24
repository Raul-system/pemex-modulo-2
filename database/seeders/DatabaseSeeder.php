<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Postulate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Postulate::factory(50)->create();
    }
}
