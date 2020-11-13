<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    
   public function cart(){
       return view('cart');
   }
   public function shop(){
    return view('shop');
   }
   
   public function checkout(){
    return view('checkout');
  }  
  
  public function login(){
    return view('login');
  } 

}
