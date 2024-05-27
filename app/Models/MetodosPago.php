<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación con el modelo Pedido
    public function pedidos()
    {
        return $this->belongsToMany(Pedidos::class, 'pedido_metodo_pago', 'MetodoID', 'PedidoID');
    }
}
