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

    public function create(){

        return view("product.create");

    }


    public function store(Request $request){

    $data = array();
    $data['product_name'] = $request->product_name ;
    $data['product_code'] = $request->product_code ;
    $data['details'] = $request->details ;
   

    $image = $request->file('product_image');

    if($image){
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image -> getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext; 
        $upload_path = 'public/media/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);

   

    $data['product_image'] = $image_url;
    $product = DB::table('products')->insert($data);
    return redirect()->route('product.index')
            ->with('success','Product created successfully');

        }
    }
}
