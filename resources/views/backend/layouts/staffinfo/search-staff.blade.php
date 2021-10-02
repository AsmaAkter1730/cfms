@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
  <div class="x_title">
    <h2>Search Staff </h2>
    <ul class="nav navbar-right panel_toolbox">
      <li>
        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
      <li><a href="{{route('addstaff')}}" data-hover="add">
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

        @if(session()->has('message'))
        <div>
          <span class="alert alert-primary">{{session()->get('message')}}</span>
        </div>

        @endif

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th style="width:10%;" scope="col">Name</th>
              <th style="width:10%;" scope="col">image</th>
              <th style="width:15%;" scope="col">Email</th>
              <th style="width:10%;" scope="col">Address</th>
              <th style="width:10%;" scope="col">Mobile</th>
              <th style="width:10%;" scope="col">Designation</th>
              <th style="width:10%;" scope="col">Salary</th>

            </tr>
          </thead>
          @foreach($staffs as $data)
          <tbody>
            <tr>
              <th scope="row">{{ $data->staff_name}}</th>
              <td>
                <img src="{{url('/uploads/uploads/'.$data->image)}}" width="40px" alt="Choose_image">
              </td>
              <td>{{ $data->email}}</td>
              <td>{{ $data->Address }}</td>
              <td>{{ $data->Mobile}}</td>
              <td>{{ $data->Designation }}</td>
              <td>{{ $data->Salary }}</td>



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