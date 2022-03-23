<style>
   .dropdown-menu-right{
      display: none !important;
   }
</style>

<header class="main-header" >
    {{-- <a href="{{url('/')}}" class="logo"> --}}
      <a class="logo" href="{{url(app()->getLocale().'/admin/florist-dashboard/'.Session::get('floristSlug'))}}" style="height: 80px;">
       <!-- Logo -->
       <span class="logo-mini">
       <img src="{{asset('admin-assets/dist/img/mini-logo.png')}}" alt="">
       </span>
       <span class="logo-lg">
           
              @if (Session::has('floristLogo'))
                 <img src="/uploads/products/{{Session::get('floristLogo')}}" alt="eBloom logo"   
                 style="margin: 0 auto;
                 border-radius: 50%;
                 width: 70px !important;
                  height: 70px !important;
                  max-width: 100%;
                 ">
                  
              @endif
        
        </span>
       {{-- <h2 style="color:white">Ebloom</h2>  --}}
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <!-- Sidebar toggle button-->
          <span class="sr-only">Toggle navigation</span>
          <span class="pe-7s-angle-left-circle" id="toggleIcon"></span>
       </a>
       <!-- searchbar-->
        {{-- <a href="#search"><span class="pe-7s-search"></span></a> --}}
        {{-- <div id="search">
           <button type="button" class="close">×</button>
           <form>
           <input type="search" value="" placeholder="Search.." />
           <button type="submit" class="btn btn-add">Search...</button>
           </form>
        </div> --}}
     <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
             <!-- Orders -->
             {{-- <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                <i class="pe-7s-cart"></i>
                <span class="label label-primary">5</span>
                </a>
                <ul class="dropdown-menu">
                   <li>
                      <ul class="menu">
                         <li >
                            <!-- start Orders -->
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                               </div>
                               <h4>polo shirt</h4>
                               <p><strong>total item:</strong> 21
                               </p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image">
                               </div>
                               <h4>Kits</h4>
                               <p><strong>total item:</strong> 11
                               </p>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image">
                               </div>
                               <h4>Football</h4>
                               <p><strong>total item:</strong> 16
                               </p>
                            </a>
                         </li>
                         <li class="nav-list">
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image">
                               </div>
                               <h4>Sports sheos</h4>
                               <p><strong>total item:</strong> 10
                               </p>
                            </a>
                         </li>
                      </ul>
                   </li>
                </ul>
             </li> --}}
             <!-- Messages -->
             {{-- <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="pe-7s-mail"></i>
                <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                   <li>
                      <ul class="menu">
                         <li>
                            <!-- start message -->
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="{{asset('admin-assets/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
                               </div>
                               <h4>Ronaldo</h4>
                               <p>Please oreder 10 pices of kits..</p>
                               <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                               </span>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="{{asset('admin-assets/dist/img/avatar2.png')}}" class="img-circle" alt="User Image">
                               </div>
                               <h4>Leo messi</h4>
                               <p>Please oreder 10 pices of Sheos..</p>
                               <span class="badge badge-info badge-massege"><small>6 days ago</small>
                               </span>   
                            </a>
                         </li>
                         <li>
                            <a href="#" class="border-gray">
                               <div class="pull-left" >
                                  <img src="{{asset('admin-assets/dist/img/avatar3.png')}}" class="img-circle" alt="User Image">
                               </div>
                               <h4>Modric</h4>
                               <p>Please oreder 6 pices of bats..</p>
                               <span class="badge badge-info badge-massege"><small>1 hour ago</small>
                               </span>
                            </a>
                         </li>
                         <li>
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="{{asset('admin-assets/dist/img/avatar4.png')}}" class="img-circle" alt="User Image">
                               </div>
                               <h4>Salman</h4>
                               <p>Hello i want 4 uefa footballs</p>
                               <span class="badge badge-danger badge-massege">
                               <small>6 days ago</small>
                               </span>  
                            </a>
                         </li>
                         <li>
                            <a href="#" class="border-gray">
                               <div class="pull-left">
                                  <img src="{{asset('admin-assets/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                               </div>
                               <h4>Sergio Ramos</h4>
                               <p>Hello i want 9 uefa footballs</p>
                               <span class="badge badge-info badge-massege"><small>5 hours ago</small>
                               </span>
                            </a>
                         </li>
                      </ul>
                   </li>
                </ul>
             </li> --}}
             <style>
                
               .switch-lang {
                   width: 145px;
                   text-align: left;
                   cursor: pointer;
                   z-index: 50;
                   position: absolute;
                   top: 18px;
                   right: 15px;
                   margin-bottom: 5px;
               }
               .switch-lang:hover .lang-dropdown {
                   display: block;
               }
               .switcher-link {
                   color: #fff;
               }
               .switcher-link:hover {
                   color: #fff;
               }
               .current-lang {
                   /* background: #34495e; */
                   background: #009688;
                   padding: 3px 5px 0px 5px;
                   border-radius: 5px;
               }
               .lang-flag {
                   width: 20px;
                   display: inline-block;
               }
               .lang-text {
                   display: inline-block;
                   margin-left: 5px;
                   vertical-align: top;
                   margin-top: 2px;
                   margin-bottom: 5px;
                   color: #fff;
               }
               .lang-dropdown {
                   display: none;
                   background: #34495e;
                   border-radius: 5px;
                   margin-top: 2px;
               }
               .selecting-lang {
                   padding: 3px 5px 3px 5px;
                   cursor: pointer;
               }
               .selecting-lang:hover {
                   background: #22313f;
               }
               .switch-lang ul > :first-child {
                   border-radius: 5px 5px 0px 0px;
               }
               .switch-lang ul > :last-child {
                   border-radius: 0px 0px 5px 5px;
               }
               .switch-lang li {
                   list-style-type: none;
               }
               .switch-lang .menu-arrow {
                   display: inline-block;
                   width: 10px;
                   margin-left: 10px;
                   vertical-align: top;
                   margin-top: 6px;
               }
             
             </style>
            <li class="dropdown messages-menu">
               {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <i class="pe-7s-mail"></i>
               <span class="label label-success">4</span>
               </a> --}}
               <div class="switch-lang"> 
                  @if (app()->getLocale() =="en" )
                      <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                           <span class="lang-text">English (EN)  </span>
                      </div>
                  @else
                      <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                          <span class="lang-text">Ελληνικά (GR)  </span>
                      </div>
                  @endif
                  <div class="lang-dropdown">
                      @if (app()->getLocale() =="en" )
                          <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Greece.png"/>
                              @if ($slug ?? '' != '' )
                                <a href=" {{route(Route::currentRouteName(),['language'=> 'gr','slug'=> $slug])}} "> <span class="lang-text">Ελληνικά (GR)</span></a>
                                  
                              @else
                                <a href=" {{route(Route::currentRouteName(),['language'=> 'gr'])}} "> <span class="lang-text">Ελληνικά (GR)</span></a>

                              @endif
                          </div>
                      @else
                          <div class="selecting-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"/>
                            @if ($slug ?? '' != '' )

                              <a href=" {{route(Route::currentRouteName(),['language'=> 'en','slug'=> $slug])}} "> <span class="lang-text">English (EN)</span></a>
                            @else
                              <a href=" {{route(Route::currentRouteName(),['language'=> 'en'])}} "> <span class="lang-text">English (EN)</span></a>
                            
                            @endif  
                              
                          </div>
                      @endif
                  </div>
               </div>
            </li>
             <!-- Notifications -->
             <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="pe-7s-bell"></i>
                <span class="label label-warning">
                  @if (Session::has('newOrders'))
                  {{count(Session::get('newOrders'))}}
                      
                  @endif
                  </span>
                </a>
                <ul class="dropdown-menu">
                   <li>
                      <ul class="menu">
                         @if (Session::has('newOrders'))
                           @foreach (Session::get('newOrders') as $order)
                           <li>
                              <a href="{{url(app()->getLocale().'/florist/orders')}}" class="border-gray">
                              <i class="fa fa-shopping-bag color-green"></i>{{$order->order_status}} Order Added!</a>
                           </li>
                           @endforeach
                             
                         @endif
                         {{-- <li><a href="#" class="border-gray">
                            <i class="fa fa-dot-circle-o color-red"></i>
                            check the system ststus..</a>
                         </li> --}}
                         
                      </ul>
                   </li>
                </ul>
             </li>
             <!-- Tasks -->
             {{-- <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="pe-7s-note2"></i>
                <span class="label label-danger">6</span>
                </a>
                <ul class="dropdown-menu">
                   <li>
                      <ul class="menu">
                         <li>
                            <!-- Task item -->
                            <a href="#" class="border-gray">
                               <span class="label label-success pull-right">50%</span>
                               <h3><i class="fa fa-check-circle"></i> Theme color should be change</h3>
                            </a>
                         </li>
                         <!-- end task item -->
                         <li>
                            <!-- Task item -->
                            <a href="#" class="border-gray">
                               <span class="label label-warning pull-right">90%</span>
                               <h3><i class="fa fa-check-circle"></i> Fix Error and bugs</h3>
                            </a>
                         </li>
                         <!-- end task item -->
                         <li>
                            <!-- Task item -->
                            <a href="#" class="border-gray">
                               <span class="label label-danger pull-right">80%</span>
                               <h3><i class="fa fa-check-circle"></i> Sidebar color change</h3>
                            </a>
                         </li>
                         <!-- end task item -->
                         <li>
                            <!-- Task item -->
                            <a href="#" class="border-gray">
                               <span class="label label-info pull-right">30%</span>   
                               <h3><i class="fa fa-check-circle"></i> font-family should be change</h3>
                            </a>
                         </li>
                         <li>
                            <!-- Task item -->
                            <a href="#"  class="border-gray">
                               <span class="label label-success pull-right">60%</span>
                               <h3><i class="fa fa-check-circle"></i> Fix the database Error</h3>
                            </a>
                         </li>
                         <li>
                            <!-- Task item -->
                            <a href="#"  class="border-gray">
                               <span class="label label-info pull-right">20%</span>
                               <h3><i class="fa fa-check-circle"></i> data table data missing</h3>
                            </a>
                         </li>
                         <!-- end task item -->
                      </ul>
                   </li>
                </ul>
             </li> --}}
             <!-- Help -->
             {{-- <li class="dropdown dropdown-help hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="pe-7s-settings"></i></a>
                <ul class="dropdown-menu" >
                   <li>
                      <a href="profile.html">
                      <i class="fa fa-line-chart"></i> Networking</a>
                   </li>
                   <li><a href="#"><i class="fa fa fa-bullhorn"></i> Lan settings</a></li>
                   <li><a href="#"><i class="fa fa-bar-chart"></i> Settings</a></li>
                   <li><a href="login.html">
                      <i class="fa fa-wifi"></i> wifi</a>
                   </li>
                </ul>
             </li> --}}
             <!-- user -->
             <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('admin-assets/dist/img/avatar5.png')}}" class="img-circle" width="45" height="45" alt="user"></a>
                <ul class="dropdown-menu" >
                    
                       {{-- @if (Session::get('adminStatus')=='1' || Session::get('adminStatus')=='2')
                           
                       @endif --}}
                       <li>
                          <a href="{{url(app()->getLocale().'/admin/florist-profile')}}">
                          <i class="fa fa-user"></i> 
                          {{__('florist.Στοιχεία Ανθοπώλη')}}
                          {{-- Florist Store --}}
                        </a>
                       </li> 
                       <li class="floristLogoutBtn"><a href="#">
                          <i class="fa fa-sign-out"></i>
                          {{__('florist.Έξοδος')}}
                          {{-- Sign out --}}
                         </a>
                       </li>
                </ul>
             </li>
          </ul>
       </div>
    </nav>
 </header>