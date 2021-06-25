<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    // protected $table = 'cart_products';
    // protected $fillable =[
    //     'user_id',
    //     'total'
    // ];
    /**
     * Get all of the comments for the CartProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    /**
     * Get all of the comments for the CartProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
 
    use HasFactory;
}
