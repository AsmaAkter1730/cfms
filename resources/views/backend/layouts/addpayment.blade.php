@extends('backend.main')

@section('fixedpage')



<div class="x_panel">
      <div class="x_title">
      <h1 class="h2">Add payment</h1>
                    
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
    <form class="row g-3 d-flex justify-content-center p-5 bg-light shadow border" action="{{route('addpaymentstore')}}" method="post">
   
    @csrf
        
          
          
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Total Amount</label>
            <input type="text" class="form-control" name="Total_amount" placeholder="Total Amount">
          </div>
        
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Paid Amount </label>
            <input type="text" class="form-control" name="Paid_amount" placeholder="Paid Amount">
          </div>
          
          
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Due Amount</label>
            <input type="text" class="form-control" name="due_amount" placeholder="Due Amount">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Date </label>
            <input type="date" class="form-control" id="inputEmail4" name="date">
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

