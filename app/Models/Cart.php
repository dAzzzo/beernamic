<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'CarritoID';

    protected $fillable = [
        'UserID',
        'id',
        'Cantidad'
    ];

    public function product()
    {
        return $this->belongsTo(Producto::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}

