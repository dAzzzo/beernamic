<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'UserID',
        'ProductoID',
        'Cantidad'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductoID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}

