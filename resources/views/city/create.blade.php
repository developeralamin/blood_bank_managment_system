@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
   @if($mode == 'Edit')
     <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          Update City
         </h2>
  	 </div>
     @else
     <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Add New City
         </h2>
     </div>

@endif

  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('city.store') }}" class="btn btn-info"> <i class="fa fa-minus"></i> Back </a>
  	 </div>
  </div>
 
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<!-- DataTales Example -->

<div class="card shadow page-header mb-4">

   @if($mode == 'Edit')

   <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
         Update City
      </h6>
         
     </div>
     @else
     <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
          Add New City
      </h6>
         
     </div>
   @endif  

<div class="card-body row justify-content-md-center">
  <div class="col-md-6">

    @if($mode == 'Edit')

    {{  Form::model($city, ['route' =>['city.update',$city->id],'method' => 'put']) }}
    
    @else

    {!! Form::open(['route' => 'city.store','method' => 'post']) !!}

    @endif



  <div class="form-group">
    <label for="branch_name">State Name<span class="text-danger">*</span></label>
     {{ Form::select('state_id',$states, NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => 'Select State' ]) }}
  </div>

  <div class="form-group">
    <label for="branch_name"> City Name<span class="text-danger">*</span></label>
     {{ Form::text('city_name', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => ' City Name' ]) }}
  </div>

  <div class="form-group">
    <label for="branch_name">PIN CODE<span class="text-danger">*</span></label>
     {{ Form::text('pin_code', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => ' Pin Code' ]) }}
  </div>

  <div class="form-group">
    <label for="branch_name">District Name<span class="text-danger">*</span></label>
     {{ Form::text('district', NULL, [ 'class'=>'form-control', 'id' => 'branch_name', 'placeholder' => ' District Name' ]) }}
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop