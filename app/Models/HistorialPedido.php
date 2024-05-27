<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialPedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'user_id',
        'fecha',
        'estado',
    ];

    // Relación con el modelo Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedidos::class, 'pedido_id');
    }

    // Relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }
}
