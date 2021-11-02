<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        /* Planes */
        \App\Models\Plan\Plan::factory(4)->create();
        /* Universidades , areas y carreras */
        \App\Models\University\University::factory(10)
            ->has(\App\Models\Area\Area::factory()
            ->hasCareers(3)
            ->count(5))
            ->create();
    }
}
