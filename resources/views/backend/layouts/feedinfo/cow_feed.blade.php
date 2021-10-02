@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
  <div class="x_title">
    <h2>Feed plan for Cow </h2>

    <ul class="nav navbar-right panel_toolbox">
      <li>
        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>

      <li class="dropdown">

      <li><a href="{{route('addcow')}}" data-hover="add">
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
              <th style="width:10%;" scope="col">ID</th>
              <th style="width:10%;" scope="col">Cow Number</th>
              <th style="width:10%;" scope="col">image</th>

              <th style="width:10%;" scope="col">Gender</th>
              <th style="width:15%;" scope="col">Date of Birth</th>

              <th style="width:15%;" scope="col">Status</th>
              <th style="width:15%;" scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($addcows as $data)
            <tr>

              <th scope="row">{{ $data->id }}</th>
              <td>{{ $data->cow_number }}</td>
              <td>
                <img src="{{url('/uploads/uploads/'.$data->image)}}" width="40px" alt="Choose_image">
              </td>
              <td>{{ $data->Gender}}</td>
              <td>{{ $data->date_of_birth}}</td>

              <td>{{ $data->status }}</td>

              <td class="table-action">
                <a href="{{route('allcow.feedplans',$data->id)}}"><button type="button" class="btn btn-primary">view</button></a>

                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('cows.detete',$data->id)}}"><button class="btn"><i class="fa fa-trash" style="font-size:20px"></i></button></a>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
        {{ $addcows->links('pagination::bootstrap-4') }}
      </ul>
    </div>
  </div>
</div>
</div>


@endsection