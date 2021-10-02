@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
  <div class="x_title">
    <h1 class="h2">Add Milk Sale</h1>

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
          <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border" action="{{route('milksales.update',$item->id)}}" method="post">

            @csrf

            @method('put')


            <div class="col-md-6">
              <label class="form-label">Customer Name</label>
              <select class="form-control" name="customer_id" id="name" placeholder="customer_id">

                @foreach ($customer as $data)
                <option value="{{$data->id}}"> {{ $data->email}}</option>
                @endforeach
              </select>
            </div>




            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Litre</label>
              <input value="{{$item->liter}}" type="text" class="form-control" id="litre" name="liter" onkeyup="myFunction()" placeholder="liter">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Price/Litre</label>
              <input value="{{$item->price_perliter}}" type="text" class="form-control" id="price" name="price_perliter" onkeyup="myFunction()" placeholder="price per liter">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Pay amount</label>
              <input value="{{$item->pay_amount}}" type="text" class="form-control " id="pay" name="pay_amount" placeholder="pay_amount">
            </div>
            <div class="col-md-6">
              <label for="">Enter Amount</label>
              <input value="{{$item->paidamount}}" name="paidamount" type="number" class="form-control">
            </div>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Date</label>
              <input required type="date" value="{{$item->date}}" class="form-control" id="inputEmail4" name="date">
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
<script type="text/JavaScript">

  function myFunction() {
  var litre = document.getElementById("litre").value;
  var price = document.getElementById("price").value;
  var pay = document.getElementById("pay");

  pay.value=litre*price;
  
}

</script>

@endsection