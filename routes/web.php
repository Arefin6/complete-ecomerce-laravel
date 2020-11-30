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

Route::get('/',[
 
  'uses'=>'FrontEndController@home',
    
  'as'  =>'home'


]);

 Route::get('/cart',[
 
    'uses'=>'CartController@cart',
      
    'as'  =>'cart'
  
  
  ]);

  Route::post('/cart/update',[
 
    'uses'=>'CartController@updateCart',
      
    'as'  =>'cart.update'
  
  
  ]);

  Route::get('/cart/remove/{id}',[
 
    'uses'=>'CartController@removeFromCart',
      
    'as'  =>'cart.remove'
  
  
  ]);
   
  
  Route::post('/checkout/store',[
 
    'uses'=>'FrontEndController@storeCheckout',
      
    'as'  =>'checkout.store'
  
  ]); 

  Route::get('/shop',[
 
    'uses'=>'FrontEndController@shop',
      
    'as'  =>'shop'
  
  ]); 

  Route::get('/view/{id}',[
 
    'uses'=>'FrontEndController@viewBYCat',
      
    'as'  =>'view.category'
  
  ]);

  Route::get('/checkout',[
 
    'uses'=>'FrontEndController@checkout',
      
    'as'  =>'checkout'
  
  ]);

  Route::get('/login/user',[
 
    'uses'=>'FrontEndController@login',
      
    'as'  =>'login.user'
  
  ]);

  Route::get('/cat/add/{id}',[
 
    'uses'=>'CartController@addToCart',
      
    'as'  =>'cart.add'
  
  ]);

  //backend stuffs


  Route::get('/admin',[
 
    'uses'=>'AdminController@dashboard',
      
    'as'  =>'admin.dashboard'
  
  ]);  
  Route::get('/category/create',[
 
    'uses'=>'CategoryController@create',
      
    'as'  =>'category.create'
  ]);
  Route::get('/categories',[
 
    'uses'=>'CategoryController@index',
      
    'as'  =>'category.index'
  ]);
   
  Route::post('/category/update/{id}',[
 
    'uses'=>'CategoryController@update',
      
    'as'  =>'category.update'
  ]);
  Route::get('/category/edit/{id}',[
 
    'uses'=>'CategoryController@edit',
      
    'as'  =>'category.edit'
  ]);
  Route::get('/category/delete/{id}',[
 
    'uses'=>'CategoryController@destroy',
      
    'as'  =>'category.delete'
  ]);


  Route::post('/category/store',[
 
    'uses'=>'CategoryController@store',
      
    'as'  =>'category.store'
  ]);  

  Route::get('/product/create',[
 
    'uses'=>'ProductController@create',
      
    'as'  =>'product.create'
  ]);
  Route::get('/products',[
 
    'uses'=>'ProductController@index',
      
    'as'  =>'product.index'
  ]);
  Route::get('/product/edit/{id}',[
 
    'uses'=>'ProductController@edit',
      
    'as'  =>'product.edit'
  ]);
  Route::post('/product/store',[
 
    'uses'=>'ProductController@store',
      
    'as'  =>'product.store'
  ]);
  Route::post('/product/update/{id}',[
 
    'uses'=>'ProductController@update',
      
    'as'  =>'product.update'
  ]);
  Route::get('/product/delete/{id}',[
 
    'uses'=>'ProductController@destroy',
      
    'as'  =>'product.delete'
  ]);
  Route::get('/slider/create',[
 
    'uses'=>'SlidertController@create',
      
    'as'  =>'slider.create'
  ]);

  Route::get('/sliders',[
 
    'uses'=>'SlidertController@index',
      
    'as'  =>'slider.index'
  ]);
  Route::get('/slider/edit/{id}',[
 
    'uses'=>'SlidertController@edit',
      
    'as'  =>'slider.edit'
  ]);
  Route::get('/slider/delete/{id}',[
 
    'uses'=>'SlidertController@destroy',
      
    'as'  =>'slider.delete'
  ]);
  Route::post('/slider/store',[
 
    'uses'=>'SlidertController@store',
      
    'as'  =>'slider.store'
  ]);
  Route::post('/slider/update/{id}',[
 
    'uses'=>'SlidertController@update',
      
    'as'  =>'slider.update'
  ]);

  Route::get('/orders',[
 
    'uses'=>'AdminController@orders',
      
    'as'  =>'order.index'
  ]);

  Route::get('/view/pdf/{id}',[
 
    'uses'=>'pdfController@viewPdf',
      
    'as'  =>'view.pdf'
  ]);


