         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar" style="padding-top: 75px;">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="{{url(app()->getLocale().'/admin/florist-dashboard/'.Session::get('floristSlug'))}}">
                        {{-- <i class="fa fa-tachometer"></i> --}}
                        <span>
                        
                     {{__('florist.Διαχειριστικό')}}

                        {{-- Dashboard --}}
                     </span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     {{-- <i class="fa fa-product-hunt"></i> --}}
                     <span>
                        
                     {{__('florist.Προϊόντα')}}

                        {{-- Products --}}
                     </span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url(app()->getLocale().'/admin/add-product')}}">
                           
                     {{__('florist.Προσθήκη Προϊόντος')}}

                           {{-- Add Product --}}
                        </a></li>
                     <li><a href="{{url(app()->getLocale().'/admin/view-products')}}">
                        
                        
                     {{__('florist.Προβολή Προϊόντων')}}

                        {{-- View Products --}}
                     </a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     {{-- <i class="fa fa-gift"></i> --}}
                     <span>
                        
                     {{__('florist.Κουπόνια')}}

                        {{-- Coupons --}}
                     </span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{url(app()->getLocale().'/admin/add-coupon')}}">
                           
                     {{__('florist.Προσθήκη Κουπονιού')}}

                           {{-- Add Coupon --}}
                        </a></li>
                        <li><a href="{{url(app()->getLocale().'/admin/view-coupons')}}">
                           
                     {{__('florist.Προβολή κουπονιών')}}

                           {{-- View Coupons --}}
                        </a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                    <a href="{{url(app()->getLocale().'/florist/timetable')}}">
                    {{-- <i class="fa fa-clock-o"></i> --}}
                    <span>
                     
                     {{__('florist.Ώρες Διανομής')}}

                     {{-- Time Table --}}
                     </span>
                    
                    </a>
                 </li>
                 <li class="treeview">
                  <a href="{{url(app()->getLocale().'/florist/working-hours')}}">
                  {{-- <i class="fa fa-clock-o"></i> --}}
                  <span>
                     
                     {{__('florist.Ωράριο Λειτουργίας')}}

                     {{-- Working Hours --}}
                  </span>
                  
                  </a>
               </li>  
                 <li class="treeview">
                    <a href="#">
                     {{-- <i class="fa fa-product-hunt"></i> --}}
                     <span>
                        
                     {{__('florist.Διαχειριστές')}}

                        {{-- Managers --}}
                     </span>
                    
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="{{url(app()->getLocale().'/admin/add-manager')}}">
                        
                     {{__('florist.Προσθήκη διαχειριστή')}}

                        {{-- Add Manager --}}
                     </a></li>
                       <li><a href="{{url(app()->getLocale().'/admin/view-managers')}}">
                        
                        {{__('florist.Προβολή Διαχειριστών')}}

                        {{-- View Managers --}}
                     </a></li>
                       
                    </ul>
                 </li>
                  <li class="treeview">
                    <a href="{{url(app()->getLocale().'/florist/orders')}}">
                    {{-- <i class="fa fa-shopping-bag"></i> --}}
                    <span>
                     {{__('florist.Παραγγελίες')}}
                     {{-- Orders --}}
                     </span>
                    {{-- <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span> --}}
                    </a>
                    
                 </li> 
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->