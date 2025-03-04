<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function User(){
        return $this->belongsToMany(User::class);
    }

}
