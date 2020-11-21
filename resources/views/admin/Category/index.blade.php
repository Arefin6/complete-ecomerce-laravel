@extends('admin.layouts.app')
@section('title')
 All Categories
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Category</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($categories->count()>0)
                   
                   
                   @foreach($categories as $category)
                       <tr>
                           <td>
                           {{$category->id}}
                           </td>
                           <td>
                               {{ $category->category_name }}
                           </td>
                           <td>
                               <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn  btn-info">
                                   <!-- <span class="glyphicon glyphicon-pencil"></span> -->
                                   Edit
                               </a>
                           </td>
                           <td>
                               <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                   Delete
                               </a>
                           </td>
                       </tr>
                   @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No Categories Yet..</th>
                   </tr>
                @endif   
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection