@extends('admin.layouts.master')
{{-- @section('title','View Orders') --}}
@section('title','Προβολή Παραγγελιών')

@section('content')

   <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
   {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
   
   <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>Προβολή Παραγγελιών</h1>
          {{-- <small>Orders</small> --}}
       </div>
    </section>


    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         <h4>Προβολή Παραγγελιών</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">

                     <table cellspacing="5" cellpadding="5" border="0">
                        <tbody><tr>
                            <td>From date:</td>
                            <td><input type="text" id="datepicker" name="min"></td>
                              
                              <td >
                                 
                              </td>
                        </tr>
                        <tr>
                            <td>To date:</td>
                            <td><input type="text" id="datepicker2" name="max"></td>
                        </tr>
                       </tbody>
                     </table>
                     <div class="row">
                        <div class="col-md-9"></div>

                        <div class="col-md-3">
                           <select name="" class="form-control " id="selectFlorist" style="float: right">
                              <option value="">Select Florist</option>
                              @foreach ($allFlorists as $florist)
                                 <option value="{{$florist->name}}">{{$florist->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <br>

                     

                      <table id="orders_table_id" data-order='[[ 0, "desc" ]]' class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                                <th>
                                 Προβολή Παραγγελιών
                                 {{-- Order ID --}}
                                 </th>
                                <th>
                                 Ημ/νία παραγγελίας
                                 {{-- (m/d/y) --}}
                                 {{-- Order Date --}}
                                 </th>
                                
                                <th>
                                 Όνομα Πελάτη
                                 {{-- Customer Name --}}
                                 </th>
                                @if (Session::get('adminStatus')=="1")
                                <th>
                                   Florist
                                 </th>
                                @endif
                                <th>
                                 Προϊόντα Παραγγελίας
                                 {{-- Ordered Product --}}
                                 </th>
                                <th>
                                 Ποσό
                                 {{-- Order Amount --}}
                                 </th>
                                <th>
                                 Ημ/νία Παράδοσης
                                 {{-- Delivery Date --}}
                                 </th>
                                <th>
                                 Κατάσταση Παραγγελίας
                                 {{-- Order Status --}}
                                 </th>
                                {{-- <th>Payment Method</th> --}}
                                <th>
                                 Εργαλεία
                                 {{-- Actions --}}
                                 </th>
                                 <th style="visibility: hidden">
                                    Date 2
                                    {{-- Order Date --}}
                                 </th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->orderNo }}</td>
                                <td>{{ $order->created_at->format('d/m/Y') }}</td>

                                <td>{{$order->senderName}}</td>
                                @if (Session::get('adminStatus')=="1")
                                <td>{{ $order->florist_name }}</td>
                                @endif
                                <td>
                                    @foreach ($order->orders as $pro)
                                        {{$pro->product_name}}
                                        ({{$pro->product_qty}})
                                        <hr style="height: 2px; margin:0px; padding:0px;">
                                    @endforeach
                                </td>
                                <td>{{$order->grand_total}}€</td>
                                <td>{{$order->delivery_date}}</td>

                                 <td>
                                 @if ($order->order_status == "New")

                                   <span class="badge " style="background-color: green">
                                    Νέα
                                    {{-- {{$order->order_status}} --}}
                                    </span>
                                   @endif
                                   @if ($order->order_status == "In Process")

                                   <span class="badge " style="background-color: rgb(204, 204, 7)">
                                    Σε Επεξεργασία
                                    {{-- {{$order->order_status}} --}}
                                    </span>

                                   @endif
                                   @if ($order->order_status == "Delivered")
                                   <span class="badge " style="background-color: orange">
                                    Παραδόθηκε
                                    {{-- {{$order->order_status}} --}}
                                    </span>

                                   @endif
                                   @if ($order->order_status == "Not Accepted")
                                   <span class="badge " style="background-color: red">
                                    Μη Αποδεκτή
                                    {{-- {{$order->order_status}} --}}
                                    </span>

                                   @endif
                                   @if ($order->order_status == "Cancelled")
                                   <span class="badge " style="background-color: red">
                                    Ακύρωθηκε
                                    {{-- {{$order->order_status}} --}}
                                    </span>

                                 @endif

                                 </td>
                                {{-- <td>{{$order->payment_method}}</td> --}}
                                <td class="center">
                                 <a href="{{url(app()->getLocale().'/admin/delete-order/'.$order->id)}}"  class="btn btn-danger btn-sm delete-btn" data-id="{{$order->id}}">
                                    <i class="fa fa-trash-o"></i>

                                 </a>
                                 <br>
                                    <a href="{{url(app()->getLocale().'/admin/order/'.$order->id)}}"  class="btn btn-primary btn-sm">
                                       Στοιχεία Παραγγελίας
                                       {{-- View Order Details --}}
                                    </a><br>
                                    <a href="{{url(app()->getLocale().'/admin/order-invoice/'.$order->id)}}"  class="btn btn-success btn-sm">
                                       Εκτύπωση Παραγγελίας
                                       {{-- Print Order --}}
                                    </a>
                                    <br>

                                </td>
                                <td style="visibility: hidden">{{ $order->created_at->format('m/d/Y') }}</td>

                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->

   <script>

      $(document).ready(function(){ 
         $(".delete-btn").click(function(){
            var id =$(this).attr('data-id');
            // console.log("id :"+id);
            if (!confirm("Do you want to delete")){
               // console.log("not confirm");
               return false;
            }else{
               // console.log("confirm");
               // window.location.href = `{{ url('/admin/view-florists')}}`;
               window.location.href = `{{ url(app()->getLocale().'/admin/delete-order/${id}')}}`;
            }
         });
      });

      var dataTable;

      $(function() {
         var oTable = $('#orders_table_id').DataTable({
            "oLanguage": {
               "sSearch": "Search"
            },
            "paging":false,

            // initComplete: function() {
            //      var $searchInput = $('div.dataTables_filter input');
            //      $searchInput.unbind();
            //      $searchInput.bind('keyup', function(e) {
            //          if(e.keyCode == 13) {
            //              oTable.search( this.value ).draw();
            //          }
            //      });
            // },
            
            
            
            // "iDisplayLength": -1,
            // "sPaginationType": "full_numbers",

         });

         dataTable = oTable;



         $( "#datepicker" ).datepicker({
            onSelect: function(date) {
            // alert(date);
               minDateFilter = new Date(date).getTime();

               oTable.draw();

            },
            // minDate: allowDate,
            dateFormat:'mm/dd/yy',
            maxDate:'+1m',
         }).keyup(function() {
            minDateFilter = new Date(this.value).getTime();
            // oTable.fnDraw();
            oTable.draw();
         });

         $( "#datepicker2" ).datepicker({
            onSelect: function(date) {
            // alert(date);
            maxDateFilter = new Date(date).getTime();

            oTable.draw();

            },
            // minDate: allowDate,
            dateFormat:'mm/dd/yy',
            maxDate:'+1m',
         }).keyup(function() {
            maxDateFilter = new Date(this.value).getTime();
            // oTable.fnDraw();
            oTable.draw();
         });

         

      });

         // Date range filter
         minDateFilter = "";
         maxDateFilter = "";

         $(document).ready(function () {

            $("#selectFlorist").on('change', function () {
            var val = $(this).val();
            // alert(val);
            // $("#orders_table_id_filter").find("input").val(val).trigger('change');
            // dataTable.draw();

            dataTable.search(val).draw();  

         });


            $.fn.dataTableExt.afnFiltering.push(
               function(oSettings, aData, iDataIndex) {
                  if (typeof aData._date == 'undefined') {
                     console.log(aData[9]);

                     aData._date = new Date(aData[9]).getTime();
                     console.log(aData._date);
                  }

                  if (minDateFilter && !isNaN(minDateFilter)) {
                     if (aData._date < minDateFilter) {
                     return false;
                     }
                  }

                  if (maxDateFilter && !isNaN(maxDateFilter)) {
                     if (aData._date > maxDateFilter) {
                     return false;
                     }
                  }

                  return true;
               }
            );
            
         });

   </script>

   {{-- <script>

      var minDate, maxDate;
   
      // Custom filtering function which will search data in column four between two values
      $(document).ready(function () {
         //  alert('slam');
         // var table = $('#table_id');
         var table = $('#orders_table_id').DataTable({
               "paging":false,
         
         });


         $( "#datepicker" ).datepicker({
            onSelect: function(date) {
            // alert(date);
            table.draw();

            },
            // minDate: allowDate,
            dateFormat:'mm/dd/yy',
            maxDate:'+1m',
         });
         $( "#datepicker2" ).datepicker({
            onSelect: function(date) {
            // alert(date);
            table.draw();

            },
            // minDate: allowDate,
            dateFormat:'mm/dd/yy',
            maxDate:'+1m',
         });

         minDate = $("#datepicker");
         maxDate = $("#datepicker2");
         // minDate = new DateTime($('#min'), {
         //   format: 'MMMM Do YYYY'
         // });
         // maxDate = new DateTime($('#max'), {
         //    format: 'MMMM Do YYYY'
         // });


         $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
               var min = minDate.val();
               var max = maxDate.val();
               
               var date = new Date( data[1] );
               console.log('date');
               console.log(data[1]);
               
               console.log(date);
      
               if (
                  ( min === null && max === null ) ||
                  ( min === null && date <= max ) ||
                  ( min <= date   && max === null ) ||
                  ( min <= date   && date <= max )
               ) {
                  return true;
               }
               return false;
            }
         );

         
      
         // DataTables initialisation
         // var table = $('#table_id').DataTable();
         // Refilter the table
         $('#datepicker, #datepicker2').on('change', function () {
            // alert('check');
            // console.log('check');
         });
      });
   </script> --}}


@endsection
