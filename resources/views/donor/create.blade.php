@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
   @if($mode == 'Edit')
     <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          Update <strong>{{ $donor->name }}</strong>  information
         </h2>
  	 </div>
    @else
    <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Add New Donor
         </h2>
     </div>

    @endif


  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('donor.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back </a>
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
          Update <strong>{{ $donor->name }}</strong>  information
      </h6>
     </div>
     @else
 <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
         Add New Donor
      </h6>
     </div>

     @endif

      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

    @if($mode == 'Edit')

    {{  Form::model($donor, ['route' =>['donor.update',$donor->id],  'method' => 'put']) }}
   

    @else

    {!! Form::open(['route' => 'donor.store','method' => 'post']) !!}

    @endif

  <div class="form-group">
    <label for="donor_name">Name<span class="text-danger">*</span></label>
     {{ Form::text('name', NULL, [ 'class'=>'form-control', 'id' => 'donor_name', 'placeholder' => ' Donor Name' ]) }}
  </div>

  <div class="form-group">
    <label for="gender">Gender<span class="text-danger">*</span></label>
     {{ Form::select('gender',['1'=>'Male','0'=>'Female'], NULL, [ 'class'=>'form-control', 'id' => 'gender', 'placeholder' => 'Gender' ]) }}
  </div>

  <div class="form-group">
    <label for="age">Age<span class="text-danger">*</span></label>
     {{ Form::text('age', NULL, [ 'class'=>'form-control', 'id' => 'age', 'placeholder' => 'Age' ]) }}
  </div>


  <div class="form-group">
    <label for="phone">Phone<span class="text-danger">*</span></label>
     {{ Form::text('phone', NULL, [ 'class'=>'form-control', 'id' => 'phone', 'placeholder' => 'Your Phone No.' ]) }}
  </div>


  <div class="form-group">
    <label for="email">Email<span class="text-danger">*</span></label>
     {{ Form::text('email', NULL, [ 'class'=>'form-control', 'id' => 'email', 'placeholder' => 'Your Email' ]) }}
  </div>

  <div class="form-group">
    <label for="email">Blood Group<span class="text-danger">*</span></label>
     {{ Form::select('blood_group_id',$blood_group,NULL, [ 'class'=>'form-control', 'id' => 'email', 'placeholder' => 'Select Blood' ]) }}
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop