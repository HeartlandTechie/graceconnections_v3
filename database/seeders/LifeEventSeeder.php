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
        $inputs[] = ['event_name'=> 'Birth'];
        $inputs[] = ['event_name'=> 'Baptism'];
        $inputs[] = ['event_name'=> 'Follower'];
        $inputs[] = ['event_name'=> 'Volunteer'];
        $inputs[] = ['event_name'=> 'Engaged'];
        $inputs[] = ['event_name'=> 'Married'];

        LifeEvent::insert($inputs);

    }
}
