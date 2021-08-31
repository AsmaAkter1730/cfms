
@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
                    <h2>Vaccine Monitoring </h2>
                    
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  
                                   <li class="dropdown">
                                  
                                   <li><a href="{{route('addvaccine')}}" data-hover="add">  
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
     
      <th style="width:25%;"scope="col">Cow Number</th>
      <th style="width:25%;"scope="col">Date</th>
      <th style="width:25%;"scope="col">Remarks</th>
      <th style="width:25%;"scope="col">Action</th>
    </tr>
  </thead>

  @foreach($Vaccine_monitoring as  $data)

  <tbody>
    <tr>
      <th scope="row">{{ $data->cow_number}}</th>
      <td>{{ $data->vaccine_date}}</td>
      <td>{{ $data->Remarks}}</td>
     
      <td class="table-action">
                             <a href="#"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                             <a href="#"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
     </td>
    </tr>
   
  </tbody>
  @endforeach
</table>
{{ $Vaccine_monitoring->links('pagination::bootstrap-4') }}
                               </ul> 
                            </div>
                  </div>
         </div>
</div>


@endsection



