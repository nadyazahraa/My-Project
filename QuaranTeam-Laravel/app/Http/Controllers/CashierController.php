<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderHeader;
class CashierController extends Controller
{
  public function index(){
    $data = OrderHeader::all();
    return view('Cashier/display_order', ['orders' => $data]);
  }
  // public function detail($orderId){
  //   $data = Order::find($orderId);
  //   return view('Cashier/detail_order', ['orders' => $data]);

  public function detail(){
    return view('Cashier/detail_order');
  }
}
