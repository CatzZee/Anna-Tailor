<?php

// app/Models/Payment.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_method',
        'total_payment',
        'status',
    ];

    // Relasi inverse one-to-one: Satu Payment dimiliki oleh satu Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}