<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Product;

use Session;

use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.Products.index')
        ->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        return view('admin.Products.create')
        ->with('categories',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->product_image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/products', $image_new_name);

        $product = Product::create([
			
            'name' => $request->product_name,
            'price' => $request->product_price,
            'image' => 'uploads/products/'.$image_new_name,
            'category_id' => $request->category_id,
        ]);

        Session::flash('success','Product created successfully');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('admin.Products.edit')
        ->with('Product',$product)
        ->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
		
		if($request->hasFile('product_image')){
			
			 $image = $request->product_image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/products', $image_new_name);
		
		$product->image = 'uploads/products/'.$image_new_name;	
				
			
		}
		
		 $product->name = $request->product_name;
		
         $product->price = $request->product_price;
		
         $product->category_id = $request->category_id;
		
		$product->save();
		
		Session::flash('success','product updated Successfully');
		
		return redirect()->route('product.index');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
		
		$imagePath = $product->image;
		
		if(file_exists($imagePath)){
			
			 File::delete($imagePath);
		}
		$product->delete();
		
		 Session::flash('success', 'Product Deleted successfully.');

        return redirect()->route('product.index');
    }
}
