<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        
        
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
