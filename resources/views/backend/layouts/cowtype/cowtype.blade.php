@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
      <div class="x_title">
                    <h2>Add Cow Type </h2>
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <li><a href="{{route('addcowtypelist')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add Cowtype list</button></a></li> 
                                     
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> </div>

                                    </li>

                                    <li>
                                    <a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                             </ul>
                             <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                                         <div class="clearfix"></div>
                </div>


                <div class="x_content">
                         <div class="">
                              <ul class="to_do">
                              <table class="table">
  <thead class="thead-light">


    <tr>

    <th style="width:10%;"scope="col">ID</th>
      <th style="width:10%;"scope="col">cow Type</th>
     
      <th style="width:10%;"scope="col">Color</th> 
      <th style="width:10%;"scope="col">Status</th>
      <th style="width:15%;"scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($cowtype as  $data)
    <tr>
      
    <th scope="row">{{ $data->id}}</th>
      <th scope="row">{{ $data->cow_type}}</th>
      
      <td>{{ $data->color}}</td>
      <td>{{ $data->status}}</td>
     
     
      
      <td class="table-action">
                            <a href="{{route('cowcategory',$data->id)}}"><button type="button" class="btn btn-primary">view</button></a>
                            <a href="#"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                            <a href="#"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
                        </td>
    </tr>

    @endforeach
  </tbody>
  
 

</table>
{{ $cowtype->links('pagination::bootstrap-4') }}
                               </ul> 
                            </div>
                  </div>
         </div>
</div>



                       
                       
         

@endsection