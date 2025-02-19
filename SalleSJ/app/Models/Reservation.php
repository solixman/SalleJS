<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_iD',
        'salle_id',
        'DateDebut',
        'DateFin'
    ];
    public function User(){
        return $this -> belongsto(User::class);
    }
    public function Salle(){
        return $this -> belongsto(Salle::class);
    }
}
