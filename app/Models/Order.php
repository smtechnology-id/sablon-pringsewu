<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'code_order',
        'address',
        'payment_proof',
        'status',
        'notes_from_admin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
