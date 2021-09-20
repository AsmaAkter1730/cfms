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
                             <form action="{{route('milk.search')}}" method="get">
                               
                               <input class="form-control form-control-dark w-100" type="search" name="search"placeholder="Search" aria-label="Search"> 
                               
                               </form>
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
      <th style="width:20%;"scope="col">Action</th>
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
      
      <td class="table-action">
                             <a href="{{route('milksales.edit',$data->id)}}"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                             <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('milksales.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
                            <a href="#"><button class="btn"><i class="fa fa-print"style="font-size:24px"></i></button></a>
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