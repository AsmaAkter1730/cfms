<div class="left_col scroll-view">
       
<div class="clearfix"></div>


<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
         
          <ul class="nav side-menu">
            <li><a href="{{route('dashboards')}}"></i><i class="fa fa-home"></i>  Dashboard  </a></li>


            <li><a><i class="fa fa-edit"></i> Informations <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                   <li><a href="{{route('staffs')}}">Staff</a></li>
                   <li><a href="{{route('cows')}}">Cow</a></li>
                   
                </ul>
            </li>

           
            <li><a href="{{route('addcowtype')}}"></i><i class="fa fa-table"></i>  Cow Category</a></li>


               <li><a><i class="fa fa-desktop"></i> Vaccine Monitoring <span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                      <li><a href="{{route('vaccines')}}">Vaccine Plan</a></li>
                      <li><a href="{{route('vaccine_list')}}">Vaccine</a></li>

                    </ul>
                </li>

                <li>
                      <a><i class="	fa fa-tv"></i> Feed Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('feeds')}}">Feed Plan</a></li>
                      <li><a href="{{route('feed_items')}}">Feed</a></li>

                    </ul>
                </li>
                
                <li><a href="{{route('collections')}}"></i><i class="fa fa-plus-square"></i>  Milk Collection </a></li>
                
                <li><a href="{{route('stock')}}"></i><i class="fa fa-hourglass"></i> Stock</a></li>

                <li><a><i class="fa fa-shopping-cart"></i> Sales<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                         <li><a href="{{route('milksales')}}">Milk Sales</a></li>
                         <li><a href="{{route('cowsales')}}">Cow Sales</a></li>
                        </ul>
                </li>

               

                
                <li><a href="{{route('payment')}}"></i><i class="fa fa-calculator"></i>  Payment</a></li>

              

            </div>


        </div>
    </div>
</div>


<!--sideber down -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
   </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
         <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
       <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
     <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
       <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
     </a>
</div>

</div>
</div>
