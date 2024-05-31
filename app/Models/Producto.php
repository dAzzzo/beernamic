<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'marca',
        'variedad',
        'Img',
        'precio',
        'stock',
        'Descripcion'
    ];

    // Relación con el carrito
    public function carts()
    {
        return $this->hasMany(Cart::class, 'ProductoID');
    }
}
