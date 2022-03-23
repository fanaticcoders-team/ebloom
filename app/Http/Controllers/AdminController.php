<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Session;
use App\admin;
use App\User;
use App\Orders;
use App\Florist;
use App\Products;
use App\Occasion;
use App\Type;
use DB;
use App\Notifications\updateStatus;
use App\Notifications\NewOrder;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\ShippingCharges;

use Image;

use Carbon\Carbon;

class AdminController extends Controller
{



    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            // dd(md5($data['password']));
            $adminCount = admin::where(['username'=>$data['username'],'password'=>md5($data['password'])])->count();
            // dd($adminCount);
            if($adminCount > 0){
                Session::put('adminSession','admin');
                Session::put('adminStatus','1');
                Session::put('adminId','admin');
                return redirect(app()->getLocale().'/admin/dashboard');
            }else{
                if (app()->getLocale() == 'gr') {
                    # code...
                    $errorMsg = 'Εισάγετε το email σας';
                } else {
                    # code...
                    $errorMsg = 'Εισάγετε το email σας';

                }
                
                return redirect(app()->getLocale().'/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard(){

        Session::forget('floristSession');
        // DB::table('orders')->delete();
        // $orders = Orders::with('orders')->orderBy('id','DESC')->get();
        
        // dd(count(Session::get('newOrders')));
        if (Session::has('adminSession')) {
            # code...
            if (Session::get('adminSession')=='admin') {
                $orders = Orders::where(['showOrder'=>1])->get();
                $florists = Florist::where(['shop_of_id'=>0])->get();
                $occasions = Occasion::get();
                $types = Type::get();
                $admin =  admin::where(['username'=>'admin'])->first();
                // $ordrs = "orders";
                $ordrs = Orders::where('florist_id', '6545')->get();
                $sessionOrders = Orders::where(['showOrder'=>1])->get();

                Session::put('orders',$sessionOrders);
                $notifications = $admin->unreadNotifications;
                Session::put('notifications',$notifications);
                // foreach ($notifications as $notification) {
                //     echo $notification->type;
                //     dd($notification->data['data']);
                // }

                return view('admin.dashboard')->with(compact('orders','florists','occasions','types'));
    
            }else{
                $florists = Florist::where(['shop_of_id'=>Session::get('adminId')])->get();
                // $orders = Orders::where(['florist_id'=>Session::get('adminId')])->get();
                $florist = Florist::where(['email'=>Session::get('adminSession')])->first();
                // dd($florist->id);
                $products = Products::where(['florist_id'=>$florist->id])->get();
    
                $orders = orders::where(['florist_id'=>$florist->id,'showOrder'=>1])->get();
                // dd($orders);
                // $sessionOrders = orders::where(['florist_id'=>$florist->id])->get();
                Session::put('orders',$orders);
                $timetable = DB::table('timetable')->where(['florist_id'=>$florist->id])->get();
                Session::put('timeTable',$timetable);
                   # code...
                    foreach ($orders as $key => $order) {
                        # code...
                        if ($order->order_status=="New") {
                            Alert::info('You have recived new order', 'Change Order Status');
                                
                        }
                    }
                    $newOrders = Orders::with('orders')->where(['florist_id'=>Session::get('floristId'),'order_status'=>'New'])->get();
                    // dd($newOrders);
                    Session::put('newOrders',$newOrders);

                return view('admin.florist.florist_dashboad')->with(compact('orders','florists','products'));
            }
        }else {
            return redirect('/florist');
        }    
        
    } 
    public function logout(){
        // dd('admin logout');
        Session::flush();
        return redirect(app()->getLocale().'/welcome')->with('flash_message_success','loged out Successfully!');
    }

    public function adminProfile(Request $request){
        $userDetails = admin::where('status',1)->first();

        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Session::has('adminSession')) {
                # code...
                if ($data['new_pwd']=='' || $data['new_pwd']==null) {
                    # code...
                    admin::where('username',Session::get('adminSession'))->update(['username'=>$data['username'],'email'=>$data['email']??'']);
                    return redirect()->back()->with('flash_message_success','Profile has been Updated Successfully!');
    
                }else{
                    $adminCount = admin::where(['username'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'status'=>1])->count();
                    $admin = admin::where(['username'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'status'=>1])->first();
                    
                    // dd($admin);
                    if ($adminCount == 1) {
                        $new_pwd = md5($data['new_pwd']);
                        admin::where('id',$admin->id)->update(['password'=>$new_pwd,'username'=>$data['username'],'email'=>$data['email']??'']);
                        return redirect()->back()->with('flash_message_success','Profile has been Updated Successfully!');
        
                    }else{
                        return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
                    }
                }
            }else{
                return redirect('/admin');
            }
        }
        // $orders = Orders::where('florist_id', '<>', '')->get();
        $orders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$orders);

        return view('admin.profile')->with(compact('userDetails'));
    }

    public function addRanges(Request $request){
        if($request->isMethod('post')){

            $data = $request->all();
            foreach($data['metersFrom'] as $key =>$val){
                // dd($data);   
                    $kilomersFromCount = DB::table('range_prices')->where(['kilometersFrom'=>$data['metersFrom'][$key]])->count();
                    if($kilomersFromCount>0){
                        return redirect(app()->getLocale().'/admin/add-range')->with('flash_message_error','"'.$data['metersFrom'][$key].' Kilometers From" is already exist please enter another Kilometers From');
                    
                    }
                    //Prevent duplicate Size Record
                    $kilomersToCount = DB::table('range_prices')->where(['kilometersTo' =>$data['metersTo'][$key]])->count();
                    if($kilomersToCount>0){
                        return redirect(app()->getLocale().'/admin/add-range')->with('flash_message_error','"'.$data['metersTo'][$key].' Kilometers To" is already exist please enter another Kilometers to');
                    }
                    // dd($data['metersTo'][$key]);
                    DB::table('range_prices')->insert(['kilometersFrom'=>$val,
                    'kilometersTo'=>$data['metersTo'][$key],'maxPrice'=>$data['price'][$key]]); 
            
                    // return redirect('/admin/florist-profile')->with('flash_message_success','Shipping charges added successfully!');

                

            }
            return redirect(app()->getLocale().'/admin/add-range')->with('flash_message_success','Shipping charges added successfully!');

        }
        // dd($request->all());
        // $orders = Orders::where('florist_id', '<>', '')->get();
        $orders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$orders);
        $ranges = DB::table('range_prices')->get();
        return view('admin.add_ranges')->with(compact('ranges'));
    }
    public function editRanges(Request $request,$en,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            foreach($data['range'] as $key=>$charge){
                DB::table('range_prices')->where(['id'=>$data['range'][$key]])->update(['kilometersFrom'=>$data['metersFrom'][$key],'kilometersTo'=>$data['metersTo'][$key]
                ,'maxPrice'=>$data['price'][$key]]);
            }
            return redirect()->back()->with('flash_message_success','Range Charges Updated!!!');
        }
    }
    public function deleteRange($en,$id=null){
        DB::table('range_prices')->where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','Range charges is deleted!');
    }

    public function viewFlorist($en,$slug){

        Session::put('viewFlorist','admin');

        return redirect(app()->getLocale().'/admin/florist-dashboard/'.$slug);
    }
    public function testviewFlorist($en,$slug){

        // dd('here');
        Session::put('viewFlorist','admin');
        
        $allFlorists = Florist::get(); 
        // dd($allFlorists);
        foreach ($allFlorists as $key => $florist) {
            # code...
            // $florist = Florist::where(['slug'=>$slug])->first(); 
            $floristCount = ShippingCharges::where(['florist_id'=>$florist->id])->count();
            $charges = ShippingCharges::where(['florist_id'=>$florist->id])->get();
            echo "count: ".$floristCount.'<br>';
            $maxKilometer = ShippingCharges::where(['florist_id'=>$florist->id])->max('kilometersTo');
            // dd($maxKilometer);
            Florist::where('id',$florist->id)->update(['delivery_limit'=>$maxKilometer]);

            
            // if ($floristCount == 1) {
            //     $floristCount2 = ShippingCharges::where(['florist_id'=>$florist->id,'kilometersTo'=>'02'])->count();
            //     echo "first match".'<br>';
            //     foreach ($charges as $key => $charge) {
            //         # code...
            //         echo "range: ".$charge->kilometersTo.'<br>';
    
            //     }
                
            //     if ($floristCount2 == 1 ) {
            //         echo "seco match".'<br>';
    
            //         Florist::where('id',$florist->id)->update(['delivery_limit'=>'02']);
                    
            //     }
            //     # code...
            // }
            
        }

        dd('chaged');

        dd("name: ".$florist->name.' :'.$florist->delivery_limit);

        return redirect(app()->getLocale().'/admin/florist-dashboard/'.$slug);
    }

    public function viewUsers(){

        $users = DB::table('users')->get();
        return view('admin.users.users')->with(compact('users'));
    
    }
    public function deleteUser($en,$id=null){
    
        DB::table('users')->where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','User deleted!');
    
    
    }

    public function floristDashboard($en,$slug){
        // dd($slug);
        $floristDetails = Florist::where(['slug'=>$slug])->first();
        
        // dd($floristDetails);

        if ($floristDetails != null ) {
            Session::put('floristSession', $floristDetails->email);
            Session::put('floristSlug', $floristDetails->slug);
            
            Session::put('floristId', $floristDetails->id);
            Session::put('adminId', $floristDetails->id);
            Session::put('floristLogo',$floristDetails->image);
            $orders = orders::where(['florist_id'=>$floristDetails->id,'showOrder'=>1])->get();
            $sessionOrders = orders::where(['florist_id'=>$floristDetails->id,'showOrder'=>1])->get();
            Session::put('orders',$sessionOrders);        
            $timetable = DB::table('timetable')->where(['florist_id'=>$floristDetails->id])->get();
            Session::put('timeTable',$timetable);
            if (Session::has('viewFlorist')) {
                # code...
                foreach ($orders as $key => $order) {
                    # code...
                    if ($order->order_status=="New") {
                        Alert::info('You have recived new order', 'Change Order Status');
                            
                    }
                }
            }
    
            Session::forget('viewFlorist');
                
    
                // dd(Session::get('floristSlug'));
                if (Session::has('floristId')) {
                    # code...
                    $newOrders = Orders::with('orders')->where(['florist_id'=>Session::get('floristId'),'order_status'=>'New'])->get();
                    // dd($newOrders);
                    Session::put('newOrders',$newOrders);
                    $florists = Florist::where(['shop_of_id'=>Session::get('floristId')])->get();
                    $orders = Orders::where(['florist_id'=>Session::get('floristId'),'showOrder'=>1])->get();
                    $florist = Florist::where(['email'=>Session::get('floristSession')])->first();
                    // dd($florist->id);
                    $products = Products::where(['florist_id'=>$florist->id])->get();
                // dd('check');
                    return view('admin.florist.florist_dashboad')->with(compact('orders','florists','products'));
                }else{
                    return redirect('/admin');
                }
            
        }else{//end of if
            return back();
        }

        
    }

    public function addBlog(Request $request){

        if($request->ismethod('post')){
            $data = $request->all();
            // dd($data);
            // echo "<pre>";print_r($data);die;
            
            $text = '';
            $slug = str_slug($data['title']);

            if(!empty($data['text'])){
                $text = $data['text'];

            }else{
                $text = '';
            }

            $image='';
            // dd($data['image']);

            //Upload image
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

                $image = $filename;
                }
            }
            // dd($image);

            DB::table('blogs')->insert(['title'=>$data['title'],'slug'=>$slug,
            'text'=>$text,'image'=>$image]); 
            $blog_id = DB::getPdo()->lastinsertID();

            foreach($data['description'] as $key =>$val){
                if(!empty($val)){
                    //Prevent duplicate SKU Record
                    // $attrCountSKU = ProductsAttributes::where('sku',$val)->count();
                    // if($attrCountSKU>0){
                    //     return redirect('/admin/add-attributes/'.$id)->with('flash_message_error','SKU is already exist please select another sku');
                    // }
                    // //Prevent duplicate Size Record
                    // $attrCountSizes = ProductsAttributes::where(['product_id'=>$id,'size'=>$data['size']
                    // [$key]])->count();
                    // if($attrCountSizes>0){
                    // return redirect('/admin/add-attributes/'.$id)->with('flash_message_error',''.$data['size'][$key].'Size is already exist please select another size');
                    // }
                    
                    DB::table('blog_details')->insert(['blog_id'=>$blog_id,'heading'=>$data['heading'][$key],
                    'text'=>$val]); 

                }

            }

    
            return redirect(app()->getLocale().'/admin/view-blogs')->with('flash_message_success','Blog has been added successfully!!');

        } 
        
        // $orders = orders::get();
        $orders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$orders);
        
        return view('admin.blog.add_blog');
    }
    public function addBlogDetails($en,$id,Request $request){

        if($request->ismethod('post')){
            $data = $request->all();

            foreach($data['description'] as $key =>$val){
                if(!empty($val)){
                    
                    DB::table('blog_details')->insert(['blog_id'=>$id,'heading'=>$data['heading'][$key],
                    'text'=>$val]); 

                }

            }

            return redirect()->back();

        }
        // $orders = orders::get();
        $orders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$orders);
        $blog =  DB::table('blogs')->where(['id'=>$id])->first();
        // dd($blog);
        $blogDetails = DB::table('blog_details')->where(['blog_id'=>$id])->get();
        // dd($blogDetails);
        return view('admin.blog.add_blogDetails')->with(compact('blogDetails','blog'));

    }
    public function updateBlogDetails($en,$id,Request $request){

        if($request->ismethod('post')){
            $data = $request->all();

            foreach($data['description'] as $key =>$val){
                if(!empty($val)){
                    
                    DB::table('blog_details')->where(['id'=>$data['blogDetail'][$key]])->update(['heading'=>$data['heading'][$key],
                    'text'=>$val]); 

                }

            }

            return redirect()->back();

        }
        // $orders = orders::get();
        $orders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$orders);
        $blog =  DB::table('blogs')->where(['id'=>$id])->first();
        // dd($blog);
        $blogDetails = DB::table('blog_details')->where(['blog_id'=>$id])->get();
        // dd($blogDetails);
        return view('admin.blog.add_blogDetails')->with(compact('blogDetails','blog'));

    }
    public function deleteBlogDetails($en,$id=null){
        // dd($id);
        DB::table('blog_details')->where(['id'=>$id])->delete();
        // dd(ShippingCharges::where(['id'=>$id])->get()->count());
        return redirect()->back()->with('flash_message_error','Blog charges is deleted!');
    }

    public function viewBlogs(){
        // dd($id);
        $blogs = DB::table('blogs')->orderBy('created_at','DESC')->get();
        
        // dd(ShippingCharges::where(['id'=>$id])->get()->count());
        return view('admin.blog.view_blogs')->with(compact('blogs'));

    }
    public function editBlog($en,Request $request,$id=null){
        if($request->isMethod('post')){
             $data = $request->all();
             //Upload image
            if($request->hasfile('image')){
                echo $img_tmp = Input::file('image');
                if($img_tmp->isValid()){

                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'uploads/products/'.$filename;

                //image resize
                Image::make($img_tmp)->resize(500,500)->save($img_path);

            }
            }else{
                $filename = $data['current_image'];
            }
            if(empty($data['text'])){
                $data['text'] = '';
            }
            // $slug = str_slug($data['title']);

            DB::table('blogs')->where(['id'=>$id])->update(['title'=>$data['title'],
            'text'=>$data['text'],'slug'=>str_slug($data['title']),
            'image'=>$filename]);
            return redirect(app()->getLocale().'/admin/view-blogs')->with('flash_message_success','Blog has been updated!!');
        }
        $blog = DB::table('blogs')->where(['id'=>$id])->first();
    
        
        // $orders = orders::get();
        $orders = Orders::where(['showOrder'=>1])->get();

        Session::put('orders',$orders);
        

        return view('admin.blog.edit_blog')->with(compact('blog'));
    }

    public function deleteBlog($en,$id=null){
        // dd($id);
        DB::table('blogs')->where(['id'=>$id])->delete();
        // dd(ShippingCharges::where(['id'=>$id])->get()->count());
        return redirect()->back()->with('flash_message_error','Blog charges is deleted!');
    }

    public function updateStatus($en,Request $request,$id=null){
        $data = $request->all();
        DB::table('blogs')->where('id',$data['id'])->update(['status'=>$data['status']]);  
    }


}//end controller
