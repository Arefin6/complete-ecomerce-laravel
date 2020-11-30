@extends('admin.layouts.app')
@section('title')
 All Orders
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Orders</h4>
              @if(Session::has('error'))
						    <div class="alert alert-danger">{{Session::get('error')}}</div>
						     @endif
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Cart</th>
                            <th>Payment Id</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($orders as $order )
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->address}}</td>
                            <td>
                             @foreach($order->cart->items as $item)
                               {{$item['product_name'].','}}
                             @endforeach
                            </td>
                            <td>{{$order->payment_id}}</td>
                           
                            <td>
                              <a href="{{route('view.pdf',['id'=>$order->id])}}" class="btn btn-outline-primary">View</a>
                            </td>
                        </tr>
    
                       
                      @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection