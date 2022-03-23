<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Event;
use Session;
class EventsController extends Controller
{
    public function addEvent(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo"<pre>"; print_r($data);die;
            $event = new Event;
            // $coupon->florist_id = Session::get('adminId');
            $event->name = $data['name'];
            $event->type = $data['type'];
            $event->description = $data['description'];
            $event->date = $data['date'];
            $event->save();
            return redirect('/admin/view-events')->with('flash_message_success','New Event has been added Successfully');
          }
        return view('admin.events.add_event'); 
    }
    public function viewEvents(){
        $events = Event::get();
        return view('admin.events.view_events')->with(compact('events'));
    }
    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Coupons::where('id',$data['id'])->update(['status'=>$data['status']]);  
    }
    public function editEvent(Request $request,$id=null){
        if($request->isMethod('post')){
          $data = $request->all();
          $event = Event::find($id);
          $event->name = $data['name'];
          $event->type = $data['type'];
          $event->description = $data['description'];
          $event->date = $data['date'];
          $event->save();
          return redirect('/admin/view-events')->with('flash_message_success','Coupon has been Updated Successfully');
        }
       $eventDetails = Event::find($id);
       return view('admin/events/edit_event')->with(compact('eventDetails'));
      }
      public function deleteEvent($id=null){
        Event::where(['id'=>$id])->delete();
        Alert::success('Deleted', 'Success Message');
        return redirect()->back();
        }   
}
