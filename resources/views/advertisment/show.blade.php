@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
         Advertisment Information
         </h2>
     </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('advertisment.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Advertisment Information</h6>
    </div>
<div class="card-body row justify-content-md-center">
  <div class="col-md-6">
     <div class="table-responsive">
   <table class="table table-borderless  bg-light mt-4">
              <tr>
                <th class="text-right">Advertisment Name : </th>
                <td>{{ $advertisment->advertisment_name }}</td>
              </tr>


   </table>
   </div>
  </div>
 </div>
 </div>


@stop