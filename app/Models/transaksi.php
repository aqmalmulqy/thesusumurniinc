<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    public $timestamp = true;
    protected $fillable = [
        'total_qty',
        'total_harga',
        'nama_customer',
        'alamat',
        'no_tlp',
    ];
    protected $hidden;
}
