<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'personas',
        
        
    ];

    public function reservaciones()
    {
        return $this->hasMany(Reservacione::class);
    }
}
