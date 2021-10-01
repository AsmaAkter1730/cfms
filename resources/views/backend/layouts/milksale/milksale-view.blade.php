@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
    <div class="x_title">
        <h1 class="h2">Bill system </h1>

        <ul class="nav navbar-right panel_toolbox">
            <li>
                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li class="dropdown">
            <li><a href="{{ route('milksales') }}" data-hover="back">
                    <button type="button" class="btn btn-outline-success">Back</button></a></li>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> </div>

            </li>

            <li>
                <a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>



    {{-- @dd($sale->salesEmp->employeeDetail->employeeProfile->contact_no) --}}
    <div id="printableArea">

        <div class=" d-flex justify-content-between mb-2 mt-3">
            {{-- <h4 class="text-primary">Date: {{date("Y-M-d",strtotime($sale->created_at))}}</h4> --}}

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-left bg-light border p-3">

            <h3 class="border-bottom  title">Customer Info</h3>
            <h5>{{$invoice->customer->cus_name}}</h5>
            <p><b>Mobile :</b> +88{{$invoice->customer->cus_mobile}}</p>
            <p><b>Email :</b>{{$invoice->customer->email}}</p>
            <p><b>Address :</b> {{$invoice->customer->address}}</p>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-left bg-light border p-3">
        <table class="table">
            <thead class="thead-light">
                <tr>


                    <th style="width:10%;" scope="col">Sale_item </th>
                    <th style="width:15%;" scope="col">Total Amount</th>

                    <th style="width:15%;" scope="col">paid Amount</th>
                    <th style="width:15%;" scope="col">due Amount</th>
                    <th style="width:15%;" scope="col">Date</th>

                </tr>
            </thead>

            <tbody>
                @php
                $Due_amount=$invoice->pay_amount-$invoice->paidamount;
                @endphp


                <tr>

                    <td>Milk</td>
                    <td>{{$invoice->pay_amount}}</td>
                    <td>{{$invoice->paidamount}}</td>
                    <td>{{$Due_amount}}</td>
                    <td>{{$invoice->date}}</td>

                </tr>

            </tbody>

        </table>

        </div>
        <div class="col-xs-6 col-sm-12 col-md-12 bg-light  border p-3">

            <h3 class="border-bottom  title">Sales By</h3>
            <h5> Admin</h5>

            <p> <strong> Email: </strong>admin@gmail.com</p>

        </div>
    </div>
    <div class="mb-5 text-end">
        <div>
            <button class="btn btn-success mt-2 modal-submit fw-bolder " style="width: 120px" onclick="printDiv('printableArea')">Print</button>
        </div>

    </div>
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    @endsection