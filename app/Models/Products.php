<?php

namespace App\Models;

use App\Http\Controllers\CategoriesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function getCategory()
    {
        return $this->hasOne(related: Category::class, foreignKey: 'product_id', localKey: 'id');
    }
}



