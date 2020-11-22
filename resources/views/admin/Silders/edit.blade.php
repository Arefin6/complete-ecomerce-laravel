@extends('admin.layouts.app')
@section('title')
 Add Slider
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add  Slider</h4>
                  <form class="cmxform" enctype = "multipart/form-data" id="commentForm" method="post" action="{{ route('slider.update',['id' => $slider->id]) }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="des-1">Description 1 </label>
                        <input id="des-1" value="{{$slider->description_1}}" class="form-control" name="description_one" minlength="2" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="des-2">Description 2 </label>
                        <input id="des-2" value="{{$slider->description_2}}" class="form-control" name="description_two" minlength="2" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="simage">Image:</label>
                        <input id="simage" class="form-control" name="slider_image" type="file">
                      </div> 
                          
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection