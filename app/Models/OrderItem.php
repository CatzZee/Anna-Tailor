<?php

// app/Models/OrderItem.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $table = 'order_items'; // Eksplisit menyebutkan nama tabel

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];
}
