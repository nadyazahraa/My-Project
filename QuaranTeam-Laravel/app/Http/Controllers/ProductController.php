<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use File;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::all();
       return view('Admin.Outputproduct', compact('products'));
    }

    public function create()
    {
        $category = Category::all();
        return view('Admin.inputProduct', compact('category'));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'photo_Path'          => 'required|image|mimes:png,jpg,jpeg',
        'product_Name'        => 'required',
        'product_Price'       => 'required',
        'product_Quantity'    => 'required',
        'categoryId'          => 'required',
        'product_Description' => 'required'
      ]);

      //upload image
      $image = $request->file('photo_Path');
      $imageName = $image->hashName();
      $request->photo_Path->move(public_path('img'), $imageName);

      Product::create([
         'photo_Path'          => $imageName,
         'product_Name'        => $request->product_Name,
         'product_Price'       => $request->product_Price,
         'product_Quantity'    => $request->product_Quantity,
         'categoryId'          => $request->categoryId,
         'product_Description' => $request->product_Description
     ]);

      return redirect('product');
    }

    public function edit($productId)
    {
      $products = Product::findOrFail($productId);
      $category = Category::all();
      return view('Admin.updateProduct', ['products' => $products, 'category' => $category]);
    }

    public function update(Request $request, $productId)
    {
      $this->validate($request, [
        'product_Name'        => 'required',
        'product_Price'       => 'required',
        'product_Quantity'    => 'required',
        'categoryId'          => 'required',
        'product_Description' => 'required'
      ]);

      //get data Products by ID
      $products = Product::findOrFail($productId);
      $category = Category::all();

      if($request->file('photo_Path') == "") {

          $products->update([
            'product_Name'        => $request->product_Name,
            'product_Price'       => $request->product_Price,
            'product_Quantity'    => $request->product_Quantity,
            'categoryId'          => $request->categoryId,
            'product_Description' => $request->product_Description
        ]);

      } else {

        //hapus old image
        File::delete('img/'.$products->photo_Path);

        //upload new image
        $image = $request->file('photo_Path');
        $imageName = $image->hashName();
        $request->photo_Path->move(public_path('img'), $imageName);

        $products->update([
          'photo_Path'          => $imageName,
          'product_Name'        => $request->product_Name,
          'product_Price'       => $request->product_Price,
          'product_Quantity'    => $request->product_Quantity,
          'categoryId'          => $request->categoryId,
          'product_Description' => $request->product_Description
        ]);
      }
          return redirect('product');
    }

    public function destroy($productId)
    {
      $products = Product::findOrFail($productId);
      File::delete('img/'.$products->photo_Path);
      $products->delete();

      return redirect('product');
    }
}
