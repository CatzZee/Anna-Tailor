<?php
// app/Models/Address.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'street_name',
        'house_number',
        'postal_code',
    ];

    // Relasi inverse one-to-many: Satu Address dimiliki oleh satu User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}