<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacione extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'fecha',
        'hora',
        'personas',
    ];

    public function personas(){
        return $this->belongsTo(Persona::class);
    }
}
