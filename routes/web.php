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
  Route::post('/product/store',[
 
    'uses'=>'ProductController@store',
      
    'as'  =>'product.store'
  ]);
  Route::get('/slider/create',[
 
    'uses'=>'SlidertController@create',
      
    'as'  =>'slider.create'
  ]);

  Route::get('/sliders',[
 
    'uses'=>'SlidertController@index',
      
    'as'  =>'slider.index'
  ]);
  Route::post('/slider/store',[
 
    'uses'=>'SlidertController@store',
      
    'as'  =>'slider.store'
  ]);

  Route::get('/orders',[
 
    'uses'=>'AdminController@orders',
      
    'as'  =>'order.index'
  ]);


