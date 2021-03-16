@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          All City Information
         </h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('city.create') }}" class="btn btn-info"> <i class="fa fa-plus"></i> New City</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">All City Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    {{-- <th>ID</th>       --}}
                    <th>City Name</th>      
                    <th>PIN CODE</th>      
                    <th>District</th>      
                    <th>State Name</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                   <tr>                                              
                    {{-- <th>ID</th>       --}}
                    <th>City Name</th>      
                    <th>PIN CODE</th>      
                    <th>District</th>      
                    <th>State Name</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($cities as $city)

       <tr>
          {{-- <td>{{ $city->id }}</td> --}}
          <td>{{ $city->city_name }}</td>
          <td>{{ $city->pin_code }}</td>
          <td>{{ $city->district }}</td>
          <td>{{ $city->state_id }}</td>
          
          <td class="text-right">
  <form method='post' action="{{ route('city.destroy',['city' => $city->id]) }}">
            @csrf
        <a href="{{ route('city.show',['city' =>$city->id]) }}"class="btn btn-info">
          <i class="fa fa-eye"></i>
         </a>   
        <a href=""class="btn btn-info">
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