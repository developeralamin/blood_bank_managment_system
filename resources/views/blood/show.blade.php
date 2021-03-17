@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
         Blood Information
         </h2>
     </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('blood.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Blood Information</h6>
    </div>
<div class="card-body row justify-content-md-center">
  <div class="col-md-6">
     <div class="table-responsive">
   <table class="table table-borderless mt- bg-light">
            <tr>
              <th class="text-right">Blood Group : </th>
                <td>{{ $blood->blood_name }}</td>
              </tr>
              <tr>
                <th class="text-right">Give Blood : </th>
                <td>{{ $blood->give_blood }}</td>
              </tr>

              <tr>
                <th class="text-right">Receive Blood : </th>
                <td>{{ $blood->receive_blood  }}</td>
              </tr>
             
   </table>
   </div>
  </div>
 </div>
 </div>


@stop