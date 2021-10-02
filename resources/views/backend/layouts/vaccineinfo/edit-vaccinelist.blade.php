@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
  <div class="x_title">
    <h1 class="h2">Add Vaccine</h1>

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
          <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border" action="{{route('vaccine_list.update',$list->id)}}" method="post">
            @csrf
            @method('put')
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Vaccine Name</label>
              <input value="{{$list->vaccine_name}}" type="text" class="form-control" name="vaccine_name" placeholder="vaccine_name">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Purchase Date</label>
              <input value="{{$list->purchase_date}}" type="date" class="form-control" id="inputEmail4" name="purchase_date">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label"> Expired Date</label>
              <input value="{{$list->expired_date}}" type="date" class="form-control" id="inputEmail4" name="expired_date">
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