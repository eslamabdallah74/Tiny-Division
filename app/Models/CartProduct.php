<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    protected $table = 'cart_products';
    protected $fillable =[
         'product_id',
         'user_id',
         'total',
         'Qty',
         'cart_id',
         'price'
     ];
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

    public static function rules()//Validation
    {
        $rules = [
            'product_id' => 'integer|exists:products,id'
        ];

        return $rules;
    }
    public static function credentials($request,$product)//Store and Update
    {
        $credentials = [
            'product_id'    => $request->product_id,
            'user_id'       => Auth()->id(),
            'Qty'           => 1,
            'price'         => $product->product_price,
            'total'         => $product->product_price
        ];

        return $credentials;
    }


}
