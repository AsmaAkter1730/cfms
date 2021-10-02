@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
  <div class="x_title">
    <h1 class="h2">Add Customer</h1>

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
          <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border" action="{{route('addcustomerstore')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> customer Name </label>
              <input required type="text" class="form-control" name="cus_name" placeholder="cus_name">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input required type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Customer Mobile</label>
              <input required type="tel" class="form-control" name="cus_mobile" placeholder="cus_mobile" id="inputEmail4">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Address</label>
              <input required type="text" class="form-control" id="inputEmail4" name="address" placeholder="address">
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