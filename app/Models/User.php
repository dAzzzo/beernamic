<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;

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
