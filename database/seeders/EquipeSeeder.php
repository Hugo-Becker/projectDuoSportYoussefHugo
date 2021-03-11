<?php

namespace Database\Seeders;

use App\Models\Equipe;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipe::factory()
            ->count(10)
            ->create();
}
}