<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Coupons;
use Session;
use App\Orders;

class CouponsController extends Controller
{
    public function addCoupon(Request $request){

      // dd(Session::get('adminId'));
        if($request->isMethod('post')){
            
            $data = $request->all();
            if ($request->has('expiry_date')) {
                $exipry_date = $data['expiry_date'];
            }else{
                $exipry_date = '';
            }
            
            $coupon = new Coupons;

            if (Session::has('floristSession')) {
              $coupon->florist_id = Session::get('floristId');
            }else{
              if (Session::has('adminId')) {
                # code...
                if (Session::get('adminId') == 'admin' ) {
                   
                  $coupon->florist_id = "a1"; //this is assigned admin id for coupon

                }else{
                  $coupon->florist_id = Session::get('adminId');

                }
              }else{
                return redirect('/florist');
              }
            }
            

            $coupon->coupon_code = $data['coupon_code'];
            $coupon->amount = $data['coupon_amount'];
            $coupon->amount_type = $data['amount_type'];
            $coupon->expiry_date = $exipry_date;
            $coupon->coupon_count = $data['coupon_count'] ?? null ;
     
            $coupon->save();
            
            if (Session::get('adminId') == 'admin' ) {
              # code...
              return redirect(app()->getLocale().'/admin/admin-view-coupons')->with('flash_message_success','Coupon has been added Successfully');

            }else{
              return redirect(app()->getLocale().'/admin/view-coupons')->with('flash_message_success','Coupon has been added Successfully');

            }


          }//end of post method

        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
            $orders = orders::where(['florist_id'=>$floristId])->get();
            Session::put('orders',$orders);
        }else{
          if (Session::has('adminId')) {
            # code...
            if (Session::has('adminId') != 'admin' ) {
            
              $floristId = Session::get('adminId');
              # code...
              $orders = orders::where(['florist_id'=>$floristId])->get();
              Session::put('orders',$orders);
            }
          }else{
            return redirect('/florist');
          }
        }
        
        if (Session::get('adminId') == 'admin' ) {
          // dd('admin coupon');
          return view('admin.coupons.admin_add_coupon'); 

        }else{
          // dd('florist coupon');
          
          return view('admin.coupons.add_coupon'); 

        }
        

    }
    public function viewCoupons(){
        if (Session::has('floristSession')) {
          $coupons = Coupons::where(['florist_id'=>Session::get('floristId')])->get();
          
        }else{
          if (Session::has('adminId')) {
            # code...
            if (Session::get('adminId') == 'admin' ) {
              
              $coupons = Coupons::where(['florist_id'=>"a1"])->get();//a1 is admin assigned id for coupons
            
            }else{
              $coupons = Coupons::where(['florist_id'=>Session::get('adminId')])->get();

            }
          }else {
            return redirect('/florist');
          }
        }
      if (Session::has('floristSession') ) {//2 means shop owner
          $floristId = Session::get('floristId');
          $orders = orders::where(['florist_id'=>$floristId])->get();
          Session::put('orders',$orders);
      }else{
        if (Session::has('adminId')) {
          # code...
          if (Session::has('adminId') != 'admin' ) {
            $floristId = Session::get('adminId');
            $orders = orders::where(['florist_id'=>$floristId])->get();
            Session::put('orders',$orders);
          
          }
        }else{
          return redirect('/florist');
        }
      }
      if (Session::get('adminId') == 'admin' ) {
        return view('admin.coupons.admin_view_coupons')->with(compact('coupons'));
      
      }else{

        return view('admin.coupons.view_coupons')->with(compact('coupons'));
      }
      
    }
    public function updateStatus($en,Request $request,$id=null){
        $data = $request->all();
        Coupons::where('id',$data['id'])->update(['status'=>$data['status']]);  
    }
    public function editCoupon($en,Request $request,$id=null){
        if($request->isMethod('post')){
          $data = $request->all();
           if ($request->has('expiry_date')) {
                $exipry_date = $data['expiry_date'];
            }else{
                $exipry_date = '';
            }
          
          $coupon = Coupons::find($id);
          $coupon->coupon_code = $data['coupon_code'];
          $coupon->amount = $data['coupon_amount'];
          $coupon->amount_type = $data['amount_type'];
          $coupon->expiry_date = $exipry_date;
          $coupon->coupon_count = $data['coupon_count'] ?? null ;

          $coupon->save();
          if (Session::get('adminId') == 'admin' ) {
            return redirect(app()->getLocale().'/admin/admin-view-coupons')->with('flash_message_success','Coupon has been Updated Successfully');
          
          }else{

            return redirect(app()->getLocale().'/admin/view-coupons')->with('flash_message_success','Coupon has been Updated Successfully');
          }
        }
      if (Session::has('floristSession') ) {//2 means shop owner
          $floristId = Session::get('floristId');
          $orders = orders::where(['florist_id'=>$floristId])->get();
          Session::put('orders',$orders);
      }else{
        if (Session::has('adminId')) {
          # code...
          if (Session::get('adminId') != 'admin' ) {
            $floristId = Session::get('adminId');
            $orders = orders::where(['florist_id'=>$floristId])->get();
            Session::put('orders',$orders);
          
          }
        }else {
          return redirect('/florist');
        }
      }
       $couponDetails = Coupons::find($id);
       if (Session::get('adminId') == 'admin' ) {
        return view('admin.coupons.admin_edit_coupon')->with(compact('couponDetails'));

       }else{
         return view('admin.coupons.edit_coupon')->with(compact('couponDetails'));

       }
      }
      public function deleteCoupon($en,$id=null){
        Coupons::where(['id'=>$id])->delete();
        Alert::success('Deleted', 'Success Message');
        return redirect()->back();
      }   
}
