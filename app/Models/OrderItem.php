<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 
        'nama_product', 
        'harga',
        'quantity',
    ];
    
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
}