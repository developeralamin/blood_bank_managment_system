@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
   @if($mode == 'Edit')
     <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          Update Single Camp
         </h2>
  	 </div>
  @else

<div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Add New Camp
         </h2>
     </div>

  @endif

  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('camp.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back </a>
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
         Update Single Camp
      </h6>  
     </div>
 @else 
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
          Add New Camp
      </h6>  
     </div>
 @endif


      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

    @if($mode == 'Edit')

    {{  Form::model($camp,['route' =>['camp.update',$camp->id], 'method' => 'put']) }}
   

    @else

    {!! Form::open(['route' => 'camp.store','method' => 'post']) !!}

    @endif



  <div class="form-group">
    <label for="camp_title">Camp Title<span class="text-danger">*</span></label>
     {{ Form::text('camp_title', NULL, [ 'class'=>'form-control', 'id' => 'camp_title', 'placeholder' => 'Camp Title' ]) }}
  </div>

  <div class="form-group">
    <label for="state_id">State Name<span class="text-danger">*</span></label>
     {{ Form::select('state_id', $state,NULL, [ 'class'=>'form-control', 'id' => 'state_id', 'placeholder' => 'Select State' ]) }}
  </div>

  <div class="form-group">
    <label for="city_name">City Name<span class="text-danger">*</span></label>
     {{ Form::select('city_id', $city,NULL, [ 'class'=>'form-control', 'id' => 'city_name', 'placeholder' => 'Select City' ]) }}
  </div>


  <div class="form-group">
    <label for="organized_by">Organized By<span class="text-danger">*</span></label>
     {{ Form::text('organized_by', NULL, [ 'class'=>'form-control', 'id' => 'organized_by', 'placeholder' => 'Organized By' ]) }}
  </div>

  <div class="form-group">
    <label for="details">Details<span class="text-danger">*</span></label>
     {{ Form::textarea('details', NULL, [ 'rows'=> '10','col'=>'10','class'=>'form-control', 'id' => 'details', 'placeholder' => 'Text your Comment' ]) }}
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop