@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
         Donor <strong>{{  $donor->name  }} </strong> Information
         </h2>
     </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('donor.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Donor <strong>{{ $donor->name }} </strong> Information</h6>
    </div>
<div class="card-body row justify-content-md-center">
  <div class="col-md-6">
     <div class="table-responsive">
   <table class="table table-borderless  bg-light mt-4">
              <tr>
                <th class="text-right">Name : </th>
                <td>{{ $donor->name }}</td>
              </tr>

              <tr>
                <th class="text-right">Gender : </th>
                <td>{{ $donor->gender }}</td>
              </tr>

              <tr>
                <th class="text-right">Age : </th>
                <td>{{ $donor->age }}</td>
              </tr>

              <tr>
                <th class="text-right">Phone : </th>
                <td>{{ $donor->phone  }}</td>
              </tr>

              <tr>
                <th class="text-right">E-mail : </th>
                <td>{{ $donor->email  }}</td>
              </tr>
              <tr>
                <th class="text-right">Blood Group : </th>
                <td>{{ $donor->blood_group->blood_name  }}</td>
              </tr>
             
   </table>
   </div>
  </div>
 </div>
 </div>


@stop