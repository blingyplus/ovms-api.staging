<?php

namespace Database\Seeders;

use App\Models\PetCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetCategory::factory()
        ->count(10)
        ->hasPets(2)
        ->create();
    }
}
