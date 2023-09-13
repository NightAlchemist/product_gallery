<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::take(8)->get(); // Limit to 8 items
        return view('products.index', compact('products'));
    }

    public function show($product){
        return view('products.product', compact('product'));
    }

    public function store(){
        
    }
}
