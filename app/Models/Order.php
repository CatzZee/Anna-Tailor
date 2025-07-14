<?php

// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];

    // Relasi inverse one-to-many: Satu Order dimiliki oleh satu User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi one-to-one: Satu Order punya satu Payment
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    // Relasi many-to-many: Satu Order bisa punya banyak Product
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items')
                    ->withPivot('quantity') // Mengambil data 'quantity' dari tabel pivot
                    ->withTimestamps();
    }
}
