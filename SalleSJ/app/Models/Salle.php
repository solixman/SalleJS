<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = [
     'name',
     'type',
     'status',
     'capacity',
     'description'
    ];

    public function Reservation(){
        return $this -> hasMany(Reservation::class);
    }

}
