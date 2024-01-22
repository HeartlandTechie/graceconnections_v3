<?php

namespace Database\Seeders;

use App\Models\GrowthStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrowthStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inputs[] = ['name'=> 'Guest'];
        $inputs[] = ['name'=> 'Seeker'];
        $inputs[] = ['name'=> 'Attender'];
        $inputs[] = ['name'=> 'Volunteer'];
        $inputs[] = ['name'=> 'Leader'];
        $inputs[] = ['name'=> 'Small Group Leader'];
        $inputs[] = ['name'=> 'Team Leader'];
        $inputs[] = ['name'=> 'Associate Pastor'];
        $inputs[] = ['name'=> 'Pastor'];
        $inputs[] = ['name'=> 'Lead Pastor'];
        $inputs[] = ['name'=> 'Campus Pastor'];

        GrowthStatus::insert($inputs);
    }
}
