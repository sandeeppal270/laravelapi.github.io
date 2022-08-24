<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function product_save(Request $request){
        // $request->validate([
        //     'product_id'=>'required',
        //     'product_name'=>'required',
        //     'product_count'=>'required',
           
        // ]);

        // $product = Product::create([
        //     'product_id'=>$request->product_id,
        //     'product_name'=>$request->product_name,
        //     'product_count'=>$request->product_count,
            
        // ]);
        // return response([
        //     'messsage'=>'Product Uploaded',
        //     'status'=>'success',
        //     'product'=>$product
        // ],200);

        return "hello";
       

}

public function product_list(Request $request){
//     $product = Product::all();
//     return response([
//         'product'=>$product
//     ],200);
// }
return "hello";

}
}