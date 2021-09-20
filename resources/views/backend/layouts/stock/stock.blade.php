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
	                                </a></li> 
                                     
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
                              <table class="table">
  <thead class="thead-light">


    <tr>
     
      <th style="width:20%;"scope="col">Stock ID</th>
      <th style="width:20%;"scope="col">Stock In</th>
      <th style="width:20%;"scope="col">Stock Out</th> 
      <th style="width:20%;"scope="col">Availabe stock</th>
 
    </tr>
  </thead>

        @php 
           $total_in=0;
           $total_out=0;
       @endphp


  @foreach($milkstocks as  $data)

    @php 
        $total_in=$total_in+$data->stock_in;
        $total_out=$total_out+$data->stock_out;
    @endphp

  <tbody>

    <tr>
      <th scope="row">{{ $data->id}}</th>
      <td>{{ $data->stock_in}}</td>
      <td>{{ $data->stock_out}}</td>
      <td>{{$total_in-$total_out }}</td>
      
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