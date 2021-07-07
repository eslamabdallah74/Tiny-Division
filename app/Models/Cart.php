<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable =[
        'user_id',
        'total'
    ];
    public function products()
    {
        return $this->belongsToMany(Products::class,'cart_products');
    }

    use HasFactory;
}
