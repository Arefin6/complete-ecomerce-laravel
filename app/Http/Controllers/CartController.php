<?php

namespace App\Http\Controllers;

use App\Product;

use App\Cart;

use Session;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id){
         
        $product = Product::find($id);

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        // dd(Session::get('cart'));
        return redirect()->route('shop');
    }


    public function cart(){
        if(!Session::has('cart')){
            return view('cart');
        }

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items]);
    }

    public function updateCart(Request $request){

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($request->id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect()->route('cart');
    }

    public function removeFromCart($id){
          
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
       
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        //dd(Session::get('cart'));
        return redirect()->route('cart');
    }
}
