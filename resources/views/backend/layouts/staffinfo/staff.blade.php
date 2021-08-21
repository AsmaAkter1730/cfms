@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
      <div class="x_title">
                    <h2>Staff Information </h2>
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <li><a href="{{route('addstaff')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add Staff</button></a></li> 
                                     
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
      <th style="width:10%;"scope="col">Name</th>
      <th style="width:10%;"scope="col">image</th>
      <th style="width:15%;"scope="col">Email</th>
      <th style="width:10%;"scope="col">Address</th>
      <th style="width:10%;"scope="col">Mobile</th>
      <th style="width:10%;"scope="col">Designation</th>
      <th style="width:10%;"scope="col">Salary</th>
      <th style="width:20%;"scope="col">Action</th>
    </tr>
  </thead>
  @foreach($staffs as  $data)
  <tbody>
    <tr>
      <th scope="row">{{ $data->staff_name}}</th>
      <td>{{ $data->image }}</td>
      <td>{{ $data->email}}</td>
      <td>{{ $data->Address }}</td>
      <td>{{ $data->Mobile}}</td>
      <td>{{ $data->Designation }}</td>
      <td>{{ $data->Salary }}</td>
      
      <td class="table-action">
                            <a href="#"><button  type="button" class="btn btn-success">Edit</button></a>
                            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
      
    </tr>
    
  </tbody>
  @endforeach
</table>

{{ $staffs->links('pagination::bootstrap-4') }}
                       
                       
                            </ul> 
                            </div>
                            
                  
                  </div>
         </div>
</div>

@endsection