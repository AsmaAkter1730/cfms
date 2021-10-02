@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
  <div class="x_title">
    <h2>Vaccine Plan </h2>

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

              <th style="width:10%;" scope="col">ID</th>
              <th style="width:20%;" scope="col">Vaccine_name</th>
              <th style="width:10%;" scope="col">Cow Number</th>
              <th style="width:20%;" scope="col">Date</th>
              <th style="width:20%;" scope="col">Remarks</th>
              <th style="width:20%;" scope="col">Action</th>
            </tr>
          </thead>

          @foreach($Vaccine_monitoring as $data)

          <tbody>
            <tr>
              <td>{{ $data->id}}</td>
              <td>{{ $data->Vaccine_name->vaccine_name}}</td>

              <th scope="row">{{ $data->cow_number}}</th>
              <td>{{ $data->vaccine_date}}</td>
              <td>{{ $data->Remarks}}</td>

              <td class="table-action">
                <a href="{{route('vaccines.edit',$data->id)}}"><button class="btn"><i class="glyphicon glyphicon-pencil" style="font-size:15px"></i></button></a>
                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('vaccines.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash" style="font-size:20px"></i></button></a>
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