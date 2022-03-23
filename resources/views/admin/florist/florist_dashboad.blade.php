<?php $slug = Session::get('floristSlug') ?>
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
            
            <style>
               .statistic-box h3 {
                  /* margin-top: 65px; */
                  font-weight: 600;
               }
               .pull-right {
                  float: right !important;
                  margin-top: 3px;
               }
            </style>

               <section class="content">
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/view-products')}}">
                           <div id="cardbox1" style="height: 75px;">
                              <div class="statistic-box">
                                 {{-- <i class="fa fa-pagelines fa-3x"></i> --}}
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($products)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3> 
                                    {{__('florist.Προϊόντα')}}
                                    {{-- Products --}}
                                 </h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/admin/view-managers')}}">
                           <div id="cardbox2" style="height: 75px;">
                              <div class="statistic-box">
                                 {{-- <i class="fa fa-user-secret fa-3x"></i> --}}
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($florists)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>  
                                    
                                    {{__('florist.Διαχειριστές')}}

                                    {{-- Managers --}}
                                 </h3>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="{{url(app()->getLocale().'/florist/orders')}}">
                           <div id="cardbox3" style="height: 75px;">
                              <div class="statistic-box">
                                 {{-- <i class="fa fa-shopping-bag fa-3x"></i> --}}
                                 <div class="counter-number pull-right">
                                    <span class="count-number">{{count($orders)}}</span> 
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                 </div>
                                 <h3>  
                                    
                                    {{__('florist.Παραγγελίες')}}

                                    {{-- Orders --}}
                                 </h3>
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

