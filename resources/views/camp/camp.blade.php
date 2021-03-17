@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          All Camp Information
         </h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('camp.create') }}" class="btn btn-danger"> <i class="fa fa-plus"></i> New Camp</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">All Camp Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    <th>ID</th>      
                    <th>Camp Title</th>      
                    <th>State Name</th>      
                    <th>City Name</th>                             
                    <th>Organized By</th>      
                    {{-- <th>Details</th>       --}}
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                  <tr>                                              
                    <th>ID</th>      
                    <th>Camp Title</th>      
                    <th>State Name</th>      
                    <th>City Name</th>                      
                    <th>Organized By</th>      
                    {{-- <th>Details</th>       --}}
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($camps as $camp)

       <tr>
          <td>{{ $camp->id }}</td>
          <td>{{ $camp->camp_title }}</td>
          <td>{{ $camp->state->state_name }}</td>
          <td>{{ $camp->city->city_name }}</td>
          <td>{{ $camp->organized_by }}</td>
          {{-- <td>{{ $camp->details }}</td> --}}
          
          <td class="text-right">
  <form method='post' action="{{ route('camp.destroy',['camp' => $camp->id]) }}">
            @csrf
        <a href="{{ route('camp.show',['camp' =>$camp->id]) }}"class="btn btn-info">
          <i class="fa fa-eye"></i>
         </a>   
        <a href="{{ route('camp.edit',['camp' =>$camp->id]) }}"class="btn btn-info">
          <i class="fa fa-edit"></i>
         </a>  

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