@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
         <strong>{{  $city->city_name  }} </strong> Information
         </h2>
     </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('city.store') }}" class="btn btn-info"> <i class="fa fa-minus"></i> Back</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary"><strong>{{  $city->city_name  }} </strong> Information</h6>
    </div>
<div class="card-body row justify-content-md-center">
  <div class="col-md-6">
     <div class="table-responsive">
   <table class="table table-borderless  table-striped mt-4">
              <tr>
                <th class="text-right">City Name : </th>
                <td>{{ $city->city_name }}</td>
              </tr>

              <tr>
                <th class="text-right">PIN CODE : </th>
                <td>{{ $city->pin_code }}</td>
              </tr>

              <tr>
                <th class="text-right">District : </th>
                <td>{{ $city->district }}</td>
              </tr>

              <tr>
                <th class="text-right">State Name : </th>
                <td>{{ $city->state->state_name  }}</td>
              </tr>
             
   </table>
   </div>
  </div>
 </div>
 </div>


@stop