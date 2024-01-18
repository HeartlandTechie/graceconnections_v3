<?php

namespace Database\Seeders;

use App\Models\LifeEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LifeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inputs[] = ['event_name'=> 'Hardware'];
        $inputs[] = ['event_name'=> 'Software'];
        $inputs[] = ['event_name'=> 'Planning'];
        $inputs[] = ['event_name'=> 'Tools'];

        LifeEvent::insert($inputs);

    }
}
