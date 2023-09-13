<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function show($product){
        return view('products.product', compact('product'));
    }

    public function store(){
        
    }
}
