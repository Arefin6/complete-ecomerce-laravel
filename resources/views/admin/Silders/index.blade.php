@extends('admin.layouts.app')
@section('title')
 All Sliders
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Sliders</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Description One</th>
                            <th>Description Two</th>
                            <th>Slider Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($sliders->count()>0)
                   
                   
                   @foreach($sliders as $slider)
                       <tr>
                           <td>
                           {{$slider->id}}
                           </td>
                           <td>
                               {{ $slider->description_1 }}
                           </td>
                           <td>
                               {{ $slider->description_2}}
                           </td>
                           <td>
                               <img src="{{asset($slider->image)}}" alt="" width="600px">
                            </td>
                           <td>
                               <a href="{{ route('slider.edit', ['id' => $slider->id ]) }}" class="btn  btn-info">
                                   <!-- <span class="glyphicon glyphicon-pencil"></span> -->
                                   Edit
                               </a>
                           </td>

                           <td>
                               <a href="{{ route('slider.delete', ['id' => $slider->id ]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                   Delete
                               </a>
                           </td>
                       </tr>
                   @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No sliders Yet..</th>
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