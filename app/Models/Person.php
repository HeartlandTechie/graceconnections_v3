<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function person()
    {

        return $this->belongsToMany(Address::class);

    }


    public function address()
    {
        $this->hasManyThrough(Address::class, Person::class);
    }

    public function growthstatus()
    {
        return $this->belongsToMany(GrowthStatus::class);
    }
}


