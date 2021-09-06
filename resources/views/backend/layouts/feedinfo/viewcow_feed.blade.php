@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
                    <h2>Feed Plan </h2>
                    
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  
                                   <li class="dropdown">
                                  
                                   <li><a href="" data-hover="add">  
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
    <th style="width:10%;"scope="col">ID</th>
      <th style="width:10%;"scope="col">Cow Number</th>
      <th style="width:10%;"scope="col">Feed_item</th>
      <th style="width:10%;"scope="col">Feed time</th>
      <th style="width:10%;"scope="col">Quantity(kg)</th>
      <th style="width:10%;"scope="col">Date</th>
      <th style="width:10%;"scope="col">Remarks</th>
  
    </tr>
  </thead>
  

  @foreach($plan as $key=>$data)
  <tbody>
    <tr>
    <td>{{ $key+1}}</td>
      <th scope="row">{{ $data->cow_number}}</th>

    
      <td>{{ $data->Feed_item->Feed_item}}</td>
      
      <td>{{ $data->Feed_time}}</td>
      <td>{{ $data->Quantity}}.kg</td>
      <td>{{ $data->date}}</td>
      <td>{{ $data->Remarks}}</td>
    
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

