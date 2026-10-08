<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Candidate_controller extends Controller
{
    //

    public function candidate_register(){
        return view('templates.Register');
    }

    public function store_candidates(Request $req){

        $store_user = Users::create([
            'name' => $req->name,
            'email' =>  $req->email,
            'mobile' =>  $req->mobile,
            'password' => Hash::make($req->password),
            'password_decode' => $req->password
        ]);

        if($store_user){
            return redirect()->back()->with('success','Your Datas are insert successfully');            
        }else{
            return redirect()->back()->with('error','Something went wrong!');
        }
    }


    public function candidate_login(Request $req){
        $check_user = Users::select('id')
        ->where('mobile',$req->mobile)
        ->first();

        Session(['user_id' => $check_user->id]);
        
        if($check_user){
            return redirect()->back();
        }
    
    }
}
