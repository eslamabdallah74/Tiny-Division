<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    protected $fillable =[
         'user_id',
         'order_id',
         'product_id',
         'price',
         'quntity',
         'total',
     ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
