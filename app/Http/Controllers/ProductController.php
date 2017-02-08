<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function getFruits() {
      $dataProducts = Product::all();
      return view('index', ['products' => $dataProducts]);
    }
    public function getIndex($id) {
      $product = Product::findOrFail($id);
      return view('products.show', ['product' => $product]);
    }
    public function addToStock(Request $request) {
      $product = new Product;
      $product->name = $request->name;
      $product->stock = $request->stock;
      $product->price = $request->price;
      $product->save();
      return redirect('/views');
     }
}
 //redirect()->route('profile');
