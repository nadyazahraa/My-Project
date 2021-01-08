<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class SalesmanController extends Controller
{
    public function index() {
      $products = Product::all();
      $categories = Category::all();
      return view('Salesman/order', compact('products','categories'));
    }
}
