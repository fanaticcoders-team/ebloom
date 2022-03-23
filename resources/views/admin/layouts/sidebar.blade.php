         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar" style="padding-top: 75px;">
                <!-- sidebar -->
                <div class="sidebar">
                   <!-- sidebar menu -->
                   <ul class="sidebar-menu">
                     @if (Session::get('adminSession')!='admin')
                     <li class="active">
                        <a href="{{url(app()->getLocale().'/admin/florist-dashboard/'.Session::get('floristSlug'))}}"><i class="fa fa-tachometer"></i>
                           <span>Διαχειριστικό</span>
                           {{-- <span>Dashboard</span> --}}
                        
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     @endif
                        @if (Session::get('adminSession')=='admin')
                         <li class="active">
                            <a href="{{url(app()->getLocale().'/admin/dashboard')}}"><i class="fa fa-tachometer"></i><span>
                              Διαχειριστικό
                              {{-- Dashboard --}}
                              </span>
                            <span class="pull-right-container">
                            </span>
                            </a>
                         </li>
                                             
                      {{-- <li class="">
                        <a href="{{url('/admin/banners')}}"><i class="fa fa-image"></i><span>Banners</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li> --}}
                      {{-- <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Categories</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-category')}}">Add Category</a></li>
                        <li><a href="{{url('admin/view-categories')}}">View Categories</a></li>
                        </ul>
                      </li> --}}
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Categories</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url(app()->getLocale().'/admin/add-occasion')}}">Add Category</a></li>
                        <li><a href="{{url(app()->getLocale().'/admin/view-occasions')}}">View Categories</a></li>
                        </ul>
                      </li>
                      {{-- <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Events</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-event')}}">Add Event</a></li>
                        <li><a href="{{url('admin/view-events')}}">View Events</a></li>
                        </ul>
                      </li> --}}

                      {{-- <li class="treeview">
                        <a href="#">
                        <i class="fa fa-files-o"></i><span>Flower Types</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-type')}}">Add Type</a></li>
                        <li><a href="{{url('admin/view-types')}}">View Types</a></li>
                        </ul>
                      </li> --}}
                      @endif
                      @if (Session::get('adminSession')!='admin' )
                      <li class="treeview">
                         <a href="#">
                         <i class="fa fa-product-hunt"></i><span>Products</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="{{url(app()->getLocale().'/admin/add-product')}}">Add Product</a></li>
                         <li><a href="{{url(app()->getLocale().'/admin/view-products')}}">View Products</a></li>
                         </ul>
                      </li>
                       @endif
                      <li class="treeview">
                         <a href="#">
                         <i class="fa fa-gift"></i><span>Coupons</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="{{url(app()->getLocale().'/admin/admin-add-coupon')}}">Add Coupon</a></li>
                            <li><a href="{{url(app()->getLocale().'/admin/admin-view-coupons')}}">View Coupons</a></li>
                         </ul>
                      </li> 
                      <li class="treeview">
                        <a href="{{url(app()->getLocale().'/florist/timetable')}}">
                        <i class="fa fa-clock-o"></i><span>Time Table</span>
                        
                        </a>
                     </li>  
                     
                     @if (Session::get('adminStatus')=='1' || Session::get('adminStatus')=='2')
                     <li class="treeview">
                        <a href="#">
                        @if (Session::get('adminStatus')=='2')
                           <i class="fa fa-product-hunt"></i><span>Managers</span>
                        @else  
                        <i class="fa fa-product-hunt"></i><span>Florists</span>
                        @endif
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           @if (Session::get('adminStatus')=='2')
                           <li><a href="{{url(app()->getLocale().'/admin/add-manager')}}">Add Manager</a></li>
                           <li><a href="{{url(app()->getLocale().'/admin/view-managers')}}">View Managers</a></li>
                           
                           @else
                           <li><a href="{{url(app()->getLocale().'/admin/add-florist')}}">Add Florist</a></li>
                           <li><a href="{{url(app()->getLocale().'/admin/view-florists')}}">View Florists</a></li>
                           @endif
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-gift"></i><span>Blogs</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url(app()->getLocale().'/admin/add-blog')}}">Add Blog</a></li>
                           <li><a href="{{url(app()->getLocale().'/admin/view-blogs')}}">View Blogs</a></li>
                        </ul>
                     </li> 
                     @endif
                     @if (Session::get('adminStatus')=='1')
                     <li class="treeview">
                        <a href="{{url(app()->getLocale().'/admin/add-range')}}">
                        <i class="fa fa-product-hunt"></i><span>Ranges & Prices</span>
                        
                        </a>
                     </li>
                     <li class="treeview">
                        <a href="{{url(app()->getLocale().'/admin/view-users')}}">
                        <i class="fa fa-user"></i><span>View Users</span>
                        
                        </a>
                     </li>
                                        
                      @endif
                      <li class="treeview">
                        @if (Session::get('adminSession')=='admin')
                           <a href="#">
                           <i class="fa fa-shopping-bag"></i><span>Orders</span>
                           <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                           </span>
                           </a>
                           <ul class="treeview-menu">
                              <li><a href="{{url(app()->getLocale().'/admin/orders')}}">Orders</a></li>
                              <li><a href="{{url(app()->getLocale().'/admin/canceled-orders')}}">Not Accepted Orders</a></li>
                              {{-- <li><a href="{{url(app()->getLocale().'/admin/not-processed-orders')}}">Not Processed Orders</a></li> --}}

                              
                           </ul>
                        @else
                           <a href="{{url(app()->getLocale().'/florist/orders')}}">
                           <i class="fa fa-shopping-bag"></i><span>Orders</span>
                           <span class="pull-right-container">
                           {{-- <i class="fa fa-angle-left pull-right"></i> --}}
                           </span>
                           </a>
                        @endif
                     </li> 
                   </ul>
                </div>
                <!-- /.sidebar -->
             </aside>
             <!-- =============================================== -->