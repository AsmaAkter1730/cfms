@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
      <h1 class="h2">Add Cow</h1>
                    
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
    <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border" action="{{route('addcowstore')}}" method="post" enctype="multipart/form-data">
   
    @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Cow Number </label>
            <input type="text" class="form-control" name="cow_number" placeholder="Cow Number">
          </div>
           
        <div class="col-md-6">
           
           <label class="form-label">Cow Type</label> 
           <select class="form-control" name="cowtype_id" id="cowtype_id" placeholder="Cow Type" >

           @foreach($addcows as $add)
                 <option value="{{$add->id}}"> {{$add->cow_type}}</option>
             @endforeach
               </select>
             </div>
        
          <div class="col-md-6">
           
           <label class="form-label">Select Status</label> 
           <select class="form-control" name="status" >
              
               <option value="available">Availabe</option>
               </select>
             </div>
         
        
        <div class="col-md-6">
           
        <label class="form-label">Gender</label> 
        <select class="form-control" name="Gender" >
            <option value="male">Male</option>
            <option value="female">female</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="inputEmail4" name="date_of_birth">
          </div>
          <div class="col-md-6">
            <label for="description" class="form-label" >Choose Image</label>
            <input type="file" class="form-control" name="image" placeholder="choose image" >
          </div>
</div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button  class="btn btn-primary">Cancel</button>
        </div>
      </form>

</div>


                               </ul> 
                            </div>
                  </div>
         </div>
</div>


@endsection

