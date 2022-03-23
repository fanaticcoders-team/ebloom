<!DOCTYPE html>
<html lang="en" id="html">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>View Record</title>
  <meta name="csrf-token" content="{{csrf_token()}}">

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/ionicons/css/ionicons.css")}}">
  <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/typicons/src/font/typicons.css")}}">
  <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.base.css")}}">
  <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.addons.css")}}">
  <!-- endinject -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset("assets/vendors/icheck/skins/all.css")}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset("assets/css/shared/style.css")}}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset("assets/css/demo_1/style.css")}}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}" />

  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset("jquery-ui-1.12.1/jquery-ui.css")}}"/> --}}

  

  {{-- <link rel="stylesheet" type="text/css" href="{{asset("DataTables/DataTables-1.10.25/css/jquery.dataTables.css")}}"/> --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

  {{-- <link rel="stylesheet" type="text/css" href="{{asset("css/bootstrap-select.css")}}" /> --}}


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />


  

  <style>
    td{
       text-align: center;
       width: 10%;
    }
    th{
       text-align: center;
       width: 10%;

    }
    #recordTable_info{
      display: none !important;
    }
    .recordRow td{
      /* font-size: 15px; */
      font-weight: 600;
    }
    /* table {
      counter-reset: rowNumber;
    }

    table .recordRow::before {
      display: table-cell;
      counter-increment: rowNumber;
      content: counter(rowNumber);
      padding-right: 0.3em;
      text-align: right;
      width: 20px;
      padding-top: 13px;
    } */
    /* table tr td{
      width: 40px !important;
    }
    table #recordTable {
      table-layout: fixed;
      width: 100%; 
    } */


    body{
      overflow-x: visible !important;
    }
    html{
      overflow-x: visible !important;
    }
    .sticky{
      position: sticky;
      position: -webkit-sticky;
      top: 63px; /* required */
      z-index: 100;
    }


 </style>




<style>
  .loading-overlay {
    display: none;
    background: rgba(255, 255, 255, 0.7);
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 9998;
    align-items: center;
    justify-content: center;
  }

  .loading-overlay.is-active {
    display: flex;
  }
</style>

</head>

<body id="body">

  <style>
    #recordTable_filter{
      display: none;
    }
    .container {
        max-width: 2000px;
    }

    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
        width: 140px !important;
        height: 30px;
        
    }
    .bootstrap-select > .dropdown-toggle{
      height: 33px !important;
      background: #15B67D;
      color: white !important;
    }
    .bootstrap-select .dropdown-toggle .filter-option-inner,
    .bootstrap-select .dropdown-toggle .filter-option-inner-inner{
      height: 100% !important;
    }

    .bootstrap-select .dropdown-toggle .filter-option-inner {
        padding-right: 0px !important;
    }

    .navbar-menu-wrapper .navbar-nav .d-none{
      /* display: block !important; */
    }

    @media screen and (max-width: 991px) {
        .sidebar-offcanvas {
            position: fixed;
            max-height: calc(100vh - 63px);
            top: 63px;
            bottom: 0;
            overflow: auto;
            right: 0px;
            -webkit-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
        }
        
        .sidebar-offcanvas.active {
            right: 0;
        }
    }
    


  </style>

  <div class="loading-overlay">
    <span class="fa fa-spinner fa-3x fa-spin"></span>
  </div>

  {{-- class="container-scroller" --}}
  <div  style="">
    <!-- partial:../../partials/_navbar.html -->
  
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" 
    @if (Auth()->user()->admin==1)
      {{-- style="overflow-x: scroll; overflow: auto;" --}}
        
    @endif
    >
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" 
      @if (Auth()->user()->admin != 1 )
        style="background: #fff; color:black;"
          
      @endif
      >
        <a class="navbar-brand brand-logo" href="{{url('/')}}">
          <img src="{{asset("assets/images/logo(2).png")}}" alt="logo" style="max-width: 36%;" /> 
          {{-- <h3 style="display: flex; align-items: center;">CRM</h3> --}}
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/')}}">
          {{-- <h3>CRM</h3> --}}
          <img src="{{asset("assets/images/logo(2).png")}}" alt="logo" style="max-width: 100%;" /> 
    
        </a>
      </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          {{-- <div class="row"> --}}
            {{-- <div class="col-md-11"> --}}
              <ul class="navbar-nav">
                @if (Auth()->user()->admin==1)
                  <li class="nav-item ">
                    <button class="btn btn-primary d-none" id="menuBtn"><i class="fa fa-close"></i> </button>
                    <button class="btn btn-primary " id="crosMenuBtn"><i class="fa  fa-bars"></i> </button>
                    
                  </li>
                    
                @endif
                <li class="nav-item ">
                  <a href="{{url('/add-entry')}}" class="btn btn-success"> Add Record </a>
                </li>
                
                @if (Auth()->user()->admin==1)
                  <li class="nav-item ">
                    {{-- <a href="{{url('/file/export')}}" class="btn btn-info">Export</a> --}}
                    <a type="button" class="btn btn-info text-white exportBtn" data-toggle="modal" data-target="#exampleModalCenter">
                      
                      Export
                    </a>
                  </li>
                  <li class="nav-item ">
                    {{-- <a href="{{url('/file/export')}}" class="btn btn-info">Export</a> --}}
                    <a type="button" class="btn btn-primary text-white importBtn" data-toggle="modal" data-target="#importModalCenter">
                      
                      Import
                    </a>
                  </li>
      
                    
                @endif
                <li class="nav-item ">
                  {{-- <a href="{{url('/file/export')}}" class="btn btn-info">Export</a> --}}
                  <a type="button" id="viewCompeletedBtn" class="btn btn-success text-white " >
                    Customers
                    {{-- View Completed --}}
                  </a>
                </li>
                <li class="nav-item ">
                  {{-- <a href="{{url('/file/export')}}" class="btn btn-info">Export</a> --}}
                  <a type="button" id="viewDailyTasks" class="btn btn-success text-white " >
                    
                    Daily Tasks
                  </a>
                </li>
                
                {{-- <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                  <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{asset("assets/images/avatar5.png")}}" alt="Profile image"> </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    
                    <a href="{{url('/profile')}}" class="dropdown-item">My Profile 
                      <i
                        class="dropdown-item-icon ti-dashboard"></i></a>
                    <a href="{{url('/admin-logout')}}" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                  </div>
                </li> --}}
      
              </ul>

            {{-- </div> --}}
            {{-- <div class="col-md-1"> --}}
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bell" ></i>
                      <span class="count notificationCount"> {{count($notifications)}} </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                      <a class="dropdown-item py-3">
                          <p class="mb-0 font-weight-medium float-left">You have <span class="notificationCount"> {{count($notifications)}} </span>  unread notifications </p>
                          {{-- <span class="badge badge-pill badge-primary float-right">View all</span> --}}
                      </a>
                      <div class="dropdown-divider"></div>
                      <div id="notification-list">
                        @foreach ($notifications as $item)
                          <a class="dropdown-item preview-item" data-id="{{$item->id}}" data-recordId ="{{$item->data['recordId']}}">
                              
                              <div class="preview-item-content flex-grow py-2">
                                  <p class="preview-subject ellipsis font-weight-medium text-dark"> {{$item->data['record']}} </p>
                                  <p class="font-weight-light small-text"> {{$item->data['data']}} at {{$item->data['time']}} {{$item->data['date']}} </p>
                              </div>
  
                          </a>
                            
                        @endforeach

                      </div>
                      {{-- <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                              <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                          <div class="preview-item-content flex-grow py-2">
                              <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                              <p class="font-weight-light small-text"> The meeting is cancelled </p>
                          </div>
                      </a> --}}
                  </div>
                </li>
                <li class="nav-item nav-item dropdown user-dropdown ">
                  <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{asset("assets/images/avatar5.png")}}" alt="Profile image"> </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    
                    <a href="{{url('/profile')}}" class="dropdown-item">My Profile 
                      <i
                        class="dropdown-item-icon ti-dashboard"></i></a>
                    <a href="{{url('/admin-logout')}}" class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                  </div>
                </li>
              </ul>
            {{-- </div> --}}
          {{-- </div> --}}
          {{-- search --}}
          
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas" style="display: none">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <style>
          .dropdown .dropdown-toggle::after{
            content: '' !important;
          }
        </style>
    </nav>
  
    {{-- @section('headerBtn','Add Record') --}}
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @if (Auth()->user()->admin == 1)
      @include('layouts.sidebar')
          
      @endif
      <!-- partial -->
      <div class="main-panel" 
        @if (Auth()->user()->admin != 1)
        style="width: 100%;"
        @endif
        id="main-panel"  >
        
        <div class="content-wrapper">
          <div class="row">

            <style>
              .dropbtn {
                background-color: #4CAF50;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
              }
              
              .dropdown {
                position: relative;
                display: inline-block;
              }
              
              .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
              }
              
              .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
              }
              
              .dropdown-content a:hover {background-color: #f1f1f1}
              
              .dropdown:hover .dropdown-content {
                display: block;
              }
              
              .dropdown:hover .dropbtn {
                background-color: #3e8e41;
              }
            </style>
              {{-- errors --}}
            <div class="container" 
            @if (Auth()->user()->admin != 1)
            style="max-width: 2000px;"
            @endif
            >

              {{-- select deteled msg --}}
              <div class="alert alert-success alert-block d-none delete-record-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
              <strong>Record Deleted successfully!</strong>
            </div>
              {{-- end --}}
              @if(Session::has('flash_message_error'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                  </button>
              <strong>{{ session('flash_message_error') }}</strong>
              </div>
              @endif
              @if(Session::has('flash_message_success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                  </button>
                <strong>{{ session('flash_message_success') }}</strong>
              </div>
              @endif

            </div>
            <div class="container" 
            @if (Auth()->user()->admin != 1)
            style="max-width: 2000px;"
            
            @endif
             >
              
            </div>
            <div class="container">
              <div class="col-12 sticky" id="filters-section" style="background: #fff; padding-top: 20px; padding-bottom: 20px;">
                <div class="row">
                  {{-- <div class="col-md-2">
                    <div class="input-group" style="width: 100%; display: flex;
                    align-items: center;">
                      <h4 class="" style="font-size: 14px">View Records</h4>
                    </div>
                  </div> --}}
                  <style>
                    .agentDropdown{
                      min-width: 130px;
                    }
                  </style>
                  
                  <div class="col-md-10">
                    <div class="input-group">
                      <?php $allagents = count($agents); ?>
                      
                        @if (Session::has('filters'))
                          <p style="display: none">
                            {{count(Session::get('filters')['agentVal'])}}
                            {{count(Session::get('filters')['agentVal'])+count(Session::get('filters')['agentVal'])}}
                            {{$allagents}}

                          </p>
                            
                        @endif
                        <select style="min-width: 120px;" class="selectpicker form-control show-tick select-all agentDropdown" id="agentInput" multiple data-live-search="true" title="Agent" data-selected-text-format="count > 2">
                          <option value="All" 
                          @if (Session::has('filters'))
                          @if (count(Session::get('filters')['agentVal']) >= $allagents && count(Session::get('filters')['agentVal']) < 22 )
                            @if (count(Session::get('filters')['agentVal']) == count(Session::get('filters')['agentVal']) )
                            selected
                            @endif
                              
                          @endif
                          @endif
                          class="selected">Select All</option>
                          @foreach ($agents as $agent)
                          <?php $match = 0; ?>
                          @if (Session::has('filters'))
                              @if (Session::get('filters')['agentOption'] == 1 )
                                @foreach (Session::get('filters')['agentVal'] as $item)
                                
                                  @if ($item == $agent->name)
                                      <?php $match = $match + 1; ?>
                                    @break
                                  @endif
                                @endforeach
                              @endif
                                    
                                  
                          @endif
                          @if ($match > 0)
                            <option value="{{$agent->name}}" selected> {{$agent->name}} </option>
                              
                          @else 
                            <option value="{{$agent->name}}"> {{$agent->name}} </option>

                          @endif
                              
                          @endforeach
                        </select>
                        <select class="selectpicker" id="statusInput" multiple data-live-search="true" title="Status" data-selected-text-format="count > 2">
                          <option value="All" class="selected">Select All</option>
                          
                          @foreach ($statuses as $status)
                          {{-- <option value="{{$status->status}}"> {{$status->status}} </option> --}}

                          <?php $match = 0; ?>
                          @if (Session::has('filters'))
                              @if (Session::get('filters')['statusOption'] == 1 )
                                @foreach (Session::get('filters')['statusVal'] as $item)
                                  @if ($item == $status->status)
                                      <?php $match = 1; ?>
                                    @break
                                  @endif
                                @endforeach
                              @endif
                                    
                                  
                          @endif

                          @if ($match == 1)
                            <option value="{{$status->status}}" selected> {{$status->status}} </option>
                              
                          @else 
                            <option value="{{$status->status}}"> {{$status->status}} </option>

                          @endif

                          @endforeach
                        </select>
                        <select class="selectpicker form-control show-tick select-all agentDropdown" id="typeInput" multiple data-live-search="true" title="Business" data-selected-text-format="count > 2">
                          <option value="All" class="selected">Select All</option>
                          
                          @foreach ($bTypes as $bType)
                          {{-- <option value="{{$bType->bType}}" selected> {{$bType->bType}} </option> --}}
                          
                          <?php $match = 0; ?>
                          <?php $typeCheck = ''; ?>

                          @if (Session::has('filters'))
                              @if (Session::get('filters')['typeOption'] == 1 )
                                @if (count(Session::get('filters')['typeVal']) > 0 )
                                    
                                  @foreach (Session::get('filters')['typeVal'] as $type)
                                      
                                      @if ($type == $bType->bType)
                                        <?php $match = 1; ?>
                                      @break

                                      @endif
                                  @endforeach
                                @endif
                              @endif
                                    
                          @endif
                          @if ($match > 0)
                            <option value="{{$bType->bType}}" selected> {{$bType->bType}} </option>
                          
                          @else 
                            <option value="{{$bType->bType}}"> {{$bType->bType}} </option>
                          
                          @endif

                          @endforeach
                        </select>
                        <select class="selectpicker" id="locationInput" multiple data-live-search="true" title="Location" data-selected-text-format="count > 2">
                          <option value="All" class="selected">Select All</option>
                          
                          @foreach ($locations as $location)
                          {{-- <option value="{{$location->location}}"> {{$location->location}} </option> --}}
                          <?php $match = 0; ?>
                          @if (Session::has('filters'))
                              @if (Session::get('filters')['locationOption'] == 1 )
                                @foreach (Session::get('filters')['locationVal'] as $item)
                                  @if ($item == $location->location)
                                      <?php $match = 1; ?>
                                    @break
                                  @endif
                                @endforeach
                              @endif
                                    
                          @endif
                          @if ($match == 1)
                            <option value="{{$location->location}}" selected> {{$location->location}} </option>
                              
                          @else 
                            <option value="{{$location->location}}"> {{$location->location}} </option>

                          @endif    

                          @endforeach
                        </select>
                        
                        <input type="text" id="datepicker" placeholder="dd/mm/yy" 
                        @if (Session::has('filters'))
                          {{-- @if (Session::get('filters')['fromDate'] != '' )
                              
                          @endif --}}
                            value="{{Session::get('filters')['fromDate']}}"
                        @endif
                        class="form-control " name="datepicker" style="min-width: 70px;">
                    
                        <input type="text" class="form-control datepicker2" 
                        @if (Session::has('filters'))
                          {{-- @if (Session::get('filters')['fromDate'] != '' )
                              
                          @endif --}}
                            value="{{Session::get('filters')['toDate']}}"
                        @endif
                        placeholder="dd/mm/yy" id="datepicker2"  name="datepicker2" readonly style="min-width: 70px;">
                        <input type="button" class="btn btn-primary" id="refresh" value="Clear" name="refresh">
                      
                    </div>
                  </div>
                  <input type="hidden" id="emailInput" placeholder="Email" class="form-control searchField" name="emailInput">
                  <input type="hidden" id="dailyInput" placeholder="Email" class="form-control searchField" name="dailyInput">

                  {{-- <div class="col-md-3">
                    <div class="input-group">
                      <input type="hidden" id="emailInput" placeholder="Email" class="form-control searchField" name="emailInput">
                      <select class="selectpicker" id="typeInput"  multiple data-live-search="true" >
                        <option value="" selected disabled>Business Type </option>
                        @foreach ($bTypes as $bType)
                        <option value="{{$bType->bType}}"> {{$bType->bType}} </option>
                            
                        @endforeach
                      </select>
                      <select class="selectpicker" id="locationInput" multiple data-live-search="true">
                        <option value="" selected disabled>Location</option>
                        
                        @foreach ($locations as $location)
                        <option value="{{$location->location}}"> {{$location->location}} </option>
                            
                        @endforeach
                      </select>
                    </div>
                  </div> --}}

                  {{-- <div class="col-md-3">
                    <div class="input-group">
                      <input type="text" id="datepicker" placeholder="dd/mm/yy" class="form-control " name="datepicker">
                    
                      <input type="text" class="form-control datepicker2" placeholder="dd/mm/yy" id="datepicker2"  name="datepicker2" readonly>
                      <input type="button" class="btn btn-primary" id="refresh" value="Refresh" name="refresh">
                    
                    </div>
                    
                  </div>    --}}
                  {{-- <input type="button" class="btn btn-success" id="filter" value="Filter" name="filter"> --}}
                  
                  {{-- <div class="col-md-9">
                    <div class="row">
                      
                    </div>
                  </div> --}}
                  <div class="col-md-2">
                    <div class="input-group">
                      <input type="text" 
                      @if (Session::has('filters'))
                        value="{{Session::get('filters')['searchInput']}}"
                      @endif
                       class="form-control" id="searchInput">
                      <div class="dropdown">
                        <button class="dropbtn" style="height: 33px;
                        border-radius: 5px;
                        display: flex;
                        align-content: center;
                        padding-top: 3px;
                        ">&#8595;</button>
                        <div class="dropdown-content" style="padding: 10px; right: 10px;">
                          <span>Search in</span> <br>
                        <input type="checkbox" name="agent" id="agent" class="filterField" checked/>	&nbsp;	 Agent <br>
                        <input type="checkbox" name="status" id="status" class="filterField" checked/>	&nbsp;  Status <br>
                        <input type="checkbox" name="bName" id="bussiness_name" class="filterField" checked/>	&nbsp;  Business Name <br>
                        <input type="checkbox" name="phone" id="phone"  class="filterField" checked/>	&nbsp;  Landline Phone <br>
                        <input type="checkbox" name="cellphone" id="cellphone" class="filterField" checked/>	&nbsp;  Cell Phone <br>
                        <input type="checkbox" name="type" id="bussiness_type" class="filterField" checked/>	&nbsp;  Business <br>
                        <input type="checkbox" name="location" id="location" class="filterField" checked/>	&nbsp;  Location <br>
                        <input type="checkbox" name="offer" id="offer" class="filterField" checked/>	&nbsp;  Offer <br>
                        <input type="checkbox" name="email" id="email" class="filterField" checked/>	&nbsp;  Email <br>

  
                        </div>
                      </div>
  
                    </div>
  
  
                  </div>
                </div>
              </div>
              <style>
                .page-item{
                  display: none;
                }
                tbody .page-item{
                  display: inline;
                }
                .pagination{
                     width: 90px;
                     position: relative;
                      top: 47px;
                }
              </style>
              <div class=" grid-margin stretch-card " id="records-section">
                <div class="card" style="overflow-x: scroll;">
                  <div class="card-body">
                    <h5>View Records</h5>
                    {{-- <p class="card-description"> Add class <code>.table-striped</code> </p> --}}
                    {{-- <span style="float: right">Total Record: <span id="totalRecord">{{count($allRecords)}}</span> </span> --}}
                    
                    <button style="" class="btn btn-primary delete_all" data-url="{{ url('myrecordsDeleteAll') }}">
                      Delete All Selected
                    </button>
      
                    <table class="table table-striped" id="recordTable" >
                      <thead>
                        <tr>
                          <th></th>
                          <th ><input type="checkbox" id="master"></th>
                          <th>  </th>
                          <th> Agent </th>
                          <th> Status </th>
                          <th> Calendar </th>
                          <th> Time </th>
                          <th> Business Name </th>
                          <th> Landline Phone </th>
                          <th> Cell Phone </th>
                          <th> Notes </th>
                          <th style="display: none;"> Owner's Name </th>
                          <th> Business </th>
                          <th> Location </th>
                          <th> Email </th>
                          <th style="display: none;"> Website </th>
                          <th> Offer </th>
                          <th style="display: none;"> Price </th>
                          <th style="display: none;"> Lead By </th>
                          
  
                        </tr>
                      </thead>
                      
                      <tbody class="tableBody">
                        @include('records_pagination')
                          
                        
                      </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" 
                    @if (Session::has('filters'))
                        value="{{Session::get('filters')['page']}}"
                    @else
                    value="1" 

                    @endif
                    />

                  </div>
                </div>
              </div>
            </div>

            
            
          </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- Export Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Select Fields, you want to export
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="display: flex; justify-content: center;">
                <div class="dropdown" style="width: 100%;">
                  {{-- <div class="dropdown-content" style="padding: 10px"> --}}
                    {{-- <span>Search in</span>  --}}
                  <div class="row" >
                    <div class="col-md-6">
                      <input type="checkbox" name="agentField" id="agent" class="chk" checked />	&nbsp;	 Agent <br>
                      <input type="checkbox" name="statusField" id="status" class="chk" checked/>	&nbsp;  Status <br>
                      <input type="checkbox" name="calendarField" id="calender" class="chk" checked/>	&nbsp;  Calendar <br>
                      <input type="checkbox" name="timeField" id="time" class="chk" checked/>	&nbsp;  Time <br>
                      <input type="checkbox" name="timeField" id="bussiness_name" class="chk" checked/>	&nbsp;  Bussiness Name <br>
                      <input type="checkbox" name="timeField" id="phone" class="chk" checked/>	&nbsp;  Landline Phone <br>
                      <input type="checkbox" name="timeField" id="cellphone" class="chk" checked/>	&nbsp;  Cell Phone <br>
                      <input type="checkbox" name="timeField" id="owner_name" class="chk" checked/>	&nbsp;  Owner's Name <br>


                    </div>
                    <div class="col-md-6">
                      <input type="checkbox" name="typeField" id="bussiness_type" class="chk" checked/>	&nbsp;  Type of bussiness <br>
                      <input type="checkbox" name="locationField" id="location" class="chk" checked/>	&nbsp;  Location <br>
                      <input type="checkbox" name="locationField" id="email" class="chk" checked/>	&nbsp;  Email <br>
                      <input type="checkbox" name="locationField" id="website" class="chk" checked/>	&nbsp;  Website <br>
                      <input type="checkbox" name="locationField" id="offer" class="chk" checked/>	&nbsp;  Offer <br>
                      <input type="checkbox" name="locationField" id="price" class="chk" checked/>	&nbsp;  Price <br>
                      <input type="checkbox" name="locationField" id="valuation" class="chk" checked/>	&nbsp;  Valuation <br>


                    </div>
                  </div>


                  {{-- </div> --}}
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary exportFieldBtn">Export</button>
              </div>
            </div>
          </div>
        </div>
        {{-- end Export modal --}}
        <!-- Import Modal -->
        <div class="modal fade" id="importModalCenter" tabindex="-1" role="dialog" aria-labelledby="importModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="importModalLongTitle">
                  Import Xls or csv File
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="display: flex; justify-content: center;">
                <div class="dropdown" style="width: 100%;">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Import CSV or Xls</h4>
                      <form class="forms-sample" method="POST" action="{{url('file/import')}}" enctype="multipart/form-data"> {{ csrf_field() }}
                        
                        <div class="form-group">
                          <label>File upload</label>
                          <input type="file" name="file" class="form-control" accept=".xls,.xlsx,.csv">
                          {{-- <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                            </span>
                          </div> --}}
                        </div>
                        
                        <button type="submit" class="btn btn-success mr-2">Import</button>
                        {{-- <button class="btn btn-light">Cancel</button> --}}
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary exportFieldBtn">Export</button> --}}
              </div>
            </div>
          </div>
        </div>
        {{-- end Import modal --}}

        <!-- partial:../../partials/_footer.html -->
        @include('layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset("assets/vendors/js/vendor.bundle.base.js")}}"></script>
  <script src="{{asset("assets/vendors/js/vendor.bundle.addons.js")}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset("assets/js/shared/off-canvas.js")}}"></script>
  <script src="{{asset("assets/js/shared/misc.js")}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

  {{-- <script src="https://code.jquery.com/jquery-1.12.1.js"></script> --}}


  {{-- <script type="text/javascript" src="{{asset("DataTables/DataTables-1.10.25/js/jquery.dataTables.js")}}"></script> --}}
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  {{-- <script src="{{asset("jquery-ui-1.12.1/jquery-ui.js")}}"></script> --}}
  
  {{-- <script src="{{asset("js/bootstrap-select.min.js")}}"></script> --}}
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  

  {{-- export script --}}
  <script>
    $(document).ready(function () {
      $('.exportFieldBtn').click(function () {
        // alert('check');
        // var agent = $('#agentField').val();
        var fields = $(".chk:checked").map(function() {
          return this.id;
        }).toArray();
        var filterfields = $(".filterField:checked").map(function() {
          return this.id;
        }).toArray();
        var searchInput = $("#searchInput").val() ?? '' ;
        var statusVal = $('#statusInput').val()  ?? '' ;
        var agentVal = $('#agentInput').val() ?? '' ;
        var emailVal = $('#emailInput').val() ?? '' ;
        var locationVal = $('#locationInput').val() ?? '' ;
        var typeVal = $('#typeInput').val() ?? '' ;
        var dailyVal = $('#dailyInput').val() ?? '' ;

        
        var fromDate = $('#datepicker').val() ?? '' ;
        var toDate = $('#datepicker2').val() ?? '' ;
        var id = 2;
        // window.location.href = url;
        var agentOption = 1;
        var statusOption = 1;
        var typeOption = 1;
        var locationOption = 1;
        var dailyOption = 1;
        
        if (dailyVal == '' || dailyVal == null ) {
          dailyOption = 0;
        }


        if (agentVal.length==0) {
          // console.log('length 0');
          agents = {!! json_encode($filterAgents->toArray()) !!};
          agents.forEach(element => {
            agentVal.push(element.name);
          });
          agentOption = 0;
        }else if(agentVal[0] == "All" ){
          agents = {!! json_encode($filterAgents->toArray()) !!};
          agents.forEach(element => {
            agentVal.push(element.name);
          });
        }
        // console.log(agentVal[0]);

        if (statusVal.length==0) {
          statuses = {!! json_encode($filterStatuses->toArray()) !!};
          statuses.forEach(element => {
            statusVal.push(element.status);
          });
          statusOption = 0;
        }else if(statusVal[0] == "All" ){
          statuses = {!! json_encode($filterStatuses->toArray()) !!};
          statuses.forEach(element => {
            statusVal.push(element.status);
          });
        }

        if (typeVal.length==0) {
          bTypes = {!! json_encode($filterbTypes->toArray()) !!};
          bTypes.forEach(element => {
            typeVal.push(element.bType);
          });
          typeOption = 0;
        }else if(typeVal[0] == "All" ){
          bTypes = {!! json_encode($filterbTypes->toArray()) !!};
          bTypes.forEach(element => {
            typeVal.push(element.bType);
          });
        }
        if (locationVal.length==0) {
          locations = {!! json_encode($filterlocations->toArray()) !!};
          locations.forEach(element => {
            locationVal.push(element.location);
          });
          locationOption = 0;
        }else if(locationVal[0] == "All" ){
          locations = {!! json_encode($filterlocations->toArray()) !!};
          locations.forEach(element => {
            locationVal.push(element.location);
          });
        }

      // console.log("status value: "+statusVal);
      // console.log("agent value: "+agentVal);
      // console.log("types value: "+typeVal);
      // console.log("location value: "+locationVal);





        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/export-records',
            data : {
              statusVal:statusVal,
              statusOption:statusOption,
              agentVal:agentVal,
              agentOption:agentOption,
              emailVal:emailVal,
              typeVal:typeVal,
              typeOption:typeOption,
              locationVal:locationVal,
              locationOption:locationOption,
              fields:fields,
              filterfields:filterfields,
              fromDate:fromDate,
              toDate:toDate,
              searchInput:searchInput,
              dailyOption: dailyOption,

            },
            dataType:"json",
            success:function(data){
                // console.log(data);
                window.location.href = `{{ url('/field/export')}}`;


            },error:function(){
                // alert("Error");
                console.log('export record error');
            }
        });





      });
    });
  </script>
  {{-- end export script --}}

  {{-- start range filter --}}
  <script>
    $(document).ready( function () {
      // $( "#datepicker2" ).datepicker( "option", "disabled", true );
      $("#datepicker2").prop('disabled', true);
    $('#recordTable').DataTable({
          "paging":false,
          "autoWidth": false, 
          
          // "columns": [
          //   { "width": "10%" },
          //   null, // automatically calculates
          //   null  // remaining width
          // ]
    
    });
    $(this).closest('td').attr('id');
    });
  </script>  

  @if (Session::has('flash_record_id'))
    <script>
      //  alert('check');
      $(document).ready(function () {
          // Handler for .ready() called.
          // alert('slam');
          var id = {!! json_encode(session('flash_record_id')) !!};
          var id = parseInt(id)-3
          console.log(id);
          $('html, body').animate({
              scrollTop: $('#record-'+id).offset().top
          }, 'slow');

      });  

    </script>
      
  @endif
  {{-- start rang filter --}}

  <script>
    // fetch_data();
    function fetch_data(from_date = '', to_date = '') {
          //  console.log('fetch work');
      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/get-records-data',
            data : {from_date:from_date,to_date:to_date},
            // dataType:"json",
            success:function(data){
                // console.log(data);
                // console.log(data.length);
                // var currentRecord = data.length;
                $('.loading-overlay').removeClass('is-active');

                // var totalRecord = 0;
                // $('tbody').html('');
                // $('tbody').html(data);
                // var countRecords = $('#countRecords').val();
                window.location.href = `{{ url('/view-records')}}`;
                
                // if ( parseInt(currentRecord) > parseInt(countRecords)) {
                  
                  // $('#totalRecord').html(totalRecord);

                  // $("#countRecords").val(currentRecord);
                  console.log('data added');
                // }
                // $("#message_success").show();
                // setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
            },error:function(data){
              alert(data.responseText);
                
                console.log('fetch record error');
            }
      });

    }
    
    function onChangeSearchRecord(){

      console.log('onchange search fields');
      var statusVal = $('#statusInput').val();
      var agentVal = $('#agentInput').val();
      var emailVal = $('#emailInput').val();
      var locationVal = $('#locationInput').val();
      var typeVal = $('#typeInput').val();
      var fromDate = $('#datepicker').val() ?? '' ;
      var toDate = $('#datepicker2').val() ?? '' ;
      var dailyVal = $('#dailyInput').val() ?? '' ;

      var filterfields = $(".filterField:checked").map(function() {
          return this.id;
        }).toArray();
        var searchInput = $("#searchInput").val() ?? '' ;
        

      // console.log('this is call work');
      agentOption = 1;
      statusOption = 1;
      typeOption = 1;
      locationOption = 1;
      dailyOption = 1;

      if (dailyVal == '' || dailyVal == null ) {
          dailyOption = 0;
        }

      if (agentVal.length > 0) {
        // $('.loading-overlay').addClass('is-active');
      }
      if (statusVal.length > 0) {
        // $('.loading-overlay').addClass('is-active');
      }
      if (typeVal.length > 0) {
        // $('.loading-overlay').addClass('is-active');
      }
      if (locationVal.length > 0) {
        // $('.loading-overlay').addClass('is-active');
      }
        
      console.log("length: "+agentVal.length);
      agents = {!! json_encode($filterAgents->toArray()) !!};

      if (agentVal.length==0) {
        // console.log('length 0');
        agents = {!! json_encode($filterAgents->toArray()) !!};
        agents.forEach(element => {
          agentVal.push(element.name);
        });
        agentOption = 0;
      }else if(agentVal[0] == "All" ){
        agents = {!! json_encode($filterAgents->toArray()) !!};
        agents.forEach(element => {
          agentVal.push(element.name);
        });
      }else if(agentVal.length==agents.length){
        agentOption = 0;
      }
      // console.log(agentVal[0]);

      if (statusVal.length==0) {
        statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });
        statusOption = 0;
      }else if(statusVal[0] == "All" ){
        statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });
      }

      if (typeVal.length==0) {
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
        typeOption = 0;
      }else if(typeVal[0] == "All" ){
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
      }
      if (locationVal.length==0) {
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
        locationOption = 0;
      }else if(locationVal[0] == "All" ){
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
      }

      console.log("status option: "+statusOption);
      console.log("agent option: "+agentOption);
      console.log("types option: "+typeOption);
      console.log("location option: "+locationOption);

      var page = $('#hidden_page').val();
      console.log(page);
      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/save-filters?page='+ page,
            data : {
              statusVal:statusVal,
              statusOption:statusOption,
              agentVal:agentVal,
              agentOption:agentOption,
              emailVal:emailVal,
              typeVal:typeVal,
              typeOption:typeOption,
              locationVal:locationVal,
              locationOption:locationOption,
              fromDate:fromDate,
              toDate: toDate,
              dailyOption: dailyOption,
              filterfields: filterfields,
              searchInput: searchInput
            },
            // dataType:"json",
            success:function(data){
                // console.log(data);
                // console.log(data.allRecords);
              // $('.loading-overlay').removeClass('is-active');
              // $('tbody').html('');
              // $('tbody').html(data);
                
              window.location.href = `{{ url('/view-records')}}`;

                // var currentRecord = data.length;
                var totalRecord = 0;
                // var countRecords = $('#countRecords').val();
                var html = '';
            
            },error:function(data){
                // alert("Error");
                alert(data.responseText);
                console.log('search record error');
            }
      });
      
    
    }

    function searchField() {
      console.log('search fields');
      var statusVal = $('#statusInput').val();
      var agentVal = $('#agentInput').val();
      var emailVal = $('#emailInput').val();
      var locationVal = $('#locationInput').val();
      var typeVal = $('#typeInput').val();
      var fromDate = $('#datepicker').val() ?? '' ;
      var toDate = $('#datepicker2').val() ?? '' ;
      var dailyVal = $('#dailyInput').val() ?? '' ;

      var filterfields = $(".filterField:checked").map(function() {
          return this.id;
        }).toArray();
        var searchInput = $("#searchInput").val() ?? '' ;
        

      // console.log('this is call work');
      agentOption = 1;
      statusOption = 1;
      typeOption = 1;
      locationOption = 1;
      dailyOption = 1;

      if (dailyVal == '' || dailyVal == null ) {
          dailyOption = 0;
        }

      if (agentVal.length > 0) {
        $('.loading-overlay').addClass('is-active');
      }
      if (statusVal.length > 0) {
        $('.loading-overlay').addClass('is-active');
      }
      if (typeVal.length > 0) {
        $('.loading-overlay').addClass('is-active');
      }
      if (locationVal.length > 0) {
        $('.loading-overlay').addClass('is-active');
      }
        
      agents = {!! json_encode($filterAgents->toArray()) !!};

      if (agentVal.length==0) {
        // console.log('length 0');
        agents = {!! json_encode($filterAgents->toArray()) !!};
        agents.forEach(element => {
          agentVal.push(element.name);
        });
        agentOption = 0;
      }else if(agentVal[0] == "All" ){
        agents = {!! json_encode($filterAgents->toArray()) !!};
        agents.forEach(element => {
          agentVal.push(element.name);
        });
      }else if(agentVal.length==agents.length){
        agentOption = 0;
      }
      // console.log(agentVal[0]);

      if (statusVal.length==0) {
        statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });
        statusOption = 0;
      }else if(statusVal[0] == "All" ){
        statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });
      }

      if (typeVal.length==0) {
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
        typeOption = 0;
      }else if(typeVal[0] == "All" ){
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
      }
      if (locationVal.length==0) {
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
        locationOption = 0;
      }else if(locationVal[0] == "All" ){
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
      }

      console.log("status option: "+statusOption);
      console.log("agent option: "+agentOption);
      console.log("types option: "+typeOption);
      console.log("location option: "+locationOption);

      var page = $('#hidden_page').val();
      console.log(page);
      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/search-records?page='+ page,
            data : {
              statusVal:statusVal,
              statusOption:statusOption,
              agentVal:agentVal,
              agentOption:agentOption,
              emailVal:emailVal,
              typeVal:typeVal,
              typeOption:typeOption,
              locationVal:locationVal,
              locationOption:locationOption,
              fromDate:fromDate,
              toDate: toDate,
              dailyOption: dailyOption,
              filterfields: filterfields,
              searchInput: searchInput
            },
            // dataType:"json",
            success:function(data){
                // console.log(data);
                // console.log(data.allRecords);
              $('.loading-overlay').removeClass('is-active');
                $('tbody').html('');
                $('tbody').html(data);
                // $('#recordTable').ajax.reload(null, false);
                // $('#recordTable').DataTable().clear();

                // $('#recordTable').DataTable().ajax.reload(null, false);
                
                // location.reload(false);
                // console.log(document.URL+"#main-panel"  );
                // $("#body").load(document.URL + "#body");
                // $("#filters-section").load(document.URL + "#filters-section");
                

                
                // $(".selectpicker").change(searchField);
                
                // $("#div_element").load('/g/ajax.php?sleep=1&html=helloooooo!'); 
                // var dataJson = JSON.parse(data);
                 
                // console.log(dataJson.records.data);

                // $('#recordTable').DataTable({
                //   data:data,
                // });
                // window.location.href = `{{ url('/view-records')}}`;

                // var currentRecord = data.length;
                var totalRecord = 0;
                // var countRecords = $('#countRecords').val();
                var html = '';

                // if ( parseInt(currentRecord) > parseInt(countRecords)) {
                  
                  // $('.tableBody').html(html);
                  // $('#totalRecord').html(totalRecord);
                  
                  // $("#countRecords").val(currentRecord);
                  // console.log('data added');
                // }
                // $("#message_success").show();
                // setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
            },error:function(data){
                // alert("Error");
                alert(data.responseText);
                console.log('search record error');
            }
      });
      
    }

    function saveFilters() {
      console.log('search fields');
      var statusVal = $('#statusInput').val();
      var agentVal = $('#agentInput').val();
      var emailVal = $('#emailInput').val();
      var locationVal = $('#locationInput').val();
      var typeVal = $('#typeInput').val();
      var fromDate = $('#datepicker').val() ?? '' ;
      var toDate = $('#datepicker2').val() ?? '' ;
      var dailyVal = $('#dailyInput').val() ?? '' ;

      var filterfields = $(".filterField:checked").map(function() {
          return this.id;
        }).toArray();
        var searchInput = $("#searchInput").val() ?? '' ;
        

      // console.log('this is call work');
      agentOption = 1;
      statusOption = 1;
      typeOption = 1;
      locationOption = 1;
      dailyOption = 1;

      if (dailyVal == '' || dailyVal == null ) {
          dailyOption = 0;
        }

        

      if (agentVal.length==0) {
        // console.log('length 0');
        agents = {!! json_encode($filterAgents->toArray()) !!};
        agents.forEach(element => {
          agentVal.push(element.name);
        });
        agentOption = 0;
      }else if(agentVal[0] == "All" ){
        agents = {!! json_encode($filterAgents->toArray()) !!};
        agents.forEach(element => {
          agentVal.push(element.name);
        });
      }
      // console.log(agentVal[0]);

      if (statusVal.length==0) {
        statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });
        statusOption = 0;
      }else if(statusVal[0] == "All" ){
        statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });
      }

      if (typeVal.length==0) {
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
        typeOption = 0;
      }else if(typeVal[0] == "All" ){
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
      }
      if (locationVal.length==0) {
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
        locationOption = 0;
      }else if(locationVal[0] == "All" ){
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
      }

      // console.log("status value: "+statusVal);
      // console.log("agent value: "+agentVal);
      // console.log("types value: "+typeVal);
      // console.log("location value: "+locationVal);

      var page = $('#hidden_page').val();

      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/save-filters',
            data : {
              statusVal:statusVal,
              statusOption:statusOption,
              agentVal:agentVal,
              agentOption:agentOption,
              emailVal:emailVal,
              typeVal:typeVal,
              typeOption:typeOption,
              locationVal:locationVal,
              locationOption:locationOption,
              fromDate:fromDate,
              toDate: toDate,
              dailyOption: dailyOption,
              filterfields: filterfields,
              searchInput: searchInput
            },
            // dataType:"json",
            success:function(data){
                console.log(data);

            
            },error:function(data){
                // alert("Error");
                alert(data.responseText);
                console.log('search record error');
            }
      });
      
    }
    function myfun(){
     // Write your business logic here
        console.log('hello');
        alert('slam');
    }
    // window.removeEventListener("beforeunload");

    $('#filter').click(function(){
      var from_date = $('#datepicker').val();
      var to_date = $('#datepicker2').val();
      if(from_date != '' &&  to_date != '')
      {
        fetch_data(from_date, to_date);
      }
      else
      {
      alert('Both Date is required');
      }
    });
    // end filter
   

    $('#refresh').click(function(){
      $('#datepicker').val('');
      $('#datepicker2').val('');
      $('#agentInput').val('');
      $('#statusInput').val('');
      $('#emailInput').val('');
      $('#locationInput').val('');
      $('#typeInput').val('');
      $('#searchInput').val('');
      $('#dailyInput').val('');

      $('#agentInput').find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
      $('#statusInput').find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
      $('#typeInput').find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
      $('#locationInput').find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
            

      // $('.loading-overlay').addClass('is-active');
      // }
      // saveFilters();
      // $("#body").load(document.URL + "#body");

      fetch_data();

    });
    // end refresh


    // datepicker

    $( function() {
      $( "#datepicker" ).datepicker({
        // minDate:0,
        onSelect:function(dateText, inst) {
          $('.loading-overlay').addClass('is-active');

          searchField();   
          // alert('change datepicker');
          $(".datepicker2").prop("readonly", false);
          // $(".datepicker2").attr('id', 'datepicker2');
          // $( "#datepicker2" ).datepicker( "option", "disabled", true );
          $("#datepicker2").prop('disabled', false);
          
          $("#datepicker2").datepicker("option","minDate",
          $("#datepicker").datepicker("getDate"));

        },
        dateFormat:'dd/mm/yy',
        firstDay: 1
      });
    });
    $( function() {
      $( "#datepicker2" ).datepicker({
        // minDate:0,
        onSelect:function(dateText, inst) {
          searchField();   
          // alert('change datepicker2');

        },
        dateFormat:'dd/mm/yy',
        firstDay: 1,
      });
    });

    // end datepicker

    $("#datepicker").change(function(){
      searchField();
      // alert('change datepicker 3');

    });
    $(window).on('load', function() {
      // code here
      // $(".selectpicker").change(searchField);
      searchField();
      // onChangeSearchRecord();

    });

    $(".selectpicker").change(function () {

      // $('#agentInput').on('change', function(){
        
        // var thisObj = $("#agentInput");
        // console.log(thisObj);
        // var isAllSelected = thisObj.find('option[value="All"]').prop('selected');
        // var lastAllSelected = $("#agentInput").data('all');
        // var selectedOptions = (thisObj.val())?thisObj.val():[];
        // var allOptionsLength = thisObj.find('option[value!="All"]').length;

        // console.log(selectedOptions);
        //  var selectedOptionsLength = selectedOptions.length;

        // if(isAllSelected == lastAllSelected){

        // if($.inArray("All", selectedOptions) >= 0){
        //   selectedOptionsLength -= 1;      
        // }
              
        //   if(allOptionsLength <= selectedOptionsLength){
          
        //   thisObj.find('option[value="All"]').prop('selected', true).parent().selectpicker('refresh');
        //   isAllSelected = true;
        //   }else{       
        //     thisObj.find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
        //     isAllSelected = false;
        //   }
          
        // }else{   		
        //   thisObj.find('option').prop('selected', isAllSelected).parent().selectpicker('refresh');
        // }

        // $("#agentInput").data('all', isAllSelected);

      // });


      onChangeSearchRecord();
      
    });
    // $(document).ready(function () {
    //   searchField();
      
    // })
      // $(".selectpicker").on('click',function() {
        
      //   var val = $(this).val();
      //   // console.log("change");
      //   // $(".selectpicker").addClass('selectOptions');
      //   alert('change selectpicker ');
      //   // searchField();
      // });


    // $( window ).on( "load", function() {
    //   alert( "window loaded" );
    // });


    // $(".selectOptions").change(function(fn){
    // // $("#agentInput").on('change',function() {
    //   var val = $(this).val();
    //   // console.log("change");
    //   // $(".selectpicker").addClass('selectOptions');
    //   alert('change selectpicker ');
    //   // searchField();
    // });



    // search record script
    $(".searchField").on("keyup", function() {
      searchField();
      // alert('keyup seachfield');

    });

    
    // end searchfield method

    $("#viewCompeletedBtn").click(function (e) {
        
      viewCompeleted();

        e.preventDefault();
    });

    function viewCompeleted() {
      var statusVal = 'Customer';
      var agentVal = {!! json_encode(Auth()->user()->name) !!};
      var emailVal = '';
      var locationVal = '';
      var typeVal = '';
      var fromDate = '' ;
      var toDate = '' ;
      var dailyVal = '' ;
      
      var filterfields = $(".filterField:checked").map(function() {
          return this.id;
        }).toArray();
      var searchInput = $("#searchInput").val() ?? '' ;
      
      console.log(agentVal);

      statusVal = ['Customer'];
      agentVal = [agentVal];
      typeVal = [];
      locationVal = [];
      // typeVal = [];

      $('#statusInput').val(statusVal[0]);
      $('#agentInput').val(agentVal[0]);

      agentOption = 1;
      statusOption = 1;
      typeOption = 1;
      locationOption = 1;
      dailyOption = 1;

      if (dailyVal == '' || dailyVal == null ) {
          dailyOption = 0;
        }

      if (agentVal[0] == "admin" ) {
        agentOption = 0;
      }

      if (typeVal.length==0) {
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
        typeOption = 0;
      }else if(typeVal[0] == "All" ){
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
      }
      if (locationVal.length==0) {
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
        locationOption = 0;
      }else if(locationVal[0] == "All" ){
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
      }

      // console.log("status value: "+statusVal);
      // console.log("agent value: "+agentVal);
      // console.log("types value: "+typeVal);
      // console.log("location value: "+locationVal);

      var page = $('#hidden_page').val();


      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/search-records?page='+ page,
            data : {
              statusVal:statusVal,
              statusOption:statusOption,
              agentVal:agentVal,
              agentOption:agentOption,
              emailVal:emailVal,
              typeVal:typeVal,
              typeOption:typeOption,
              locationVal:locationVal,
              locationOption:locationOption,
              fromDate:fromDate,
              toDate: toDate,
              dailyOption: dailyOption,
              filterfields: filterfields,
              searchInput: searchInput
              
            },
            // dataType:"json",
            success:function(data){
                // console.log(data);
                // console.log(data.length);
                var currentRecord = data.length;
                var totalRecord = 0;
                $('tbody').html('');
                $('tbody').html(data);
                // var countRecords = $('#countRecords').val();
                var html = '';
                // if ( parseInt(currentRecord) > parseInt(countRecords)) {

                  // $("#countRecords").val(currentRecord);
                  console.log('data added');
                // }
                // $("#message_success").show();
                // setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
            },error:function(data){
                // alert("Error");
                alert(data.responseText);

                console.log('search record error');
            }
      });
      
    }
    // view completed tasks

    $("#viewDailyTasks").click(function (e) {
        
        viewDailyTasks();
  
          e.preventDefault();
    });

    function viewDailyTasks() {
      var statusVal = '';
      var agentVal = {!! json_encode(Auth()->user()->name) !!};
      var emailVal = '';
      var locationVal = '';
      var typeVal = '';
      var fromDate = '' ;
      var toDate = '' ;
      var dailyVal = $('#dailyInput').val() ?? '' ;

      var filterfields = $(".filterField:checked").map(function() {
          return this.id;
        }).toArray();
        var searchInput = $("#searchInput").val() ?? '' ;
        
      
      console.log(agentVal);

      statusVal = [];
      agentVal = [agentVal];
      typeVal = [];
      locationVal = [];
      // typeVal = [];

      $('#dailyInput').val("1");

      agentOption = 1;
      statusOption = 1;
      typeOption = 1;
      locationOption = 1;
      dailyOption = 1;

      // if (dailyVal == '' || dailyVal == null ) {
      //     dailyOption = 0;
      //   }

      
      if (agentVal[0] == "admin" ) {
        agentOption = 0;
      }
      if (statusVal == '' ) {
        // statusOption = 0;
      }
      statuses = {!! json_encode($filterStatuses->toArray()) !!};
        statuses.forEach(element => {
          statusVal.push(element.status);
        });

        var statusIndex1 = statusVal.indexOf("Not Qualified");
        var statusIndex2 = statusVal.indexOf("No Answer");

        statusVal.splice(statusIndex1, 1);
        statusVal.splice(statusIndex2, 1);

        console.log(statusVal);

      if (typeVal.length==0) {
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
        typeOption = 0;
      }else if(typeVal[0] == "All" ){
        bTypes = {!! json_encode($filterbTypes->toArray()) !!};
        bTypes.forEach(element => {
          typeVal.push(element.bType);
        });
      }
      if (locationVal.length==0) {
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
        locationOption = 0;
      }else if(locationVal[0] == "All" ){
        locations = {!! json_encode($filterlocations->toArray()) !!};
        locations.forEach(element => {
          locationVal.push(element.location);
        });
      }

      console.log("status value: "+statusVal);
      console.log("agent value: "+agentVal);
      console.log("types value: "+typeVal);
      console.log("location value: "+locationVal);
      console.log("daily value: "+dailyVal);
      console.log("daily option: "+dailyOption);
      console.log("status option: "+statusOption);
      console.log("agent option: "+agentOption);
      console.log("type option: "+typeOption);
      console.log("location option: "+locationOption);
     
      var page = $('#hidden_page').val();







      $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/search-records?page='+ page,
            data : {
              statusVal:statusVal,
              statusOption:statusOption,
              agentVal:agentVal,
              agentOption:agentOption,
              emailVal:emailVal,
              typeVal:typeVal,
              typeOption:typeOption,
              locationVal:locationVal,
              locationOption:locationOption,
              fromDate:fromDate,
              toDate: toDate,
              dailyOption: dailyOption,
              filterfields: filterfields,
              searchInput: searchInput

            },
            // dataType:"json",
            success:function(data){
                // console.log(data);
                // console.log(data.length);
                $('tbody').html('');
                $('tbody').html(data);
                var totalRecord = 0;
                var currentRecord = data.length;
                // var countRecords = $('#countRecords').val();
                var html = '';
                // if ( parseInt(currentRecord) > parseInt(countRecords)) {

                  // $("#countRecords").val(currentRecord);
                  console.log('daily record  added');
                // }
                // $("#message_success").show();
                // setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
            },error:function(data){
                alert(data.responseText);
                // console.log('daily record error');
            }
      });
      
    }
    // end daily tasks
    

    // end search record script

    


  </script>


  {{-- end range filter --}}

  <script>
    $(document).ready(function(){
      // alert('check');
      $("#recordTable tbody td,#recordTable tbody th").css('width','30px');
      $('#status').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.statusTd').addClass('activeFilter');

          }else{
            // console.log('not checked');
            $('.statusTd').removeClass('activeFilter');

          }
      });
      // end status 
      $('#agent').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.agentTd').addClass('activeFilter');

          }else{
            // console.log('not checked');
            $('.agentTd').removeClass('activeFilter');

          }
      });
      // end agent 
      $('#bussiness_name').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.bNameTd').addClass('activeFilter');

          }else{
            // console.log('not checked');
            $('.bNameTd').removeClass('activeFilter');

          }
      });
      // end bName
      $('#phone').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.phoneTd').addClass('activeFilter');

          }else{
            // console.log('not checked');
            $('.phoneTd').removeClass('activeFilter');

          }
      });
      // end phone

      $('#cellphone').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.cellphoneTd').addClass('activeFilter');
          }else{
            // console.log('not checked');
            $('.cellphoneTd').removeClass('activeFilter');

          }
      });
      // end cellphone

      $('#bussiness_type').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // alert('checked');
            $('.typeTd').addClass('activeFilter');

          }else{
            // alert('not checked');
            $('.typeTd').removeClass('activeFilter');

          }
      });
      // end type
      $('#email').mousedown(function() {
          if (!$(this).is(':checked')) {
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // alert('checked');
            $('.emailTd').addClass('activeFilter');

          }else{
            // alert('not checked');
            $('.emailTd').removeClass('activeFilter');

          }
      });
      // end email
      $('#location').mousedown(function() {
          if (!$(this).is(':checked')) {
            // alert('check');
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.locationTd').addClass('activeFilter');

          }else{
            // alert('not check');

            // console.log('not checked');
            $('.locationTd').removeClass('activeFilter');

          }
      });
      // end location

      $('#offer').mousedown(function() {
          if (!$(this).is(':checked')) {
            // alert('check');
            // this.checked = confirm("Are you sure?");
            $(this).trigger("change");
            // console.log('checked');
            $('.offerTd').addClass('activeFilter');

          }else{
            // alert('not check');

            // console.log('not checked');
            $('.offerTd').removeClass('activeFilter');

          }
      });
      // end offer filter

      // all search script
      $("#searchInput").on("keyup", function() {
        // $('.loading-overlay').addClass('is-active');

        // var value = $(this).val().toLowerCase();
        // $("#recordTable tr").filter(function() {
        //   $(this).toggle($(this).find(".activeFilter").text().toLowerCase().indexOf(value) > -1)
        // });
        searchField();


      }); //end of search input

      $(".filterField").change(function(){
        var value = $("#searchInput").val().toLowerCase();
        $("#recordTable tr").filter(function() {
          $(this).toggle($(this).find(".activeFilter").text().toLowerCase().indexOf(value) > -1)
        });
      });

      // status field search
      // $("#statusInput").on("keyup", function() {
      //   var value = $(this).val().toLowerCase();
      //   $("#recordTable tr").filter(function() {
      //     $(this).toggle($(this).find(".statusTd").text().toLowerCase().indexOf(value) > -1)
      //   });
      // });

      // agent field search

      // $("#agentInput").on("keyup", function() {
      //   var value = $(this).val().toLowerCase();
      //   $("#recordTable tr").filter(function() {
      //     $(this).toggle($(this).find(".agentTd").text().toLowerCase().indexOf(value) > -1)
      //   });
      // });

      // bussiness type field search

      // $("#typeInput").on("keyup", function() {
      //   var value = $(this).val().toLowerCase();
      //   $("#recordTable tr").filter(function() {
      //     $(this).toggle($(this).find(".typeTd").text().toLowerCase().indexOf(value) > -1)
      //   });
      // });

      // location field search

      // $("#locationInput").on("keyup", function() {
      //   var value = $(this).val().toLowerCase();
      //   $("#recordTable tr").filter(function() {
      //     $(this).toggle($(this).find(".locationTd").text().toLowerCase().indexOf(value) > -1)
      //   });
      // });

      // email field search

      // $("#emailInput").on("keyup", function() {
      //   var value = $(this).val().toLowerCase();
      //   $("#recordTable tr").filter(function() {
      //     $(this).toggle($(this).find(".emailTd").text().toLowerCase().indexOf(value) > -1)
      //   });
      // });


    });
    // end search filter

    
  </script>

  <script>
    $(document).ready(function(){
      
      $( "#recordTable tbody" ).on( "click", ".delete-btn", function() {
      
        var id =$(this).attr('data-id');
        // console.log("id :"+id);
        if (!confirm("Do you want to delete")){
            // console.log("not confirm");
            return false;
        }else{
            // console.log("confirm");
            // window.location.href = `{{ url('/admin/view-florists')}}`;
            window.location.href = `{{ url('/delete-record/${id}')}}`;
        }
      }); //end delete script

      // $( "#recordTable tbody" ).on( "click", "td", function() {
      //   var id =$(this).attr('data-id');
      //   var field =$(this).attr('data-field');
      //   console.log("id: "+id);
      //   console.log("field: "+field);
      //   if (  field !== undefined) {
      //       if (!confirm("Do you want to export this field")){
      //         // console.log("not confirm");

      //         return false;
      //       }else{
      //         // console.log("confirm");
      //         // window.location.href = `{{ url('/admin/view-florists')}}`;
      //         window.location.href = `{{ url('/field/export/${id}/${field}')}}`;

      //       }
          
      //   }else{
          
      //   }
      // });


    });
  </script>

  <input type="hidden" name="countRecords" value="{{count($allRecords)}}" id="countRecords">
  {{-- <input type="hidden" name="totalRecordsInput" value="{{$records}}" id="totalRecordsInput"> --}}
  
  {{-- @if (Auth()->user()->admin == 1) --}}
      
    {{-- <script>
      $(document).ready(function () {

          var statusActive = '';
          var agentActive = '';
          var calendarActive = '';
          var timeActive = '';
          var records = {!! json_encode($allRecords->toArray()) !!};
          

          window.setInterval(function(){ // Set interval for checking
          var admin = 1;
          // console.log("orders: "+totalOrder);
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type : 'POST',
            url : '/get-records',
            data : {admin:admin},
            success:function(data){
                // console.log(data.allRecords);
                // console.log(data.length);
                var totalRecord = 0;
                var currentRecord = data.allRecords.length;
                var countRecords = $('#countRecords').val();

                // console.log("current record: "+currentRecord);
                // console.log("count record: "+countRecords);
                // console.log(records);
                var checkUpdate = 0;
                var html = '';
                if (currentRecord == countRecords) {
                  for (let index = 0; index < data.allRecords.length; index++) {
                    const element = data.allRecords[index];
                    if (element.updated_at != records[index].updated_at) {
                      checkUpdate = checkUpdate + 1;
                    }
                    
                  }
                  
                }
                // console.log("check updated :"+checkUpdate);
                // $('tboday').html(data.records);

                if ( parseInt(currentRecord) != parseInt(countRecords) || checkUpdate > 0 ) {
                  
                  searchField();
                  
                  $("#countRecords").val(data.allRecords.length);
                  
                  $('#totalRecord').html(data.allRecords.length);
                  records = data.allRecords;
                  // $("#totalRecordInput").val(data);
                  console.log('new data added');
                }
                // records = data;

                // console.log('check new record');


                // $("#message_success").show();
                // setTimeout(function() { $("#message_success").fadeOut('slow'); }, 2000);
            },error:function(data){
                // alert(data.responseText);

                console.log('check new record error');
            }
          });
                            
      }, 1000);
      });
    </script> --}}

  {{-- @endif --}}

    {{-- start pagination script --}}

    <script>
      $(document).ready(function () {
        // var statusVal = $('#statusInput').val();
        // var agentVal = $('#agentInput').val();
        // var emailVal = $('#emailInput').val();
        // var locationVal = $('#locationInput').val();
        // var typeVal = $('#typeInput').val();
        // var fromDate = $('#datepicker').val() ?? '' ;
        // var toDate = $('#datepicker2').val() ?? '' ;
        // var dailyVal = $('#dailyInput').val() ?? '' ;

        // var filterfields = $(".filterField:checked").map(function() {
        //     return this.id;
        //   }).toArray();
        // var searchInput = $("#searchInput").val() ?? '' ;
          
        // if (dailyVal != '' || fromDate != '' || searchInput != '' || agentVal.length !=0 || statusVal.length !=0 || locationVal.length !=0 || typeVal.length !=0 || agentVal.length !=0 ) {
          
          $(document).on('click', '.pagination a', function (event) {
              event.preventDefault();
              $('.loading-overlay').addClass('is-active');
              var statusVal = $('#statusInput').val();
              var agentVal = $('#agentInput').val();
              var emailVal = $('#emailInput').val();
              var locationVal = $('#locationInput').val();
              var typeVal = $('#typeInput').val();
              var fromDate = $('#datepicker').val() ?? '' ;
              var toDate = $('#datepicker2').val() ?? '' ;
              var dailyVal = $('#dailyInput').val() ?? '' ;

              var filterfields = $(".filterField:checked").map(function() {
                  return this.id;
                }).toArray();
                var searchInput = $("#searchInput").val() ?? '' ;
                

              // console.log('this is call work');
              agentOption = 1;
              statusOption = 1;
              typeOption = 1;
              locationOption = 1;
              dailyOption = 1;

              if (dailyVal == '' || dailyVal == null ) {
                  dailyOption = 0;
                }

              if (agentVal.length==0) {
                // console.log('length 0');
                agents = {!! json_encode($filterAgents->toArray()) !!};
                agents.forEach(element => {
                  agentVal.push(element.name);
                });
                agentOption = 0;
              }else if(agentVal[0] == "All" ){
                agents = {!! json_encode($filterAgents->toArray()) !!};
                agents.forEach(element => {
                  agentVal.push(element.name);
                });
              }
              // console.log(agentVal[0]);

              if (statusVal.length==0) {
                statuses = {!! json_encode($filterStatuses->toArray()) !!};
                statuses.forEach(element => {
                  statusVal.push(element.status);
                });
                statusOption = 0;
              }else if(statusVal[0] == "All" ){
                statuses = {!! json_encode($filterStatuses->toArray()) !!};
                statuses.forEach(element => {
                  statusVal.push(element.status);
                });
              }

              if (typeVal.length==0) {
                bTypes = {!! json_encode($filterbTypes->toArray()) !!};
                bTypes.forEach(element => {
                  typeVal.push(element.bType);
                });
                typeOption = 0;
              }else if(typeVal[0] == "All" ){
                bTypes = {!! json_encode($filterbTypes->toArray()) !!};
                bTypes.forEach(element => {
                  typeVal.push(element.bType);
                });
              }
              if (locationVal.length==0) {
                locations = {!! json_encode($filterlocations->toArray()) !!};
                locations.forEach(element => {
                  locationVal.push(element.location);
                });
                locationOption = 0;
              }else if(locationVal[0] == "All" ){
                locations = {!! json_encode($filterlocations->toArray()) !!};
                locations.forEach(element => {
                  locationVal.push(element.location);
                });
              }


              var page = $(this).attr('href').split('page=')[1];
              var getUrl = $(this).attr('href');
              // console.log(url);
              var url = getUrl+'&agentVal='+agentVal+'&statusVal='+statusVal+'&typeVal='+typeVal+'&locationVal='+locationVal+'&dailyVal='+dailyVal+'&agentOption='+agentOption+'&locationOption='+locationOption+'&statusOption='+statusOption+'&typeOption='+typeOption+'&agentOption='+agentOption+'&dailyOption='+dailyOption+'&fromDate='+fromDate+'&toDate='+toDate+'&searchInput='+searchInput+'&filterfields='+filterfields;
              // window.location.href = url;


              console.log(page);

              $('#hidden_page').val(page);

              $('li').removeClass('active');
              $(this).parent().addClass('active');
              
              searchField();

                sort_type = 'asc';
                sort_by = 'id';
                // $.ajax({
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     },
                //     type : 'POST',
                //     url: "/pagination/fetch_data?page=" + page + "&sortby=" + sort_by + "&sorttype=" + sort_type,
                    
                //     // url : '/pagination/fetch_data?page='+page,
                //     data : {
                //         page:page,
                //         sort_by: sort_by,
                //         sort_type:sort_type
                //     },
                //     // dataType:"json",
                //     success:function(data){
                //         // console.log(data);
                //         // console.log(data.length);
                //         $('.loading-overlay').removeClass('is-active');
                //         $('tbody').html('');
                //         $('tbody').html(data);

                //         // var currentRecord = data.length;
                //         var totalRecord = 0;
                //         // var countRecords = $('#countRecords').val();
                //         var html = '';

                //     },error:function(data){
                //         // alert("Error");
                //         alert(data.responseText);
                //         console.log('search record error');
                //     }
                // });

          });

        // }
        

      });
    </script>

    {{-- end pagination script --}}


  <script>
    $(document).ready(function () {
        // alert('checl');
        $('.sidebar').addClass('d-none');
        // $('.sidebar').css("display",'none');
        $('.main-panel').css('width','100%');
        
        // $('.navbar-nav nav-item').removeClass('d-none');
        // $('.navbar-nav .nav-item').css("display",'block');


        $('#menuBtn').click(function (e) {
        //    alert('check'); 
            $('.sidebar').addClass('d-none');
            $('.sidebar').css("display",'block');

            $('#menuBtn').addClass('d-none');
            $('#menuBtn').css("display",'none');

            $('#crosMenuBtn').removeClass('d-none');
            $('#crosMenuBtn').css("display",'block');

            $('.main-panel').css('width','100%');


        });
        
        $('#crosMenuBtn').click(function (e) {
        //    alert('check'); 
            $('.sidebar').removeClass('d-none');
            $('.sidebar').css("display",'block');

            $('#menuBtn').removeClass('d-none');
            $('#menuBtn').css("display",'block');

            $('#crosMenuBtn').addClass('d-none');
            $('#crossMenuBtn').css("display",'none');

            $('.main-panel').css('width','calc(100% - 270px)');
        });
        
    });
  </script>




  <script type="text/javascript">
    $(document).ready(function () {


        $('#master').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".sub_chk").prop('checked', true);  
         } else {  
            $(".sub_chk").prop('checked',false);  
         }  
        });


        $('.delete_all').on('click', function(e) {

            $('.loading-overlay').addClass('is-active');
            
            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  


            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  


                var check = confirm("Are you sure you want to delete this record?");  
                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                // alert(data['success']);
                                $('.delete-record-alert').removeClass('d-none');
                                $('.loading-overlay').removeClass('is-active');

                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });


        // $('[data-toggle=confirmation]').confirmation({
        //     rootSelector: '[data-toggle=confirmation]',
        //     onConfirm: function (event, element) {
        //         element.trigger('confirm');
        //     }
        // });


        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();


            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });

            return false;
        });
    });
