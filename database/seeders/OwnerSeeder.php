<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::factory()
        ->count(5)
        ->hasPets(2)
        ->create();

        Owner::factory()
        ->count(4)
        ->hasPets(1)
        ->create();

        Owner::factory()
        ->count(2)
        ->hasPets(0)
        ->create();

    }
}
