<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;


class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

   /**
     * Get the category that owns the Products
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
     public function productOrder()
    {
        return $this->hasMany(Order::class, 'product_id');

    }
}



