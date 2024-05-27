<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'dirección',
    ];

    protected $hidden = [
        'contraseña',
    ];
}
