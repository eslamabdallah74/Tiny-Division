<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;


class OneProduct extends Model
{
    use HasFactory;

    public function ProductName()
    {
        return $this->hasMany(OrderProduct::class, 'product_id');
    }
}
