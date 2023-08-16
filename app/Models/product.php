<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamp = true;
    protected $fillable = [
        'nama_product',
        'kategory',
        'harga',
        'foto'
    ];
    protected $hidden;
}
