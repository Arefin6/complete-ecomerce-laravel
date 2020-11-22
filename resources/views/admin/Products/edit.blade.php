@extends('admin.layouts.app')
@section('title')
 Edit Product
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit  Product</h4>
                  <form class="cmxform" id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('product.update',['id'=>$Product->id]) }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="pname">Name </label>
                        <input id="pname" value="{{$Product->name}}" class="form-control" name="product_name" minlength="2" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="pprice">Price </label>
                        <input id="pprice" value="{{$Product->price}}" class="form-control" name="product_price" minlength="2" type="number" required>
                      </div>
                    <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id"  id="category" class="form-control">
                         @foreach($categories as $category) -->
                             <option  value="{{ $category->id}}">{{ $category->category_name }}</option> 
                         @endforeach
                    </select>
                   </div>
                      <div class="form-group">
                        <label for="pimage">Image:</label>
                        <input id="pimage" class="form-control" name="product_image" type="file">
                      </div>    
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection