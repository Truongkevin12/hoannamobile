<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    function product($id=0){
        $products = DB::table('products') ->where ('id',$id)->first();
        $data = ['id'=>$id,'products'=>$products];
        return view("product",$data);
    }
}
