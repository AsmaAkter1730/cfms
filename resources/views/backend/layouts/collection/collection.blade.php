@extends('backend.main')

@section('fixedpage')
<div class="x_panel">
  <div class="x_title">
    <h2>Milk Collection </h2>
    <ul class="nav navbar-right panel_toolbox">
      <li>
        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
      <li><a href="{{route('addmilkcollection')}}" data-hover="add">
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
              <th style="width:10%;" scope="col">Milk_Collection ID No.</th>
              <th style="width:10%;" scope="col">Cow Number</th>

              <th style="width:10%;" scope="col">Date</th>

              <th style="width:10%;" scope="col">Liter</th>


              <th style="width:20%;" scope="col">Action</th>
            </tr>
          </thead>

          @foreach($milk_collection as $data)
          <tbody>
            <tr>
              <th scope="row">{{ $data->id}}</th>
              <td>{{ $data->cow_number}}</td>

              <td>{{ $data->date}}</td>

              <td>{{ $data->liter}}</td>



              <td class="table-action">
                <a href="{{route('collections.edit',$data->id)}}"><button class="btn"><i class="glyphicon glyphicon-pencil" style="font-size:15px"></i></button></a>
                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('collections.delete',$data->id)}}"><button class="btn"><i class="fa fa-trash" style="font-size:20px"></i></button></a>
              </td>

            </tr>

          </tbody>
          @endforeach
        </table>
        {{ $milk_collection->links('pagination::bootstrap-4') }}

      </ul>
    </div>
  </div>
</div>
</div>


@endsection