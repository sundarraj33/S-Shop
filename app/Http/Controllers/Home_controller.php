<?php

namespace App\Http\Controllers;

// Models 

use App\Models\product_master;
use App\Models\product_image;
use App\Models\product_color;
use App\Models\Store_product;

use Illuminate\Http\Request;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Home_controller extends Controller
{
    public function home(){

        $product_master = product_master::get();
         


        $product_color = product_color::select('id','product_id','color','img_url')
                        ->whereIn('product_id',$product_master->pluck('id'))
                        ->get(); 
                        
        // $product_image = product_image::where('product_id',$product_master->pluck('id'))->get();
        // return $product_image;
        return view('Home',[
            'product_master_data' => $product_master,
            'product_color_data'  => $product_color,
            
            ]);
    }


    public function show_product_id($id){

        
        $product_master = product_master::where('id',$id)->first();
        
        $product_color = product_color::select('id','product_id','color')
                        ->whereIn('product_id',$product_master->pluck('id'))
                        ->get(); 
        
        
            $product_image = $product_image = product_image::select(
                            'id',
                            'product_color_id',
                            'product_id',
                            'product_color',
                            'product_img_url'
                        )
                            ->where('product_id', $id)                            
                            ->orderBy('product_color_id', 'ASC')
                            ->get();

    
            // return $product_image;
            
        return view("product_details",[
            'product_master'=>$product_master,
            'product_color_data' => $product_color,
            'product_image' => $product_image
            ]);
    }


    public function store_product(Request $req){

        $currentTime = Carbon::now('Asia/Kolkata');

        
        $validated = $req->validate([            
            'size'  => 'required|string|max:100',
            'color' => 'required|string|max:100',
        ]);


        $store_product = Store_product::create([
            'product_id' => $req->id,
            'product_size' => $req->size,
            'product_color' => $req->color,
            'product_uptime' => $currentTime,
            'user_id' =>  $req->user_id,
        ]);
        
        

        if($store_product){
            $userid = session('user_id');

            $store_product_details = Store_product::where('user_id',$userid)->get();

            $master_product_details = product_master::select('id','title','brand','type','amount','image_url')
                        ->whereIn('id',$store_product_details->pluck('product_id'))
                        ->get();
                        


            return view('Cart',[
                'store_product_details' => $store_product_details,
                'master_product_details' => $master_product_details,
            ]);
            return "product store";
        }else{
            return "product not store";
        }
        
        
    }

    public function delete_store_product(Request $req){
        $id = $req->store_product_id;
        

        $storeProduct = Store_product::find($id);
        $storeProduct->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Product deleted successfully'
        ]);
    if ($storeProduct) {
        
        return back()->with('success', 'Product deleted successfully');
    }

    return back()->with('error', 'Product not found');

    }


    
}
