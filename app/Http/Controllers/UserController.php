<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Product::get();
        return view('product',compact('data'));
    }
    public function detailsproduct($id){
        $product = Product::findOrFail($id);
        return view('details',compact('product'));
    }
}
