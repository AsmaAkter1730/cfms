@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
      <div class="x_title">
                    <h2>Customer Information </h2>
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <li><a href="{{route('addcustomer')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add customer</button></a></li> 
                                     
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> </div>

                                    </li>

                                    <li>
                                    <a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                             </ul>
                            
                                         <div class="clearfix"></div>
                </div>



<div class="x_content">
                         <div class="">
                              <ul class="to_do">

                              @if(session()->has('message'))
                              <div>
                              <span class="alert alert-primary">{{session()->get('message')}}</span>
                              </div>
                             
                         @endif
                         
                              <table class="table">
  <thead class="thead-light">
    <tr>
    <th style="width:20%;"scope="col">Customer_ID</th>
      <th style="width:20%;"scope="col">Customer Name</th>
      <th style="width:20%;"scope="col">Email</th>
      <th style="width:20%;"scope="col">Mobile</th>
      <th style="width:20%;"scope="col">Address</th>
      <th style="width:20%;"scope="col">Action</th>
    </tr>
  </thead>
  @foreach($customer as  $key => $data)
  <tbody>
    <tr>
      <th scope="row">{{ $data->id}}</th>  
      <td>{{ $data->cus_name}}</td>
      <td>{{ $data->email}}</td>
      <td>{{ $data->cus_mobile}}</td>
      <td>{{ $data->address}}</td>
      
      
      <td class="table-action">
                             
                             <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('customer.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a> 
                        </td>
      
    </tr>
    
  </tbody>
  @endforeach
</table>

{{ $customer->links('pagination::bootstrap-4') }}
                       
                       
                            </ul> 
                            </div>
                            
                  
                  </div>
         </div>
</div>

@endsection