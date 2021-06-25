<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;


class ProductRivew extends Model
{
    use HasFactory;

    public function GetUser()
    {
        return $this->belongsTo(User::class, 'user_id' ,'id');

    }
}
