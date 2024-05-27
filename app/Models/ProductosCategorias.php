<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosCategorias extends Model
{
    use HasFactory;

    protected $table = 'productos_categorias';
    public $incrementing = false;
    protected $primaryKey = ['producto_id', 'categoria_id'];
    public $timestamps = false;

    protected $fillable = [
        'producto_id',
        'categoria_id',
    ];
}
