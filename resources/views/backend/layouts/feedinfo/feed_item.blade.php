
@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
                    <h2>Feed Item List </h2>
                    
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  
                                   <li class="dropdown">
                                  
                                   <li><a href="{{route('addfeed_items')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add list</button></a></li> 
                                     
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
    <th style="width:20%;"scope="col">Feed_item</th>
      <th style="width:20%;"scope="col">Description</th>
      <th style="width:20%;"scope="col">Status</th>
      <th style="width:20%;"scope="col">Action</th>
    </tr>
  </thead>


  @foreach($feed_item as  $data)
  
  <tbody>
    <tr>
    <th scope="row">{{ $data->id}}</th>
      <th scope="row">{{ $data->Feed_item}}</th>
      <td>{{ $data->description}}</td>
      
      <td>{{ $data->status}}</td>
      
     
      <td class="table-action">
                             <a href="#"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                             <a href="#"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
     </td>
    </tr>
   @endforeach
  </tbody>
  
</table>
{{ $feed_item ->links('pagination::bootstrap-4') }}

                               </ul> 
                            </div>
                  </div>
         </div>
</div>





@endsection