</script>
<script>

  
  $(document).ready(function () {
    $('select').selectpicker();


    $('#agentInput').on('change', function(){

        var thisObj = $(this);
        console.log(thisObj);
        var isAllSelected = thisObj.find('option[value="All"]').prop('selected');
        var lastAllSelected = $(this).data('all');
        var selectedOptions = (thisObj.val())?thisObj.val():[];
        var allOptionsLength = thisObj.find('option[value!="All"]').length;
        
        console.log(selectedOptions);
          var selectedOptionsLength = selectedOptions.length;
        
        if(isAllSelected == lastAllSelected){
        
        if($.inArray("All", selectedOptions) >= 0){
          selectedOptionsLength -= 1;      
        }
              
          if(allOptionsLength <= selectedOptionsLength){
          
          thisObj.find('option[value="All"]').prop('selected', true).parent().selectpicker('refresh');
          isAllSelected = true;
          }else{       
            thisObj.find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
            isAllSelected = false;
          }
          
        }else{   		
          thisObj.find('option').prop('selected', isAllSelected).parent().selectpicker('refresh');
        }
      
        $(this).data('all', isAllSelected);

    });

    // end agentInput

    // $('#statusInput').on('change', function(){
    //   // $('.loading-overlay').addClass('is-active');

    //     var thisObj = $(this);
    //     var isAllSelected = thisObj.find('option[value="All"]').prop('selected');
    //     var lastAllSelected = $(this).data('all');
    //     var selectedOptions = (thisObj.val())?thisObj.val():[];
    //       var allOptionsLength = thisObj.find('option[value!="All"]').length;
        
    //     console.log(selectedOptions);
    //       var selectedOptionsLength = selectedOptions.length;
        
    //     if(isAllSelected == lastAllSelected){
        
    //     if($.inArray("All", selectedOptions) >= 0){
    //       selectedOptionsLength -= 1;      
    //     }
              
    //       if(allOptionsLength <= selectedOptionsLength){
          
    //       thisObj.find('option[value="All"]').prop('selected', true).parent().selectpicker('refresh');
    //       isAllSelected = true;
    //       }else{       
    //         thisObj.find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
    //         isAllSelected = false;
    //       }
          
    //     }else{   		
    //       thisObj.find('option').prop('selected', isAllSelected).parent().selectpicker('refresh');
    //     }
      
    //     $(this).data('all', isAllSelected);
    // }).trigger('change');

    // end status
    
    // $('#locationInput').on('change', function(){
    //   // $('.loading-overlay').addClass('is-active');

    //     var thisObj = $(this);
    //     var isAllSelected = thisObj.find('option[value="All"]').prop('selected');
    //     var lastAllSelected = $(this).data('all');
    //     var selectedOptions = (thisObj.val())?thisObj.val():[];
    //       var allOptionsLength = thisObj.find('option[value!="All"]').length;
        
    //     console.log(selectedOptions);
    //       var selectedOptionsLength = selectedOptions.length;
        
    //     if(isAllSelected == lastAllSelected){
        
    //     if($.inArray("All", selectedOptions) >= 0){
    //       selectedOptionsLength -= 1;      
    //     }
              
    //       if(allOptionsLength <= selectedOptionsLength){
          
    //       thisObj.find('option[value="All"]').prop('selected', true).parent().selectpicker('refresh');
    //       isAllSelected = true;
    //       }else{       
    //         thisObj.find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
    //         isAllSelected = false;
    //       }
          
    //     }else{   		
    //       thisObj.find('option').prop('selected', isAllSelected).parent().selectpicker('refresh');
    //     }
      
    //     $(this).data('all', isAllSelected);
    // }).trigger('change');

    // end location

    // $('#typeInput').on('change', function(){
    //   // $('.loading-overlay').addClass('is-active');

    //     var thisObj = $(this);
    //     var isAllSelected = thisObj.find('option[value="All"]').prop('selected');
    //     var lastAllSelected = $(this).data('all');
    //     var selectedOptions = (thisObj.val())?thisObj.val():[];
    //       var allOptionsLength = thisObj.find('option[value!="All"]').length;
        
    //     console.log(selectedOptions);
    //       var selectedOptionsLength = selectedOptions.length;
        
    //     if(isAllSelected == lastAllSelected){
        
    //     if($.inArray("All", selectedOptions) >= 0){
    //       selectedOptionsLength -= 1;      
    //     }
              
    //       if(allOptionsLength <= selectedOptionsLength){
          
    //       thisObj.find('option[value="All"]').prop('selected', true).parent().selectpicker('refresh');
    //       isAllSelected = true;
    //       }else{       
    //         thisObj.find('option[value="All"]').prop('selected', false).parent().selectpicker('refresh');
    //         isAllSelected = false;
    //       }
          
    //     }else{   		
    //       thisObj.find('option').prop('selected', isAllSelected).parent().selectpicker('refresh');
    //     }
      
    //     $(this).data('all', isAllSelected);
    // }).trigger('change');

    // end type input

  });

  // clear localstorage

  // window.localStorage.clear();
  localStorage.removeItem('bName');
  localStorage.removeItem('email');
  localStorage.removeItem('cellphone');
  localStorage.removeItem('website');
  localStorage.removeItem('price');
  localStorage.removeItem('valuation');
  localStorage.removeItem('datepicker');
  localStorage.removeItem('ownerName');
  localStorage.removeItem('hours');
  localStorage.removeItem('mints');
  localStorage.removeItem('phone');
  localStorage.removeItem('selectBType');
  localStorage.removeItem('selectLocation');
  localStorage.removeItem('selectStatus');
  localStorage.removeItem('selectOffer');





  let parent = document.querySelector('.sticky').parentElement;

  while (parent) {
      const hasOverflow = getComputedStyle(parent).overflow;
      if (hasOverflow !== 'visible') {
        console.log('has parent');
          console.log(hasOverflow, parent);
      }
      parent = parent.parentElement;
  }

  // start send notification 

        // $(document).ready(function () {
        //     var records = {!! json_encode(Session::get('records')->toArray()) !!};
        //     var currentUser = {!! json_encode(Auth()->user()->name) !!};
        //     console.log(records);
        //     window.setInterval(function(){ // Set interval for checking
        //        var date = new Date(); // Create a Date object to find out what time it is
        //        var currentDate = ("0" + (date.getDate())).slice(-2) + '/' + ("0" + (date.getMonth() + 1)).slice(-2) + '/' + date.getFullYear();
        //           console.log("current date: "+currentDate);
        //           var time = ("0" + (date.getHours())).slice(-2) +":"+ ("0" + (date.getMinutes())).slice(-2);
        //           console.log('curret time: '+time);

        //        var domyDate = '8-05-2021';
        //        var count = 0;
        //        var countRecord = 0;
        //        records.forEach(record => {
        //               console.log("record calender: "+record.calender);
        //               console.log("record time: "+record.time);
        //               countRecord = countRecord +1;
        //               console.log(countRecord);
        //             if (record.agent == currentUser) {
                      
        //               console.log('curret user: '+currentUser);

        //               if (record.status == "To Call" || record.status == "Call Again" ) {
        //                 console.log('status pass: '+record.status);
                        
        //                   if ( record.calender === currentDate ) {//order.delivery_date
        //                       console.log('date pass:'+record.calender);
                                  
        //                       //  var minHour = parseInt(record.fromHour) - 1; //e.g 14-1 = 13 / 1 hour before delivery time
                                

        //                         if(time == record.time){ // Check the time
        //                         console.log('user time: '+time);
        //                               // Do stuff
        //                               // alert('time match');
        //                               console.log('send notification');
        //                               $.ajax({
        //                                 headers: {
        //                                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                                 },
        //                                 type : 'post',
        //                                 url : '/send-notification',
        //                                 data : {agent:record.agent,record_id:record.id},
        //                                 success:function(data){
        //                                   var notifications = data.notifications;
        //                                   var latest = data.latest;
        //                                   console.log(latest);
        //                                   var dataJson = JSON.parse(latest.data);
        //                                   console.log(dataJson.record);

        //                                   var html = '';
        //                                   var notificationCount = 0;
        //                                   notifications.forEach(item => {
        //                                     notificationCount = notificationCount + 1;
        //                                     html = html + `
        //                                     <a class="dropdown-item preview-item" data-id="${item.id}">
                                                
        //                                         <div class="preview-item-content flex-grow py-2">
        //                                             <p class="preview-subject ellipsis font-weight-medium text-dark"> ${item.data['record']} </p>
        //                                             <p class="font-weight-light small-text"> ${item.data['data']} at ${item.data['time']} ${item.data['date']}  </p>
        //                                         </div>
                    
        //                                     </a>
        //                                     `;
        //                                   });
        //                                   $("#notification-list").html(html);
        //                                   $(".notificationCount").html(notificationCount);

        //                                   alert('Now its your call time!\n'+dataJson.record+'\n'+dataJson.data+" at "+dataJson.time +" "+ dataJson.date );
                                          
        //                                 },error:function(){
        //                                     alert("Error");
        //                                 }
        //                               });
        //                         }
                                  
        //                   } 
        //               }
                      
        //             }
        //             console.log('-----------');
        //        });//end foreach
        //     }, 30000); // Repeat every 60000 milliseconds (1 minute)
            
        //     // alert('Now its your call time!\n'+'Test Record '+'\n'+' its your call time at 22:10 02/0/2021' );
            
        // });

        $(document).ready(function () {
            var records = {!! json_encode(Session::get('records')->toArray()) !!};
            var currentUser = {!! json_encode(Auth()->user()->name) !!};
            console.log(records);
            window.setInterval(function(){ // Set interval for checking
               var date = new Date(); // Create a Date object to find out what time it is
               var currentDate = ("0" + (date.getDate())).slice(-2) + '/' + ("0" + (date.getMonth() + 1)).slice(-2) + '/' + date.getFullYear();
                  console.log("current date: "+currentDate);
                  var time = ("0" + (date.getHours())).slice(-2) +":"+ ("0" + (date.getMinutes())).slice(-2);
                  console.log('curret time: '+time);

                var domyDate = '8-05-2021';
                var count = 0;
                var countRecord = 0;
                
                console.log('send notification');
                $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : '/send-notification',
                  data : {agent:currentUser,time:time,currentDate:currentDate},
                  success:function(data){
                    console.log(data.msg);
                    console.log("count: "+data.count);

                    if (data.msg == 'Ok' ) {
                        var notifications = data.notifications;
                        var latest = data.latest;
                        console.log(latest);
                        // var dataJson = JSON.parse(latest.data);
                        // console.log(dataJson.record);

                        var html = '';
                        var notificationCount = 0;
                        notifications.forEach(item => {
                          notificationCount = notificationCount + 1;
                          html = html + `
                          <a class="dropdown-item preview-item" data-id="${item.id}" data-recordId ="${item.data['recordId']} ">
                              
                              <div class="preview-item-content flex-grow py-2">
                                  <p class="preview-subject ellipsis font-weight-medium text-dark"> ${item.data['record']} </p>
                                  <p class="font-weight-light small-text"> ${item.data['data']} at ${item.data['time']} ${item.data['date']}  </p>
                              </div>

                          </a>
                          `;
                        });
                        $("#notification-list").html(html);
                        $(".notificationCount").html(notificationCount);

                        latest.forEach(element => {
                          console.log(element);
                        var dataJson = JSON.parse(element.data);

                          // alert('Now its your call time!\n'+dataJson.record+'\n'+dataJson.data+" at "+dataJson.time +" "+ dataJson.date );
                          if (confirm('Now its your call time!\n'+dataJson.record+'\n'+dataJson.data+" at "+dataJson.time +" "+ dataJson.date )) {
                              window.location.href = `{{url('/edit-record/${dataJson.recordId}')}}`;
                              console.log('presed ok');
                          } else {
                            console.log("You pressed Cancel!");
                          }  
                        });
                            
                      
                    }
                  },error:function(data){
                      alert(data.responseText);

                      // alert("Error");
                  }
                });

                //end foreach
            }, 35000); // Repeat every 60000 milliseconds (1 minute)
            
            
        });

  // end send notification

  $(document).ready(function () {

    

      // alert('check');
    // $('.preview-item').click(function (e) { 
    $('#notification-list').on('click', '.preview-item', function (e) {
      var id = $(this).attr('data-id');
      var recordId = $(this).attr('data-recordId');
      
      //  var slug = $(this).attr('data-slug');
      // alert('slug: '+slug);
      console.log("notification id:"+id);
      console.log("record id:"+recordId);

      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type : 'post',
        url : '/mark-as-read',
        data : {id:id},
        success:function(data){
            console.log(data);
            window.location.href = `{{url('/edit-record/${recordId}')}}`;
        },error:function(){
            alert("Mark as read error!");
        }
      });
      e.preventDefault();

    });

  });
  // end of mark as read




  

</script>
</body>

</html>