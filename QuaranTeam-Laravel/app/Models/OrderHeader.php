<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
  protected $table = "orderheader";
  protected $fillable = ['orderHeaderId','cashierId','status','total'];
}
