<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use Session;
use File;

class SlidertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.Silders.index')
        ->with('sliders',$sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Silders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->slider_image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/slider', $image_new_name);

        $slider = Slider::create([
			
            'description_1' => $request->description_one,
            'description_2' => $request->description_two,
            'image' => 'uploads/slider/'.$image_new_name,
            
        ]);

        Session::flash('success','Slider created successfully');

        return redirect()->route('slider.index');

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
        $slider = Slider::find($id);
       

        return view('admin.Silders.edit')
        ->with('slider',$slider);
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
        $slider = Slider::find($id);
		
		if($request->hasFile('slider_image')){
			
			 $image = $request->slider_image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/slider', $image_new_name);
		
		$slider->image = 'uploads/slider/'.$image_new_name;	
				
			
		}
		
		 $slider->description_1 = $request->description_one;
		
         $slider->description_2 = $request->description_two;
		
		
		$slider->save();
		
		Session::flash('success','slider updated Successfully');
		
		return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::find($id);
		
		$imagePath = $slider->image;
		
		if(file_exists($imagePath)){
			
			 File::delete($imagePath);
		}
		$slider->delete();
		
		 Session::flash('success', 'slider Deleted successfully.');

        return redirect()->route('slider.index');
    }
}
