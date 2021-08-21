@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
      <div class="x_title">
                    <h2>stock Information </h2>
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <li><a href="{{route('addstocks')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add Stock</button></a></li> 
                                     
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
     
      <th style="width:10%;"scope="col">Stock ID</th>
      <th style="width:10%;"scope="col">Stock In</th>
      <th style="width:10%;"scope="col">Stock Out</th> 
      <th style="width:10%;"scope="col">Availabe stock</th>
      <th style="width:15%;"scope="col">Action</th>
    </tr>
  </thead>
  @foreach($milkstocks as  $data)
  <tbody>

    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td>{{ $data->stock_in}}</td>
      <td>{{ $data->stock_out}}</td>
      <td>{{ $data->Availabe_stock}}</td>
      <td class="table-action">
         <a href="#"><button type="button" class="btn btn-success">Edit</button></a>
         <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
     </td>
    </tr>
   
  </tbody>
  
 
  @endforeach 
</table>
{{ $milkstocks->links('pagination::bootstrap-4') }}

                               </ul> 
                            </div>
                  </div>
         </div>
</div>



                       
                       
         

@endsection