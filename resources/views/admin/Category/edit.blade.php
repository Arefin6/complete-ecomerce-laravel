@extends('admin.layouts.app')
@section('title')
 Edit Category
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Edit  Category</h4>
                  <form class="cmxform" id="commentForm" method="post" action="{{ route('category.update',['id' => $category->id]) }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="cname">Name (required, at least 2 characters)</label>
                        <input id="cname" class="form-control" name="name" minlength="2" type="text" value="{{$category->category_name}}" required>
                      </div>
                          
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection