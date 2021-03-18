@extends('layout.app')

@section('content')


  <div class="row page-header mb-5">
  	 <div class="col-md-6">
  	 	 <h2 class="m-0 font-weight-bold text-primary">
          All News
         </h2>
  	 </div>
  	 <div class="col-md-6 text-right">
  	 	<a href="{{ route('news.create') }}" class="btn btn-danger"> <i class="fa fa-plus"></i> Add News </a>
  	 </div>
  	 	
  </div>

<!-- DataTales Example -->
<div class="card shadow page-header mb-4">
   <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">  All News</h6>
    </div>
  <div class="card-body">
     <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>                                              
                    <th>ID</th>      
                    <th>News Title</th>      
                    <th>Details</th>            
                    <th class="text-right">Actions</th>                     
                    </tr>
                </thead>

               <tfoot>
                  <tr>                                              
                    <th>ID</th>      
                    <th>News Title</th>      
                    <th>Details</th>            
                    <th class="text-right">Actions</th>                     
                    </tr>
            </tfoot>

                                    
       <tbody>
        
@foreach($news as $news)

       <tr>
          <td>{{ $news->id }}</td>
          <td>{{ $news->news_title }}</td>
          <td>{{ $news->details}}</td>

          <td class="text-right">
<form method='post' action="{{ route('news.destroy',['news' => $news->id]) }}">
            @csrf
        <a href="{{ route('news.show',['news' =>$news->id]) }}"class="btn btn-info">
          <i class="fa fa-eye"></i>
         </a>   
        <a href="{{ route('news.edit',['news' =>$news->id]) }}"class="btn btn-info">
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