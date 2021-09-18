
@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
                    <h2>VaccineList </h2>
                    
                             <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  
                                   <li class="dropdown">
                                  
                                   <li><a href="{{route('addvaccine_name')}}" data-hover="add">  
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

                              @if(session()->has('message'))
                              <div>
                              <span class="alert alert-primary">{{session()->get('message')}}</span>
                              </div>
                             
                         @endif
                              <table class="table">
  <thead class="thead-light">
    <tr>
    <th style="width:10%;"scope="col">Vaccin_ID</th>
    <th style="width:20%;"scope="col">Vaccine Name</th>
      <th style="width:20%;"scope="col">purchase Date</th>
      <th style="width:20%;"scope="col">Expired Date</th>
      <th style="width:20%;"scope="col">Action</th>
    </tr>
  </thead>

  @foreach($Vaccine_list as  $data)

  <tbody>
    <tr>
    <th scope="row">{{ $data->id }}</th>
      <th scope="row">{{ $data->vaccine_name}}</th>
      <td>{{ $data->purchase_date}}</td>
      <td>{{ $data->expired_date}}</td>
   
     
      <td class="table-action">
                             <a href="{{route('vaccine_list.edit',$data->id)}}"><button class="btn"><i class="glyphicon glyphicon-pencil"style="font-size:15px"></i></button></a>
                             <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('vaccine_list.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash"style="font-size:20px"></i></button></a>
     </td>
    </tr>
   
  </tbody>
  @endforeach
</table>
{{ $Vaccine_list->links('pagination::bootstrap-4') }}

                               </ul> 
                            </div>
                  </div>
         </div>
</div>





@endsection
