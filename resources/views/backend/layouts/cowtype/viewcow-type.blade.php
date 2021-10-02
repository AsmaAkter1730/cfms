@extends('backend.main')

@section('fixedpage')

<div class="x_panel">
  <div class="x_title">
    <h2>Cow Type under Cow </h2>

    <ul class="nav navbar-right panel_toolbox">
      <li>
        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>

      <li class="dropdown">

      <li>
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

              <th style="width:10%;" scope="col">ID</th>
              <th style="width:10%;" scope="col">Cow Type</th>
              <th style="width:10%;" scope="col">date of Birth</th>
              <th style="width:10%;" scope="col">Status</th>

            </tr>
          </thead>

          <tbody>
            @foreach($categories as $key=>$data)
            <tr>

              <th scope="row">{{$key+1}}</th>
              <td>{{ $data->Cowtype->cow_type }}</td>
              <td>{{ $data->date_of_birth}}</td>
              <td>{{ $data->status }}</td>



            </tr>
            @endforeach
          </tbody>

        </table>

      </ul>
    </div>
  </div>
</div>
</div>

@endsection