@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
  <div class="x_title">
    <h1 class="h2">Add Staff</h1>

    <ul class="nav navbar-right panel_toolbox">
      <li>
        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>

      <li class="dropdown">

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


        <div class="container p-5">
          <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border" action="{{route('staffs.update',$staff->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            @method('put')

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Name </label>
              <input value="{{$staff->staff_name}}" type="text" class="form-control" name="staff_name" placeholder="Name">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Image</label>
              <input value="{{$staff->image}}" type="file" class="form-control" name="image" placeholder="Image">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input value="{{$staff->email}}" type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Mobile</label>
              <input value="{{$staff->Mobile}}" type="tel" class="form-control" name="Mobile" placeholder="Mobile" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Designation</label>
              <input value="{{$staff->Designation}}" type="text" class="form-control" name="Designation" placeholder="Designation">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Salary</label>
              <input value="{{$staff->Salary}}" type="text" class="form-control" id="inputEmail4" name="Salary" placeholder="Salary">
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Address</label>
              <input class="form-control" value="{{$staff->Address}}" type="text" class="form-control" id="inputAddress" name="Address" placeholder="Address">
            </div>

        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button class="btn btn-primary">Cancel</button>
        </div>
        </form>

    </div>


    </ul>
  </div>
</div>
</div>
</div>


@endsection