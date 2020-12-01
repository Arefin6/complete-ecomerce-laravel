<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

use App\Client;

use Auth;

use Illuminate\Support\Facades\Hash;

use Session;

class AdminController extends Controller
{
    
 

    public function createAccount(Request $request){
          
        $this->validate($request, [
            'email' => 'required|unique:clients',
            'password' => 'required|min:4',

        ]);

        $client = new Client();
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));

        $client->save();

        Session::flash('success','You successfully created a Account');

        return redirect()->back();
 

    }

    public function accessAccount(Request $request){
          
        $this->validate($request, [
		
            'email'=>'required',
            
            'password'=>'required|min:4',
            
        ]);	
            
        $client = Client::where('email', $request->input('email'))->first();

        if($client){
            if(Hash::check($request->input('password'),$client->password)){
                
               Session::put('client',$client); 
               return redirect()->route('shop'); 
            }
            Session::flash('info','Wrong Password');

           return redirect()->back();

        }
        else{
        Session::flash('info','You Dont have Account');

        return redirect()->back();  
        }

    }
    

    public function orders(){

        $orders = Order::all();

        $orders->transform(function ($order,$key){
                   
              $order->cart = unserialize($order->cart);

              return $order;
        });

        return view('admin.Orders.index')->with('orders',$orders);
    }

    public function logout(){

        Session::forget('client');

        return redirect()->back();
    }
}
