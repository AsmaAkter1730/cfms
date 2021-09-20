
@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
                    <h2>Payment </h2>
                    
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  
                                   <li class="dropdown">
                                  
                                   <li><a href="{{route('addpayment')}}" data-hover="add">  
	                                 <button type="button" class="btn btn-outline-success">Add payment list</button></a></li> 
                                     
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
   
                <th scope="col"style="width:15%;" scope="col">Invoice No.</th>
                <th style="width:15%;"scope="col">Total Amount</th>
                <th style="width:15%;"scope="col">Paid Amount</th>
                <th style="width:15%;"scope="col">Due Amount</th>
                <th style="width:10%;"scope="col">Date</th>
                <th style="width:20%;"scope="col">Action</th>
   
  </thead>
  @foreach($payments as  $data)
  <tbody>
    <tr>
      <th scope="row">{{ $data->id}}</th>
    
      <td>{{ $data->Total_amount}}  BDT</td>
      <td>{{ $data->Paid_amount}}  BDT</td>
      <td>{{ $data->due_amount}}  BDT</td>
      <td>{{ $data->date}}</td>
      <td class="table-action">
      
      <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('payment.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
         
     </td>
    </tr>
    
  </tbody>
  @endforeach
</table>

{{ $payments->links('pagination::bootstrap-4') }} 
                               </ul> 
                            </div>
                  </div>
         </div>
</div>





@endsection
