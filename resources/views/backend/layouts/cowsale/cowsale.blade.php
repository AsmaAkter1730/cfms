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
                             <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                                         <div class="clearfix"></div>
                </div>



<div class="x_content">
                         <div class="">
                              <ul class="to_do">
                              <table class="table">
  <thead class="thead-light">
    <tr>
      <th style="width:10%;"scope="col">Invoice No.</th>
      <th style="width:10%;"scope="col">Date</th>
      <th style="width:10%;"scope="col">Cow no.</th>
      <th style="width:10%;"scope="col">Amount</th>
      <th style="width:10%;"scope="col">Customer Name</th>
      <th style="width:10%;"scope="col">Contact</th>
      <th style="width:10%;"scope="col">Email</th>
      <th style="width:10%;"scope="col">Remarks</th>
      <th style="width:15%;"scope="col">Action</th>
    </tr>
  </thead>

  @foreach($cow_sales as  $data)
  <tbody>
    <tr>
      <th scope="row">{{ $data->Invoice_no}}</th>
      <td>{{ $data->cow_number}}</td>
      <td>{{ $data->cus_name}}</td>
      <td>{{ $data->email}}</td>
      <td> {{ $data->cus_mobile}}</td>
      <td>{{ $data->remarks}}</td>
      <td>{{ $data->amount}}</td>
      <td>{{ $data->date}}</td>
      
      <td class="table-action">
                            <a href="#"><button type="button" class="btn btn-success">Edit</button></a>
                            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
      
    </tr>
    
    
  </tbody>
  @endforeach
</table>
                       
                       
                            </ul> 
                            </div>
                  </div>
         </div>
</div>

@endsection