<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $fillable = [
        
        'firstname',
        'lasname',
        'nationality',
        'date_of_birth'
    ];

    public function cars(){

        return $this -> belongsToMany(Car::class);
    }
}
