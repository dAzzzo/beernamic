<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoMetodoPago extends Model
{
    use HasFactory;

    protected $table = 'pedido_metodo_pago';
    public $timestamps = false;

    protected $fillable = [
        'pedido_id',
        'metodo_id',
    ];

    // Relación con el modelo Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedidos::class, 'pedido_id');
    }

    // Relación con el modelo MetodoPago
    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'metodo_id');
    }
}
