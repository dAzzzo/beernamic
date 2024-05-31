<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'UserID';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];


    public function carts()
    {
        return $this->hasMany(Cart::class, 'UserID');
    }
}
