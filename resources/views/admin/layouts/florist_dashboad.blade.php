@extends('admin.layouts.florist_master')
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
            
               <section class="content">
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url('/admin/view-products')}}">
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
                        <a href="{{url('/admin/view-managers')}}">
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
                        <a href="{{url('/florist/orders')}}">
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
            
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
 
   </body>
@endsection

