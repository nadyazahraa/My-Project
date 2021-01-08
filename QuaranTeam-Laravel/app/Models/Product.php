<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'productId';
    protected $table = "product";
    protected $fillable = ['product_Name','product_Price','product_Quantity','categoryId','product_Description','photo_Path'];

    public function category()
    {
      return $this->belongsTo(Category::class, 'categoryId');
    }
}
