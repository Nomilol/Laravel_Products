<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function getIndex() {
      $dataProducts = Product::all();
      return view('index', ['products' => $dataProducts]);
    }
}
