@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
     <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          Add New State
         </h2>
  	 </div>
  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('state.store') }}" class="btn btn-info"> <i class="fa fa-minus"></i> Back </a>
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
   <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
          Add New State
      </h6>
         
     </div>
      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

  {{--   @if($mode == 'Edit')

    {{  Form::model($student_info, ['route' =>['student_info.update',$student_info->id], 
    'method' => 'put']) }}

    @else --}}

    {!! Form::open(['route' => 'state.store','method' => 'post']) !!}

   {{--  @endif --}}



  <div class="form-group">
    <label for="state_name">State Name<span class="text-danger">*</span></label>
     {{ Form::text('state_name', NULL, [ 'class'=>'form-control', 'id' => 'state_name', 'placeholder' => ' State Name' ]) }}
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop