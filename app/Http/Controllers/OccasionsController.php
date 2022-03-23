<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occasion;
use App\Orders;
use DB;
use Session;
use RealRashid\SweetAlert\Facades\Alert;
class OccasionsController extends Controller
{
    public function addOccasion (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $occasion = new Occasion; 
            $occasion->name = $data['occasion_name'];
            $occasion->name_eng = $data['occasion_name_english'];
            $occasion->description = $data['occasion_description'];
            $occasion->description_eng = $data['occasion_description_english'];
            $occasion->slug = str_slug($data['occasion_name']);
            $occasion->save();
            return redirect(app()->getLocale().'/admin/view-occasions')->with('flash_message_success','Category Added Successfully!!');
        }
        $orders = Orders::where('florist_id', '<>', '')->get();
        Session::put('orders',$orders);
        return view('admin.occasion.add_occasion');
    }
    public function viewOccasions(){
        $orders = Orders::where('florist_id', '<>', '')->get();
        Session::put('orders',$orders);
        $occasions = Occasion::get();
        return view('admin.occasion.view_occasion')->with(compact('occasions'));
    }
    public function editOccasion($en,Request $request,$slug=null){
        if($request->isMethod('post')){
            $data = $request->all();
            Occasion::where(['slug'=>$slug])->update(['name'=>$data['occasion_name'],'name_eng'=>$data['occasion_name_english'],'description'=>$data['occasion_description'],'description_eng'=>$data['occasion_description_english']
            ,'slug'=>str_slug($data['occasion_name'])]);
            return redirect(app()->getLocale().'/admin/view-occasions')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $orders = Orders::where('florist_id', '<>', '')->get();
        Session::put('orders',$orders);
        $occasionDetails = Occasion::where(['slug'=>$slug])->first();
        return view('admin.occasion.edit_occasion')->with(compact('occasionDetails'));
    }
    public function deleteOccasion($en,$id=null){
        Occasion::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }
    public function updateStatus($en,Request $request,$id=null){
        $data = $request->all();
        // dd($data);
        Occasion::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
