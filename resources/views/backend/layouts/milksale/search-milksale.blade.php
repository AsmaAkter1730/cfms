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
      <th style="width:10%;"scope="col">Milk_Sale ID</th>
      <th style="width:10%;"scope="col">Customer Name</th>
      <th style="width:10%;"scope="col">Liter</th>
      <th style="width:10%;"scope="col">Price per Liter</th>
     
      <th style="width:10%;"scope="col">Date</th>
      <th style="width:10%;"scope="col">Total</th>
    
    </tr>
  </thead>

    

  @foreach($milk_sales as  $data)

  @php 
        $Total=$data->liter*$data->price_perliter;
       
    @endphp
  <tbody>
    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td>{{ $data->cutomer_name}}</td>
      <td> {{ $data->liter}}</td>
      <td>{{ $data->price_perliter}}</td>
      <td>{{ $data->date}}</td>
      <td>{{$Total }}</td>
      
     
      
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