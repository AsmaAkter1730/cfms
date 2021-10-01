@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
      <div class="x_title">
                    <h2>Milk Sale </h2>
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <li><a href="{{route('addmilksale')}}" data-hover="add">  
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
      <th style="width:5%;"scope="col">Milk_Sale ID</th>
      <th style="width:10%;"scope="col">Customer Name</th>
      
      
      <th style="width:5%;"scope="col">Litre</th>
      <th style="width:10%;"scope="col">Unit Price/ Litre</th>
     
      <th style="width:10%;"scope="col">Pay Amount</th>
      <th style="width:10%;"scope="col">paid Amount</th>
      <th style="width:10%;"scope="col">Due Amount</th>
      <th style="width:10%;"scope="col">Date</th>
     
      
      <th style="width:20%;"scope="col">Action</th>
    </tr>
  </thead>

    

  @foreach($milk_sales as  $data)

  @php
  $Due_amount=$data->pay_amount-$data->paidamount;
 @endphp
  <tbody>
    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td>{{ $data->customer->cus_name}}</td>
     
      <td> {{ $data->liter}}</td>
      <td>{{ $data->price_perliter}}</td>
      
      <td>{{ $data->pay_amount}}</td>
      <td>{{ $data->paidamount}}</td>
      <td>{{ $Due_amount}}</td>
      <td>{{ $data->date}}</td>
      
    
     
      
      
      <td class="table-action">
                             <a class="btn btn-info" href="{{route('milksale.view' ,$data['id'])}}"> View</a>
                             <a href="{{route('milksales.edit',$data->id)}}"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                             <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('milksales.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
                           
                        </td>
      
    </tr>
   
  </tbody>
  @endforeach
</table>
{{ $milk_sales->links('pagination::bootstrap-4') }}            
                       
                            </ul> 
                            </div>
                  </div>
         </div>
</div>


@endsection