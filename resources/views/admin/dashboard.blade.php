@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
   <body>
         
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{-- <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>Dashboard</h1>
                  <small>Very detailed & featured admin.</small>
               </div>
            </section> --}}
            <!-- Main content -->
            
            @if (Session::get('adminSession')=="admin" )
               <section class="content">
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/view-occasions')}}">
                           <div id="cardbox1">
                              <div class="statistic-box">
                                 <i class="fa fa-list-alt fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($occasions)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3> Categories</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url('/admin/view-types')}}">
                           <div id="cardbox4">
                              <div class="statistic-box">
                                 <i class="fa fa-files-o fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($types)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3> Types</h3>
                              </div>
                           </div>
                        </a>
                     </div> --}}
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/view-florists')}}">
                           <div id="cardbox2">
                              <div class="statistic-box">
                                 <i class="fa fa-home fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($florists)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>  Florists</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/orders')}}">
                           <div id="cardbox3">
                              <div class="statistic-box">
                                 <i class="fa fa-shopping-bag fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($orders)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>  Orders</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     
                  </div>
                  
                  
                  
               </section>
            @else
               <section class="content">
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/view-products')}}">
                           <div id="cardbox1">
                              <div class="statistic-box">
                                 <i class="fa fa-pagelines fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($products)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3> Products</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/view-florists')}}">
                           <div id="cardbox2">
                              <div class="statistic-box">
                                 <i class="fa fa-user-secret fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($florists)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>  Managers</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/orders')}}">
                           <div id="cardbox3">
                              <div class="statistic-box">
                                 <i class="fa fa-shopping-bag fa-3x"></i>
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($orders)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>  Orders</h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div id="cardbox4">
                           <div class="statistic-box">
                              <i class="fa fa-files-o fa-3x"></i>
                              <div class="counter-number pull-right">
                                 <span class="count-number">11</span> 
                                 <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                 </span>
                              </div>
                              <h3> Running Projects</h3>
                           </div>
                        </div>
                     </div> --}}
                  </div>
                  
                  
                  
               </section>
            @endif
            
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
 
   </body>
@endsection

