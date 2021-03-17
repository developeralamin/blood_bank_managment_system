@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
  
<div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Add Blood Group
         </h2>
     </div>

 

  	<div class="col-md-6 text-right">
  	 	<a href="{{ route('blood.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back </a>
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
         Add Blood Group
      </h6>  
     </div>



      <div class="card-body row justify-content-md-center">
  <div class="col-md-6">

   {{--  @if($mode == 'Edit')

    {{  Form::model($blood,['route' =>['blood.update',$blood->id], 'method' => 'put']) }}
   

    @else --}}

    {!! Form::open(['route' => 'blood.store','method' => 'post']) !!}

    {{-- @endif --}}



  <div class="form-group">
    <label for="blood_title">Blood Group<span class="text-danger">*</span></label>
     {{ Form::text('blood_name', NULL, [ 'class'=>'form-control', 'id' => 'blood_title', 'placeholder' => 'Blood Group' ]) }}
  </div>


  <div class="form-group">
    <label for="organized_by">Give Blood<span class="text-danger">*</span></label>
     {{ Form::text('give_blood', NULL, [ 'class'=>'form-control', 'id' => 'organized_by', 'placeholder' => 'Give Blood' ]) }}
  </div>

  <div class="form-group">
    <label for="organized_by">Receive Blood<span class="text-danger">*</span></label>
     {{ Form::text('receive_blood', NULL, [ 'class'=>'form-control', 'id' => 'organized_by', 'placeholder' => 'Receive Blood' ]) }}
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop