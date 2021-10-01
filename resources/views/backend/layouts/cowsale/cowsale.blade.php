@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
      <div class="x_title">
                    <h2>Cow Sale </h2>
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <li><a href="{{route('addcowsale')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add list</button></a></li> 
                                     
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
      <th style="width:10%;"scope="col">Cow_Sale ID</th>
      <th style="width:10%;"scope="col">Cow no.</th>
      <th style="width:10%;"scope="col">Customer Name</th>
      
      
      
      <th style="width:10%;"scope="col">Total Amount</th>
      <th style="width:10%;"scope="col"> paidAmount</th>
      <th style="width:10%;"scope="col"> Due Amount</th>
      <th style="width:10%;"scope="col">Date</th>
      <th style="width:10%;"scope="col">Remarks</th>
      
      <th style="width:20%;"scope="col">Action</th>
    </tr>
  </thead>

  @foreach($cow_sales as  $data)
  @php
  $Due=$data->amount-$data->paidamount;
 @endphp
  <tbody>
    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td>{{ $data->cow_number}}</td> 
      <td>{{ $data->customer->cus_name}}</td>
     
      <td>{{ $data->amount}}</td>
      <td>{{ $data->paidamount}}</td>
      <td>{{ $Due}}</td>
      <td>{{ $data->date}}</td>
    
      
      <td>{{ $data->remarks}}</td>
    
      
      
      <td class="table-action">
                               <a class="btn btn-info" href="{{route('cowsale.view' ,$data['id'])}}"> View</a>
                               <a href="{{route('cowsales.edit',$data->id)}}"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                               <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('cowsales.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
                               
                        </td>
      
    </tr>
    
    
  </tbody>
  @endforeach
</table>
{{ $cow_sales->links('pagination::bootstrap-4') }}             
                       
                            </ul> 
                            </div>
                  </div>
         </div>
</div>

@endsection