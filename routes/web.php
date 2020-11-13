<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart',[
 
    'uses'=>'FrontEndController@cart',
      
    'as'  =>'cart'
  
  
  ]);

  Route::get('/shop',[
 
    'uses'=>'FrontEndController@shop',
      
    'as'  =>'shop'
  
  ]); 

  Route::get('/checkout',[
 
    'uses'=>'FrontEndController@checkout',
      
    'as'  =>'checkout'
  
  ]);

  Route::get('/login/user',[
 
    'uses'=>'FrontEndController@login',
      
    'as'  =>'login.user'
  
  ]); 


