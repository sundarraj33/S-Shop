<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\Candidate_controller;

Route::get('/sample', function () {
   return view('templates.sample');
});

Route::get('/',[Home_controller::class,'home'])->name('home.index');


Route::get('/show_product/{id}',[Home_controller::class,'show_product_id'])->name('home.show_product_id');


Route::get('/product_details', [Home_controller::class,'product_details'])->name('home.product_details');

Route::post('/store_product',[Home_controller::class,'store_product'])->name('store_product');

Route::post('/delete_store_product',[Home_controller::class,'delete_store_product'])->name('delete_store_product');

// --------------------------------------
//  Candidates 
// -------------------------------------
Route::get('/register',[Candidate_controller::class,'candidate_register'])->name('candidates.register');
Route::post('/store_candidates',[Candidate_controller::class,'store_candidates'])->name('candidate.store');


Route::post('/candidate_login',[Candidate_controller::class,'candidate_login'])->name('candidates.login');