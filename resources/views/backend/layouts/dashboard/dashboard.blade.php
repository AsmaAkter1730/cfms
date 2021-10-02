@extends('backend.main')

@section('fixedpage')


<h2>Dashboard </h2>

{{-- 1st row --}}

<div class="row m-3">
    <div class="col-md-3 ">
        <div class="card  text-white shadow" style="background-color:rgb(104, 222, 226); width: 20rm; height:10rem;">
            <div class="card-body">
                <h5>
                    <i class="fa fa-user"></i>Total Staffs
                    <div class="count">{{$staff}}</div>
                </h5>

            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card text-white shadow" style="background-color:rgb(226, 183, 104); width: 20rm; height:10rem">
            <div class="card-body">
                <h5>
                    <i class="fa fa-paw"></i> Total Cow
                    <div class="count">{{$cow_count}}</div>
                </h5>

            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card text-white shadow" style="background-color:rgb(207, 223, 136);width: 20rm;height:10rem;">
            <div class="card-body">
                <h5>
                    <i class="fa fa-plus-square"></i> Total Milk Collection
                    <div class="count">{{$stock_in}} Litre</div>
                </h5>

            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card bg-success text-white shadow" style="background-color:rgb(207, 223, 136);width: 20rm;height:10rem;">
            <div class="card-body">
                <h5>
                    <i class="fa fa-paw"></i>Total Cowsale Amount
                    <div class="count">{{$cowsale}} TK</div>
                </h5>

            </div>
        </div>
    </div>
</div>



{{-- 2nd row --}}

<div class="row m-3">

    <div class="col-md-3 ">
        <div class="card text-white shadow" style="background-color:rgb(109, 71, 96); width: 20rm;height:10rem;">
            <div class="card-body">
                <h5>
                    <i class="fa fa-user"></i>Total Customer
                    <div class="count">{{$customer}}</div>
                </h5>

            </div>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="card text-white shadow" style="background-color:rgb(147, 114, 156);width: 20rm;height:10rem;">
            <div class="card-body">
                <h5>
                    <i class="fa fa-paw"></i> Total Sold Cow
                    <div class="count">{{$cow_sale}}</div>
                </h5>

            </div>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="card text-white shadow" style="background-color:rgb(102, 101, 136); width: 20rm;height:10rem;">
            <div class="card-body">
                <h5>
                    <i class="fa fa-shopping-cart"></i> Total Sold milk
                    <div class="count">{{$stock}} Litre<div>
                </h5>

            </div>
        </div>
    </div>

    <div class="col-md-3 ">
        <div class="card text-white shadow" style="background-color:rgb(194, 163, 165); width: 20rm; height:10rem">
            <div class="card-body">
                <h5>
                    <i class="fa fa-shopping-cart"></i>Total milksale Amount
                    <div class="count">{{$milksale}} TK</div>
                </h5>

            </div>
        </div>
    </div>

</div>











<!--to do list -->

<!--<div class="x_panel">
    <div class="x_title">
        <h2>To Do List </h2>

        <ul class="nav navbar-right panel_toolbox">
            <li>
                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                </div>

            </li>

            <li>
                <a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>


    <div class="x_content">


        <div class="card-body">

            <form action="{{route('dashboards.add.task')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="task" placeholder="What do you need to do today?">

                </div>
                <input type="submit" class="btn btn-info" value="Add">

            </form>

            <div class="list-wrapper">

            </div>

        </div>

        <div class="">

            @if(session()->has('message'))
            <div>
                <span class="alert alert-primary">{{session()->get('message')}}</span>
            </div>

            @endif
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="width:5%;">Serial </th>
                        <th scope="col" style="width:80%;">Tasks</th>
                        <th scope="col" style="width:15%;">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tasks as $task)
                    <tr>

                        <th scope="row">{{$task->id}}</th>

                        <td>{{$task->tasks}}</td>

                        <td>

                            <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('dashboards.detete.task',$task->id)}}"><button class="btn"><i class="fa fa-trash" style="font-size:20px"></i></button></a>

                            </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $tasks->links('pagination::bootstrap-4') }}

        </div>
    </div>
</div>
</div>
-->

@endsection