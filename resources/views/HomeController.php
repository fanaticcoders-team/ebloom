<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Record;
use Validator;
use Session;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['login','logout']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
             'username' => 'required',
              'password' => 'required',
             ]);
            //  dd($data);
         //    echo "<pre>";print_r($data);die;
         // if ($validator->passes()) {
            //  dd(bcrypt($data['password']));
         if ($validator->passes()) {
         //    echo "<pre>";print_r($data);die;
         if(Auth::attempt(['user_name'=>$data['username'],'password'=>$data['password']])){
             Session::put('frontSession',$data['username']);
 
             return redirect('/view-records');
            //  return response()->json('success');
         }else{
             // return response()->json('Invalid username and password!');
             return response()->json([
                 'error' => [
                     'email' => 'Invalid username and password!'
                 ]
             ]);
             // return redirect()->back()->with('flash_message_error','Invalid username and password!');
         }
         }
         return response()->json([
             'error' => $validator->errors()->all()
         ]);
        }
    }
    public function logout(){
        //    dd('user logout');
           Session::forget('frontSession');
           Auth::logout();
           return redirect('/admin');
       }

    public function index()
    {
        $user_id= auth()->user()->id;
        $user=User::find($user_id);
        return view('home')->with('posts',$user->posts);
    }
    
    public function NewEntry(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'email|unique:records,email',
                'bussiness_name' => 'required|unique:records,bussiness_name',
                'landline' => 'unique:records,phone',
                
            ]);
            if ($validator->passes()) {
            // dd($data);
            // echo "<pre>";print_r($data);die;
            $record = new Record;
            $record->agent = $data['agent'];
            $record->status = $data['status'];
            $record->calender = $data['date'];
            $record->time = $data['time'];
            $record->bussiness_name = $data['bussiness_name'];
            $record->phone = $data['landline'];
            $record->cellphone = $data['cellphone'];
            $record->notes = $data['notes'];
            $record->owner_name = $data['owner_name'];
            $record->bussiness_type = $data['bussiness_type'];
            $record->location = $data['location'];
            $record->email = $data['email'];
            $record->website = $data['website'];
            $record->offer = $data['offer'];
            $record->price = $data['price'];
            $record->assign_to = $data['assignTo'];
            $record->valuation = $data['valuation'];
            
            $record->save();
            return redirect('/view-records')->with('flash_message_success','New manager has been added successfully!!');
            }else{
                return redirect('/add-entry')->with('flash_message_error','your email already exists');;
            }
        }

        return view('newEntry');
    }

    public function viewRecord(){

        $records = Record::get();
        return view('view-record')->with(compact('records'));
    }
    public function deleteRecord($id=null){
        Record::where(['id'=>$id])->delete();
        // Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }
}
