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
    public function userOrder()
    {
        return $this->belongsTo(User::class, 'id');
    }
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
            'user_id'       => Auth()->id(),
            'product_id'    => $request->product_id,
            'order_id'      => $request->order_id,
            'Qty'           => $request->Qty,
            'price'         => $product->product_price,
            'total'         => $product->product_price
        ];

        return $credentials;
    }
}
