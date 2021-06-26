<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\User;
use AuthenticatesWithLdap;



class ProductRivew extends Model
{
    use HasFactory;

    protected $table = 'product_rivews';
    protected $fillable =[
         'user_id',
         'product_id',
         'review',
         'rating',
     ];


    public function GetUser()
    {
        return $this->belongsTo(User::class, 'user_id' ,'id');

    }
    public static function rules()
    {
        $rules = [
            'review'          => 'required|string|max:255|min:3',
            'rating'          => 'required|integer|max:255',

        ];
        return $rules;
    }
    public static function credentials($request,$productID)
    {
        $credentials = [
            'product_id'  => $productID,
            'user_id'       => Auth()->id(),
            'review'        =>  $request->review,
            'rating'        =>  $request->rating,
        ];
        return $credentials;
    }
}
