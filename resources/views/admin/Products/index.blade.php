@extends('admin.layouts.app')
@section('title')
 All Products
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Products</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($products->count()>0)
                   
                   
                   @foreach($products as $product)
                       <tr>
                           <td>
                           {{$product->id}}
                           </td>
                           <td>
                               {{ $product->name }}
                           </td>
                           <td>
                               {{ $product->price }}
                           </td>
                           <td>
                               <img src="{{asset($product->image)}}" alt="" width="600px">
                            </td>
                           <td>
                               <a href="{{ route('product.edit', ['id' => $product->id ]) }}" class="btn  btn-info">
                                   <!-- <span class="glyphicon glyphicon-pencil"></span> -->
                                   Edit
                               </a>
                           </td>

                           <td>
                               <a href="{{ route('product.delete', ['id' => $product->id ]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                   Delete
                               </a>
                           </td>
                       </tr>
                   @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No Products Yet..</th>
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