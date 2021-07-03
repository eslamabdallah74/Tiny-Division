<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable =[
         'user_id',
         'status',
         'total',
     ];
    public function userOrder()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
