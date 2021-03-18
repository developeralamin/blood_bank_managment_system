@extends('layout.app')

@section('content')

 <div class="row page-header mb-5">
   @if($mode == 'Edit')
    <div class="col-md-6">
       <h2 class="m-0 font-weight-bold text-primary">
          Update News 
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
  	 	<a href="{{ route('news.store') }}" class="btn btn-danger"> <i class="fa fa-minus"></i> Back </a>
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
        Update News 
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

    {{  Form::model($news, ['route' =>['news.update',$news->id],  'method' => 'put']) }}
   
    @else

    {!! Form::open(['route' => 'news.store','method' => 'post']) !!}

    @endif

  <div class="form-group">
    <label for="news_name">Name<span class="text-danger">*</span></label>
     {{ Form::text('news_title', NULL, [ 'class'=>'form-control', 'id' => 'news_name', 'placeholder' => 'News Title ' ]) }}
  </div>

  <div class="form-group">
    <label for="news_name">Name<span class="text-danger">*</span></label>
     {{ Form::textarea('details', NULL, [ 'class'=>'form-control', 'id' => 'news_name', 'placeholder' => 'Add Details ' ]) }}
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}                             
                                    
   </div>
   </div>
  
 </div>




@stop