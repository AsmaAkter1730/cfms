@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
    <div class="x_title">
        <h1 class="h2">Add Feed item</h1>

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
                    <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border"
                        action="{{route('addfeed_itemstores')}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Feed item</label>
                            <select class="form-control" name="Feed_item" placeholder="Feed item">
                                <option value="Green Grass">Green Grass</option>
                                <option value="Bamboo grass">Bamboo grass</option>
                                <option value="Rice Straw">Rice Straw </option>
                                <option value="Crushed Maize">Crushed Maize </option>
                                <option value="Soyabean meal">Soyabean meal </option>
                                <option value="Roughage ">Roughage </option>
                                <option value="Molasses">Molasses</option>
                                <option value="Minarel mixture">Minarel mixture </option>
                                <option value="Wheat bran">Wheat bran </option>
                                <option value="Water">Water </option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="appt" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="description">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Status</label>
                            <input type="text" class="form-control" id="inputEmail4" name="status"placeholder="status">
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
</div>


@endsection
