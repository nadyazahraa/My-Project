<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "orderdetail";
    protected $fillable = ['productId','quantity','discount','order_HeaderId'];
    public $timestamps = false;
}
