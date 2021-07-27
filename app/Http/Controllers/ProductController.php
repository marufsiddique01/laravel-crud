<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
    public function index(){

        $product = DB::table('products')->get();

        return view("product.index", compact('product'));

    }
}
