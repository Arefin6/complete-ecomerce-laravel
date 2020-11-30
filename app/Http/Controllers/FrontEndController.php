<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Product;

use App\Category;

use Stripe\Charge;

use Stripe\Stripe;

use App\Cart;

use Session;

use App\Order;

class FrontEndController extends Controller
{
   
  public function home(){

    $sliders = Slider::all();
    $products  = Product::all();

    return view('welcome')
    ->with('sliders',$sliders)
    ->with('products',$products);

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

    if(!Session::has('cart')){

       return redirect()->back();
    }
    return view('checkout');
  }  
  
  public function login(){
    return view('login');
  } 
  public function signup(){
    return view('signup');
  } 

  public function storeCheckout(Request $request){
         
    if(!Session::has('cart')){

      return redirect()->back();
   }
   $oldCart = Session::has('cart')? Session::get('cart'):null;
   $cart = new Cart($oldCart);

   Stripe::setApiKey('sk_test_0XPcXtoFvqmsFVgc7Nmnryqu00fTNINhnO');

        try{

            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtainded with Stripe.js
                "description" => "Test Charge"
            ));

            $order = new Order;

            $order->name = $request->name;

            $order->address = $request->address;

            $order->cart = serialize($cart);

            $order->payment_id = $charge->id;
    
            $order->save();

        } catch(\Exception $e){
            Session::put('error', $e->getMessage());
            return redirect()->back();
        }

        Session::forget('cart');
        Session::flash('success', 'Payment Completed successfully.');
        return redirect()->route('cart');
  }

}
