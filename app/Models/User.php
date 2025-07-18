<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    // Relasi one-to-many: Satu User punya banyak Address
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    // Relasi one-to-many: Satu User punya banyak Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}