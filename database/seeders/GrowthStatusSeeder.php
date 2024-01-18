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
        $inputs[] = ['status_name'=> 'Hardware'];
        $inputs[] = ['status_name'=> 'Software'];
        $inputs[] = ['status_name'=> 'Planning'];
        $inputs[] = ['status_name'=> 'Tools'];

        GrowthStatus::insert($inputs);
    }
}
