@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          All Blood Information
         </h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('blood.create') }}" class="btn btn-danger"> <i class="fa fa-plus"></i> Blood Add</a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary"> All Blood Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    {{-- <th>ID</th>       --}}
                    <th>Blood Group</th>      
                    <th>Give Blood</th>      
                    <th>Receive Blood</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                   <tr>                                              
                    {{-- <th>ID</th>       --}}
                    <th>Blood Group</th>      
                    <th>Give Blood</th>      
                    <th>Receive Blood</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($bloods as $blood)

       <tr>
          {{-- <td>{{ $blood->id }}</td> --}}
          <td>{{ $blood->blood_name }}</td>
          <td>{{ $blood->give_blood }}</td>
          <td>{{ $blood->receive_blood }}</td>
         
          
          <td class="text-right">
  {{-- <form method='post' action="{{ route('blood.destroy',['blood' => $blood->id]) }}"> --}}
           {{--  @csrf --}}
        <a href="{{ route('blood.show',['blood' =>$blood->id]) }}"class="btn btn-info">
          <i class="fa fa-eye"></i>
         </a>   
        <a href="{{ route('blood.edit',['blood' =>$blood->id]) }}"class="btn btn-info">
          <i class="fa fa-edit"></i>
         </a>  

        {{-- @method('DELETE')               
       <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></button>  --}}
    {{--   </form>        --}}                          
   </td>
  </tr>

@endforeach
       </tbody>
   </table>
   </div>
  </div>
 </div>


@stop