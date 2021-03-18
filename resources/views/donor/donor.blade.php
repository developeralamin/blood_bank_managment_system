@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          Blood Donor Information
         </h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('donor.create') }}" class="btn btn-danger"> <i class="fa fa-plus"></i> Blood Donor Add </a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary"> Blood Donor Information</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    <th>ID</th>      
                    <th>Name</th>      
                    <th>Gender</th>      
                    <th>Age</th>      
                    <th>Phone</th>      
                    <th>E-mail</th>      
                    <th>Blood Group</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                   <tr>                                              
                    <th>ID</th>      
                    <th>Name</th>      
                    <th>Gender</th>      
                    <th>Age</th>      
                    <th>Phone</th>      
                    <th>E-mail</th>      
                    <th>Blood Group</th>      
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($donors as $donor)

       <tr>
          <td>{{ $donor->id }}</td>
          <td>{{ $donor->name }}</td>
          <td>{{ ($donor->gender  == 1) ? 'Male' : 'Female' }}</td>
          <td>{{ $donor->age }}</td>
          <td>{{ $donor->phone }}</td>
          <td>{{ $donor->email }}</td>
          <td>{{ $donor->blood_group->blood_name }}</td>
         
          
          <td class="text-right">
<form method='post' action="{{ route('donor.destroy',['donor' => $donor->id]) }}">
            @csrf
        <a href="{{ route('donor.show',['donor' =>$donor->id]) }}"class="btn btn-info">
          <i class="fa fa-eye"></i>
         </a>   
        <a href="{{ route('donor.edit',['donor' =>$donor->id]) }}"class="btn btn-info">
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