
@extends('backend.main')

@section('fixedpage')



                <div class="row" style="display: inline-block;">
                        <div class="tile_count">
                             <div class="col-md-2 col-sm-4  tile_stats_count">
                                  <span class="count_top"><i class="fa fa-user"></i> TotalStaff</span>
                                  <div class="count">25</div>
                                  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                             </div>
                                      <div class="col-md-2 col-sm-4  tile_stats_count">
                                           <span class="count_top"><i class="fa fa-clock-o"></i> Total Cow</span>
                                           <div class="count">123.50</div>
                                           <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                                       </div>
                                      <div class="col-md-2 col-sm-4  tile_stats_count">
                                         <span class="count_top"><i class="fa fa-user"></i> Total Milk Collection</span>
                                         <div class="count green">2,500</div>
                                         <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                                      </div>
                                      <div class="col-md-2 col-sm-4  tile_stats_count">
                                         <span class="count_top"><i class="fa fa-user"></i> Total Sold milk</span>
                                         <div class="count">4,567</div>
                                         <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                                     </div>
                                     <div class="col-md-2 col-sm-4  tile_stats_count">
                                         <span class="count_top"><i class="fa fa-user"></i> Total Sold Cow</span>
                                         <div class="count">2,315</div>
                                         <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                                     </div>
                                    <div class="col-md-2 col-sm-4  tile_stats_count">
                                          <span class="count_top"><i class="fa fa-user"></i> Total Profit</span>
                                          <div class="count">7,325</div>
                                          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                                     </div>
                    </div>
             </div>

<!--to do list -->

<div class="x_panel">
      <div class="x_title">
                    <h2>To Do List <small>Sample tasks</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                                  <li>
                                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   <li class="dropdown">
                                   <p><button type="button" class="btn btn-outline-info">Add list</button></p>
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
                         <div class="">
                              <ul class="to_do">
                                 <li>
                                     <p><input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                 </li>
                                  <li>
                                     <p><input type="checkbox" class="flat"> Create email address for new intern</p>
                                  </li>
                                  <li>
                                     <p><input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                  </li>
                                  <li>
                                      <p><input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                   </li>
                                   <li>
                                      <p><input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                   </li>
                                   <li>
                                       <p><input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                   </li>
                                    <li>
                                         <p><input type="checkbox" class="flat"> Create email address for new intern</p>
                                    </li>
                                     <li>
                                         <p><input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                    </li>
                                    <li>
                                        <p><input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                    </li>
                               </ul> 
                               
                            </div>
                  </div>
         </div>
</div>


@endsection