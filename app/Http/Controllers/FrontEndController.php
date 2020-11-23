<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Product;

use App\Category;
class FrontEndController extends Controller
{
   
  public function home(){

    $sliders = Slider::all();
    $products  = Product::all();

    return view('welcome')
    ->with('sliders',$sliders)
    ->with('products',$products);

   }

   public function cart(){
       return view('cart');
   }
   public function shop(){
    $products  = Product::all();
    $categories  = Category::all();

    return view('shop')
    ->with('products',$products)
    ->with('categories',$categories);
   }
   
   public function viewBYCat($id){

       $product = Product::where('category_id',$id)->get();

       $categories  = Category::all();

       return view('viewbycat')
       ->with('categories',$categories)
       ->with('products', $product);
   }

   public function checkout(){
    return view('checkout');
  }  
  
  public function login(){
    return view('login');
  } 

}
