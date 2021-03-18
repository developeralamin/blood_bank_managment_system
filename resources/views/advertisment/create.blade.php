@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
   @if($mode == 'Edit')
    <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Update Advertisment 
         </h2>
     </div>
   @else
  <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Add News 
         </h2>
     </div>

   @endif
  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('advertisment.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back </a>
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
       Update Advertisment 
      </h6>
     </div>
 @else
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
        Add News 
      </h6>
     </div>

 @endif
      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

    @if($mode == 'Edit')

    {{  Form::model($advertisment, ['route' =>['advertisment.update',$advertisment->id],  'method' => 'put']) }}
   
    @else

    {!! Form::open(['route' => 'advertisment.store','method' => 'post']) !!}

    @endif

  <div class="form-group">
    <label for="advertisment_name">Advertisment Name<span class="text-danger">*</span></label>
     {{ Form::text('advertisment_name', NULL, [ 'class'=>'form-control', 'id' => 'advertisment_name', 'placeholder' => 'Type Advertisment Name' ]) }}
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop