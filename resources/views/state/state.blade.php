@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          All State Information
         </h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('state.create') }}" class="btn btn-danger"> <i class="fa fa-plus"></i> New State</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">  All Sate Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-borderless table-striped"  id="dataTable">
              <thead>
                   <tr>                                              
                    <th>ID</th>      
                    <th>State Name</th>                         
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                   <tr>                                              
                    <th>ID</th>      
                    <th>State Name</th>                         
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($states as $state)

       <tr>
          <td>{{ $state->id }}</td>
          <td>{{ $state->state_name }}</td>
          
          <td class="text-right">
  <form method='post' action="{{ route('state.destroy',['state' => $state->id]) }}">
            @csrf
          
       {{--  <a href="{{ route('state.edit',['state' => $state->id]) }}"class="btn btn-info">
          <i class="fa fa-edit"></i>
         </a>   --}}

        @method('DELETE')               
       <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></button> 
      </form>                                 
   </td>
  </tr>

@endforeach
       </tbody>
   </table>
   </div>
  </div>
 </div>


@stop