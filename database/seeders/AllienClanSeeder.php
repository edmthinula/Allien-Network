<?php

namespace Database\Seeders;

use App\Models\AllienClan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllienClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AllienClan::factory()->count(10)->create();
    }
}
