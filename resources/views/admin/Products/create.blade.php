@extends('admin.layouts.app')
@section('title')
 Add Product
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add  Product</h4>
                  <form class="cmxform" id="commentForm" method="post" action="{{ route('product.store') }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="pname">Name </label>
                        <input id="pname" class="form-control" name="product-name" minlength="2" type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="pprice">Price </label>
                        <input id="pprice" class="form-control" name="product-price" minlength="2" type="number" required>
                      </div>
                    <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        <!-- @foreach($categories as $category) -->
                            <!-- <option value="{{ $category->id}}">{{ $category->name }}</option> -->
                        <!-- @endforeach -->
                    </select>
                   </div>
                      <div class="form-group">
                        <label for="pimage">Image:</label>
                        <input id="pimage" class="form-control" name="product-image" type="file" required>
                      </div> 
                      <div class="form-group">
                        <label for="pstatus">Product Status:</label>
                        <input id="pstatus" class="form-control" name="product-status" type="checkbox" value='true'>
                      </div>    
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection