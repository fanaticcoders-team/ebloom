<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Image;
use Session;
use App\admin;
use App\Florist;
use App\User;
use App\Orders;
use App\City;
use App\Products;
use App\Type;
use App\ShippingCharges;
use DB;
use Validator;
use Mail;

use App\Mail\ForgetPasswordMail;

use RealRashid\SweetAlert\Facades\Alert;

class FloristController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            // dd($data);
            // dd(md5($data['password']));
            $floristCount = Florist::where(['email'=>$data['email'],'password'=>md5($data['password'])])->count();
            // dd($floristCount);
            if($floristCount > 0){
                $florist = Florist::where(['email'=>$data['email'],'password'=>md5($data['password'])])->first();
                // dd($florist);
                if ($florist->status==1) { 
                    # code... 
                    Session::put('adminSession', $florist->email);
                    Session::put('adminId', $florist->id);
                    
                    Session::put('adminStatus',$florist->admin);
                    Session::put('floristLogo',$florist->image);
                    Session::put('floristSlug', $florist->slug);
                    return redirect(app()->getLocale().'/florist/dashboard');
                }else{
                    return redirect(app()->getLocale().'/florist')->with('flash_message_error','Sorry! you are blocked');
                }
            }else{
                return redirect(app()->getLocale().'/florist')->with('flash_message_error','Invalid Email or Password');
            }
        }
        

        return view('admin.florist.florist_login');
    }
    public function florist_logout(){

        // dd('check');
        $status = '';
        $statusSessionName = '';
        if (Session::has('adminId') ) {//2 means shop owner
            $floristId = Session::get('adminId');
            $orders = orders::where(['florist_id'=>$floristId,'showOrder'=>1])->get();
            // dd($orders);
            // foreach ($orders as $key => $order) {
            //             # code...
            //     if ($order->order_status=="New") {
            //         // dd('check');
            //         $status = 'Please update order status!';
            //         $statusSessionName = 'flash_message_status';
            //         Alert::info('You have recived new order', 'Change Order Status');
            //     }
            // }
        }

        // dd($status);in
        Session::flush();
        return redirect(app()->getLocale().'/florist')->with('flash_message_success','loged out Successfully!')
                                   ->with($statusSessionName,$status);
    }

    public function forgetPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            ]);
            // dd($data);
            //    echo "<pre>";print_r($data);die;
            // if ($validator->passes()) {
            if ($validator->passes()) {
            //    echo "<pre>";print_r($data);die;
                $userCount = Florist::where('email',$data['email'])->count();
                if($userCount==0){
                    // return response()->json('error');
                    // return response()->json([
                    //     'error' => ['Your email not exists']
                    // ]);
                    if (app()->getLocale() == 'gr') {
                        # code...
                        return redirect()->back()->with('flash_message_error','Το email δεν υπάρχει');

                    } else {
                        # code...
                        return redirect()->back()->with('flash_message_error','Your email not exists');
                    }
                    
                }else{

                    $password = mt_rand( 1000000000, 9999999999 );
                    $pass = md5($password);
                    
                    Mail::to($data['email'])->send(new ForgetPasswordMail($password));
                    Florist::where('email',$data['email'])->update(['password'=>$pass]);

                    return redirect(app()->getLocale().'/florist')->with('flash_message_success','new password has been send on your email');

                    // return response()->json('success'.$userCount);
                }
            }
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        return view('admin.florist.florist_forget_password');

    }

    public function addFlorist(Request $request){

        // dd($range);
        if($request->ismethod('post')){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:florists,email',
            ]);
            if ($validator->passes()) {
            // $delivery_range = DB::table('range_prices')->max('kilometersTo');
            $range = DB::table('range_prices')->orderBy('kilometersTo', 'asc')->first();

            // dd($data);
            // echo "<pre>";print_r($data);die;
            $florist = new Florist;
            $florist->name = $data['name'];
            $florist->user_name = $data['manager_name'];
            $florist->email = $data['email'];
            $florist->cellphone = $data['cellphone'];
            $florist->password = md5($data['password']);
            $florist->address = $data['address'];
            $rand_number = mt_rand(1000000000, 9999999999);
            $slug = str_slug($data['name'].'-'.$rand_number);
            $florist->slug = $slug;
            $florist->delivery_limit = $range->kilometersTo;
            $florist->created_at = null;
            
            // $florist->country = $data['country'];
            if (Session::has('adminStatus')) {
                # code...
                if (Session::get('adminStatus')=='2') {//florist added by shop owner
                    $florist->admin = 3;
                    
                    $florist->shop_of_id = Session::get('adminId');
                     
                }else{
                    $florist->shop_of_id = 0;
                }
            }else{
                return redirect('/admin');
            }
            // dd('check');
            $florist->city = $data['city'];
            $florist->save();
            $days = ['Δευτέρα','Τρίτη','Τετάρτη','Πέμπτη','Παρασκευή','Σάββατο','Κυριακή'];
            $fromHours = ['08','10','12','14','16','18'];
            $toHours = ['10','12','14','16','18','20'];

            foreach ($days as  $day) {
                # code...
                foreach ($fromHours as $key => $val) {
                    # code...
                    DB::table('timetable')->insert(['day'=>$day,'fromHour'=>$val,
                    'toHour'=>$toHours[$key],'florist_id'=>$florist->id ]); 
                }
            }
            $range = DB::table('range_prices')->orderBy('kilometersTo', 'asc')->first();

            $charges = new ShippingCharges;
            $charges->florist_id = $florist->id;
            $charges->range_id = $range->id;
            $charges->kilometersFrom = $range->kilometersFrom;
            $charges->kilometersTo = $range->kilometersTo;
            $charges->price = '0';
            $charges->save();

            return redirect(app()->getLocale().'/admin/view-florists')->with('flash_message_success','New manager has been added successfully!!');

            }else{
                return redirect(app()->getLocale().'/admin/add-florist')->with('flash_message_error','your email already exists');;
            }
        }

        $cities= City::get();

        // $orders = Orders::where('florist_id', '<>', '')->get();
        $orders = Orders::where(['showOrder'=>'1'])->get();

        Session::put('orders',$orders);

        return view('admin.florist.add_florist')->with(compact('cities'));
    }

    public function addFlorist0(Request $request)
    {
        if ($request->ismethod('post')) {
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:florists,email',
                'baccount'=> 'required|unique:florists,business_account_number',
                'btnumber' => 'required|unique:florists,business_tax_number',
            ]);

            print_r('Data coming from the form--->');
            print_r($data);
            if ($validator->passes()) {
                $delivery_range = DB::table('range_prices')->max('kilometersTo');
                $florist = new Florist;
                $florist->name = $data['name'];
                $florist->user_name = $data['manager_name'];
                $florist->email = $data['email'];
                $florist->cellphone = $data['cellphone'];
                $florist->password = md5($data['password']);
                $florist->address = $data['address'];
                $florist->description = $data['description'];
                // $florist->business_name = $data['bname'];
                // $florist->business_title = $data['btitle'];
                $florist->business_name = $data['btitle'];
                $florist->business_title = $data['bname'];
                $florist->business_tax_number = $data['btnumber'];
                $florist->business_address = $data['baddress'];
                $florist->business_account_number = $data['baccount'];
                $florist->business_account_beneficiary = $data['baccountb'];
                $florist->payoutinterval = $data['payoutinterval'];
                $florist->payoutfrequency = $data['frequency'];
                $rand_number = mt_rand(1000000000, 9999999999);
                $slug = str_slug($data['name'] . '-' . $rand_number);
                $florist->slug = $slug;
                $florist->delivery_limit = $delivery_range;
                $florist->created_at = null;
                // $florist->country = $data['country'];
                if (Session::has('adminStatus')) {
                    # code...
                    if (Session::get('adminStatus') == '2') { //florist added by shop owner
                        $florist->admin = 3;

                        $florist->shop_of_id = Session::get('adminId');
                    } else {
                        $florist->shop_of_id = 0;
                    }
                } else {
                    print_r('Session else part is--->');
                    return redirect('/admin');
                }
                $postRequest = array(
                    'email'=> $data['email'],
                    'contact_phone'=>$data['cellphone'],
                    'description'=>$data['description'],
                    'business_name'=>$data['bname'],
                    'business_title'=>$data['btitle'],
                    'business_tax_number'=>$data['btnumber'],
                    'business_address'=>$data['baddress'],
                    'bank_account_iban'=>$data['baccount'],
                    'bank_account_beneficiary'=> $data['baccountb'],
                    'payout_interval'=>$data['payoutinterval'],
                    'payout_frequency'=>$data['frequency'],
                );
                // $pk = 'sk_3twVit0RWMSevu7fDQIiyZnjA4YaabLc';
                $pk = 'sk_b8e82LpmyE5XRbzf9iLqIySUPqXe8PWM';
                // $apiUrl = 'https://sandbox-api.everypay.gr/sellers';
                $apiUrl = 'https://api.everypay.gr/sellers';
                $curlSession = curl_init($apiUrl);
                curl_setopt($curlSession, CURLOPT_USERPWD, $pk);
                curl_setopt($curlSession, CURLOPT_POSTFIELDS, $postRequest);
                curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curlSession);
                curl_close($curlSession);
                
                $jsonArrayResponse = json_decode($response);
                $florist->city = $data['city'];
                if($jsonArrayResponse != '' && $jsonArrayResponse != null){
                    if(property_exists($jsonArrayResponse, 'status')){    
                    $florist->seller_id = $jsonArrayResponse->token;
                    $florist->save();
                    $days = ['Δευτέρα', 'Τρίτη', 'Τετάρτη', 'Πέμπτη', 'Παρασκευή', 'Σάββατο', 'Κυριακή'];
                $fromHours = ['08', '10', '12', '14', '16', '18'];
                $toHours = ['10', '12', '14', '16', '18', '20'];
                foreach ($days as $day) {
                    # code...
                    foreach ($fromHours as $key => $val) {
                        # code...
                        DB::table('timetable')->insert([
                            'day' => $day, 'fromHour' => $val,
                            'toHour' => $toHours[$key], 'florist_id' => $florist->id
                        ]);
                    }
                }
                $range = DB::table('range_prices')->orderBy('kilometersTo', 'asc')->first();
                $charges = new ShippingCharges;
                $charges->florist_id = $florist->id;
                $charges->range_id = $range->id;
                $charges->kilometersFrom = $range->kilometersFrom;
                $charges->kilometersTo = $range->kilometersTo;
                $charges->price = '0';
                $charges->save();
                return redirect(app()->getLocale() . '/admin/view-florists')->with('flash_message_success', 'New manager has been added successfully!!');
                } else {
                    return redirect(app()->getLocale() . '/admin/add-florist')->with('flash_message_error',$jsonArrayResponse->error->message);
                }
                } else {
                    return redirect(app()->getLocale() . '/admin/add-florist')->with('flash_message_error','Unable to generate seller id, please provide the valid seller details.');
                }
                
                
            } else {
                // return redirect(app()->getLocale() . '/admin/add-florist')->with('flash_message_error', 'your email already exists');;
                return redirect(app()->getLocale() . '/admin/add-florist')->with('flash_message_error', 'Email, Business Tax and account number should be unique');
            }
        }

        $cities = City::get();

        // $orders = Orders::where('florist_id', '<>', '')->get();
        $orders = Orders::where(['showOrder' => '1'])->get();

        Session::put('orders', $orders);

        return view('admin.florist.add_florist')->with(compact('cities'));
    }
    
    public function floristProfile(Request $request){
        if (Session::has('floristSession')) {
            $userDetails = Florist::where('email',Session::get('floristSession'))->first();
        }else{
            if (Session::has('adminSession')) {
                # code...
                $userDetails = Florist::where('email',Session::get('adminSession'))->first();
            }else{
                return redirect('/florist');
            }
        }
        // dd($userDetails->charges);
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);

            if (Session::has('floristSession')) {
                $adminCount = Florist::where(['email'=>Session::get('floristSession')])->count();
                $admin = Florist::where(['email'=>Session::get('floristSession')])->first();
            }else{
                if (Session::has('adminSession')) {
                    # code...
                    $adminCount = Florist::where(['email'=>Session::get('adminSession')])->count();
                    $admin = Florist::where(['email'=>Session::get('adminSession')])->first();
                        
                }else{
                    return redirect('/florist');
                }
            }
            // dd($admin);
            if ($adminCount == 1) {
                if($request->hasfile('image')){
                    // dd('logo section');
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
                // end logo image
                if($request->hasfile('back_image')){
                    // dd('back section');
                    echo $img_tmp = Input::file('back_image');
                    if($img_tmp->isValid()){
    
                    $imageDementions = getimagesize($img_tmp);
                    $width = $imageDementions[0];
                    $height = $imageDementions[1];
                    // dd($width);
                    //image path code
                    $extension = $img_tmp->getClientOriginalExtension();
                    $back_filename = rand(111,99999).'.'.$extension;
                    $img_path = 'uploads/products/'.$back_filename;
    
                    //image resize
                    Image::make($img_tmp)->resize($width,$height)->save($img_path);
    
                    }
                }else{
                    $back_filename = $data['current_back_image'];
                }
                if ($data['minimam_order'] == '' || $data['minimam_order'] == null) {
                    $minimam_order = '0';
                }else{
                    $minimam_order = $data['minimam_order'];
                }
                // dd($minimam_order);
                // end back image
                $rand_number = mt_rand(1000000000, 9999999999);
                $slug = str_slug($data['name'].'-'.$rand_number);
                Florist::where('id',$admin->id)->update(['name'=>$data['name'],'slug'=>$slug,'email'=>$data['email'],'cellphone'=>$data['cellphone'],'address'=>$data['addressInGr'],'region'=>$data['addressInEng'],'city'=>$data['city'],'city_greece'=>$data['city_gr'],'shipping_fee'=>$data['viva_wallet_id'],'bank_name'=>$data['bank_name'],'lat'=>$data['lat'],'lng'=>$data['lng'],'image'=>$filename,'back_image'=>$back_filename,'store_info'=>$data['store_info'],'user_name'=>$data['manager_name'],'minimam_order'=>$minimam_order]);
                return redirect()->back()->with('flash_message_success','Profile has been updated successfully!');
            }else{
                return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
            }
        }
        $ranges = DB::table('range_prices')->orderBy('kilometersFrom', 'asc')->get();
        // dd($ranges);
        // $timetable = DB::table('working_hours')->where(['florist_id'=>Session::get('floristId')])->orderBy('fromHour', 'asc')->get();


        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            }else{
                return redirect('/florist');
            }
        }
        $orders = orders::where(['florist_id'=>$floristId,'showOrder'=>1])->get();
        Session::put('orders',$orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }
            // dd($userDetails);
            if ($userDetails != null ) {
                # code...
                Session::put('floristLogo', $userDetails->image);
                $sortedCharges = $this->sortArray($userDetails['charges']);
            
            }else{
                return redirect('/florist');
            }
            // dd($sortedCharges);
            
        return view('admin.florist.florist_profile')->with(compact('userDetails','ranges','sortedCharges'));
    }
    public function sortArray($array) {
        $temp = 0;
        $arrayCount = count($array);
        for ($i = 0; $i < $arrayCount; $i++) {
           for ($j = $i; $j < $arrayCount; $j++) {
              if ($array[$j]->kilometersFrom < $array[$i]->kilometersFrom) {
              $temp = $array[$j];
              $array[$j] = $array[$i];
              $array[$i] = $temp;
              }
           }
        }
        return $array;
    }
    public function changePassword(Request $request){
        $userDetails = admin::where('status',1)->first();

        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Session::has('floristSession')) {
                // dd(md5($data['current_pwd']));
                $adminCount = Florist::where(['email'=>Session::get('floristSession'),'password' => md5($data['current_pwd']),'admin'=>2])->count();
                $admin = Florist::where(['email'=>Session::get('floristSession'),'password' => md5($data['current_pwd']),'admin'=>2])->first();
            }else{
                if (Session::has('adminSession')) {
                    # code...
                    // dd(Session::get('adminSession'));
                    $adminCount = Florist::where(['email'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'admin'=>2])->count();
                    $admin = Florist::where(['email'=>Session::get('adminSession'),'password' => md5($data['current_pwd']),'admin'=>2])->first();
                }else{
                    return redirect('/florist');
                }
            }
            
            // dd($adminCount);
            if ($adminCount == 1) {
                $new_pwd = md5($data['new_pwd']);
                // dd($new_pwd);
                Florist::where('id',$admin->id)->update(['password'=>$new_pwd]);
                // dd('pass update');
                return redirect()->back()->with('flash_message_success','Password has been changed successfully!');

            }else{
                // dd('incorrect !');
                return redirect()->back()->with('flash_message_error','Current Password is incorrect!');
            }
        }

        return view('admin.florist.florist_profile')->with(compact('userDetails'));
    }
    public function viewFlorists(Request $request){
        $allFlorists = null; 
        
        if (Session::has('adminStatus')) {
            # code...
            if (Session::get('adminStatus')=='2' ) {//2 means shop owner
                
                    $allFlorists = Florist::where(['shop_of_id'=>Session::get('adminId')])->get(); 
                
            
            }else{
                    $allFlorists = Florist::where(['shop_of_id'=>0])->get();//0 is for admin 
                
            }
        }else{
            return redirect('/admin');
        }

        // dd($allFlorists);
        if($request->ismethod('post')){
            
        }
        // $orders = Orders::where('florist_id', '<>', '')->get();
        $orders = Orders::where(['showOrder'=>'1'])->get();

        Session::put('orders',$orders);
        // dd($allFlorists);
        // $latest_florists = Florist::where(['shop_of_id'=>'0'])->orderBy('id', 'DESC')->paginate(10);
        // dd($latest_florists);
        // Florist::where('id',50)->update(['slug'=>str_slug('ΕΚΦΡΑΣΗ32')]);

        return view('admin.florist.view_florists')->with(compact('allFlorists'));

    }

    public function testviewFlorists(Request $request){
        $allFlorists = null; 
        
        if (Session::has('adminStatus')) {
            # code...
            if (Session::get('adminStatus')=='2' ) {//2 means shop owner
                
                    $allFlorists = Florist::where(['shop_of_id'=>Session::get('adminId')])->get(); 
                
            
            }else{
                    $allFlorists = Florist::where(['shop_of_id'=>0])->get();//0 is for admin 
                
            }
        }else{
            return redirect('/admin');
        }

        // dd($allFlorists);
        if($request->ismethod('post')){
            
        }
        // $orders = Orders::where('florist_id', '<>', '')->get();
        $orders = Orders::where(['showOrder'=>'1'])->get();

        Session::put('orders',$orders);
        // dd($allFlorists);
        // $latest_florists = Florist::where(['shop_of_id'=>'0'])->orderBy('id', 'DESC')->paginate(10);
        // dd($latest_florists);
        // Florist::where('id',50)->update(['slug'=>str_slug('ΕΚΦΡΑΣΗ32')]);

        return view('admin.florist.view_florists_test')->with(compact('allFlorists'));

    }


    

    public function addManager(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:florists,email',
            ]);
            if ($validator->passes()) {

            
            // echo "<pre>";print_r($data);die;
            $florist = new Florist;
            $florist->name = $data['name'];
            $florist->email = $data['email'];
            // $florist->cellphone = $data['cellphone'];
            $florist->password = md5($data['password']);
            // $florist->address = $data['address'];
            $florist->slug = str_slug($data['name']);
            $florist->delivery_limit = '2';
            // $florist->country = $data['country'];
               $florist->admin = '3';
                if (Session::has('adminId')) {
                    # code...
                    $florist->shop_of_id = Session::get('adminId');
                }else{
                    return redirect('/florist');
                }
              
            // $florist->city = $data['city'];
            $florist->save();
            return redirect(app()->getLocale().'/admin/view-managers')->with('flash_message_success','New Manager has been added successfully!!');

            }else{
                    return redirect(app()->getLocale().'/admin/add-manager')->with('flash_message_error','your email already exists');;
            }

        }
        $cities= City::get();
        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            }else{
                return redirect('/florist');
            }
        }
        $orders = orders::where(['florist_id'=>$floristId,'showOrder'=>1])->get();
        Session::put('orders',$orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }

        return view('admin.florist.add_manager')->with(compact('cities'));
    }

    public function viewManagers(Request $request){
        $allFlorists = null; 
        
        if (Session::has('floristSession') ) {//2 means shop owner
            $allFlorists = Florist::where(['shop_of_id'=>Session::get('floristId')])->get(); 
            $floristId = Session::get('floristId');
        }else{
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
                $allFlorists = Florist::where(['shop_of_id'=>Session::get('adminId')])->get(); 
            }else{
                return redirect('/florist');
            }
        }

        $orders = orders::where(['florist_id'=>$floristId,'showOrder'=>1])->get();
        Session::put('orders',$orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }

        if($request->ismethod('post')){
            
        }
        return view('admin.florist.view_managers')->with(compact('allFlorists'));

    }
    public function viewFloristFlowers($en,$id){
        // dd($id);
        $products = null;
        Session::put('florist_flowers_id',$id);
        if (Session::has('adminStatus')) {
            # code...
            if (Session::get('adminStatus')=='1') {
                $florist = Florist::where(['shop_of_id'=>$id])->first();
                $product = Products::where(['florist_id'=>$id])->get();
                $newProducts = Products::where(['florist_id'=>$id])->get();
                // $products = array_merge($product, $newProducts);
                $products = $product->merge($newProducts);
            }else{
                $products = Products::where(['florist_id'=>$id])->get();
            }
        }else{
            return redirect('/admin');
        }
          
        $types = Type::get();
        $discounts = DB::table('product_discount')->get();
        // dd($products);
        return view('admin.products.view_products')->with(compact('products','discounts','types'));
    }
    public function deleteFlorist($en,$id=null){
        Florist::where(['id'=>$id])->delete();
        Alert::Success('Deleted','Success Message');
        return redirect()->back();
    }

    public function updateStatus(Request $request,$en,$id=null){
        $data = $request->all();
        Florist::where('id',$data['id'])->update(['status'=>$data['status']]);

    }

    public function updateTimeStatus($en,Request $request,$id=null){
        $data = $request->all();
        DB::table('timetable')->where('id',$data['id'])->update(['status'=>$data['status']]);

    }
    
    public function updateDayStatus($en,Request $request,$id=null){
        $data = $request->all();
        if (Session::has('floristSession') ) {//2 means shop owner
            $floristId = Session::get('floristId');
        }else{
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
            }else{
                return redirect('/florist');
            }
        }
        // DB::table('timetable')->where(['day'=>$data['id']] )->update(['status'=>$data['status']]);

        DB::table('timetable')->where(['day'=>$data['id'],'florist_id'=>$floristId] )->update(['status'=>$data['status']]);
    }

    public function addCharges($en,Request $request,$id=null){
        $floristDetails = Florist::with('charges')->where(['id'=>$id])->first();
        if($request->isMethod('post')){

            $data = $request->all();
            // dd($data);
            $range = DB::table('range_prices')->where(['id'=>$data['range']])->first();
            
            if ($range==null) {
                return redirect(app()->getLocale().'/admin/florist-profile')->with('flash_message_error','Select range');
                
            }
            // foreach($data['metersFrom'] as $key =>$val){
                // dd($data);
                // dd($val);
                
                    //Prevent duplicate SKU Record
                    $kilomersFromCount = ShippingCharges::where(['florist_id'=>$id,'kilometersFrom'=>$range->kilometersFrom])->count();
                    if($kilomersFromCount>0){
                        return redirect(app()->getLocale().'/admin/florist-profile')->with('flash_message_error','"'.$range->kilometersFrom.' Kilometers From" is already exists please enter another Kilometers From');
                    
                    }
                    //Prevent duplicate Size Record
                    $kilomersToCount = ShippingCharges::where(['florist_id'=>$id,'kilometersTo'=>$range->kilometersTo])->count();
                    if($kilomersToCount>0){
                        return redirect(app()->getLocale().'/admin/florist-profile')->with('flash_message_error','"'.$range->kilometersTo.' Kilometers To" is already exists please enter another Kilometers to');
                    }
                    if ($data['price'] > $range->maxPrice) {
                        return redirect(app()->getLocale().'/admin/florist-profile')->with('flash_message_error','"On this range '.$range->kilometersFrom.' - '.$range->kilometersTo.' you can charge maximam '.$range->maxPrice.'€.!');
                        
                    }
                    
                    // dd($data['metersTo'][$key]);
                    $charges = new ShippingCharges;
                    $charges->florist_id = $id;
                    $charges->range_id = $range->id;
                    $charges->kilometersFrom = $range->kilometersFrom;
                    $charges->kilometersTo = $range->kilometersTo;
                    $charges->price = $data['price'];
                    $charges->save();
                    // return redirect('/admin/florist-profile')->with('flash_message_success','Shipping charges added successfully!');

                    if (Session::has('floristSession')) {
                        $admin = Florist::where(['email'=>Session::get('floristSession')])->first();
                    }else{
                        if (Session::has('adminSession')) {
                            # code...
                            $admin = Florist::where(['email'=>Session::get('adminSession')])->first();
                        }else{
                            return redirect('/florist');
                        }
                    }
                    $maxKilometer = ShippingCharges::where(['florist_id'=>$admin->id])->max('kilometersTo');
                    // dd($maxKilometer);
                    Florist::where('id',$admin->id)->update(['delivery_limit'=>$maxKilometer]);
                    
            // }
            return redirect(app()->getLocale().'/admin/florist-profile')->with('flash_message_success','Το Κόστος Μεταφορικών προστέθηκε με επιτυχία!'); //Shipping charges added successfully!

        }
        // dd($request->all());
        return redirect(app()->getLocale().'/admin/florist-profile');
    }

    public function editCharges($en,Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($data);

            foreach($data['charge'] as $key=>$charge){
                $range = DB::table('range_prices')->where(['id'=>$data['rangeId'][$key]])->first();
                // dd($data['price'][$key]);
                if ($data['price'][$key] > $range->maxPrice ) {
                    // dd($range->maxPrice);

                    return redirect(app()->getLocale().'/admin/florist-profile')->with('flash_message_error','"On this range '.$range->kilometersFrom.' - '.$range->kilometersTo.' you can charge maximam '.$range->maxPrice.'€.!');
                    
                }
                ShippingCharges::where(['id'=>$data['charge'][$key]])->update(['kilometersFrom'=>$data['metersFrom'][$key],'range_id'=>$data['rangeId'][$key],'kilometersTo'=>$data['metersTo'][$key]
                ,'price'=>$data['price'][$key]]);
            }
            return redirect()->back()->with('flash_message_success','Shipping Charges Updated!!!');
        }
    }
    public function deleteCharges($en,$id=null){
        // dd($id);
        $charges = ShippingCharges::find($id);
        // orderBy('kilometersTo', 'desc')->first();
        // dd($charges);

        $florist_id = $charges->florist_id ?? '' ;
        ShippingCharges::where(['id'=>$id])->delete();

        // dd($florist_id);
        $maxKilometer = ShippingCharges::where(['florist_id'=>$florist_id])->max('kilometersTo');
        // dd($maxKilometer);

        Florist::where('id',$florist_id)->update(['delivery_limit'=>$maxKilometer]);
        // dd(ShippingCharges::where(['id'=>$id])->get()->count());
        return redirect()->back()->with('flash_message_error','Shipping charges is deleted!');
    }

    public function timetable(Request $request){
        // DB::table('timetable')->where(['day'=>'','florist_id'=>18] )->update(['status'=>$data['status']]);

        if($request->isMethod('post')){
            if (Session::has('floristSession')) {
                $florist_id = Session::get('floristId');
            }else{
                if (Session::has('adminId')) {
                    # code...
                    $florist_id = Session::get('adminId');
                }else{
                    return redirect('/florist');
                }
            }
            $data = $request->all();
            foreach($data['timeFrom'] as $key =>$val){
                // dd($data);   
                    $hoursFromCount = DB::table('timetable')->where(['fromHour'=>$data['timeFrom'][$key],'day'=>$data['day'][$key],'florist_id'=>$florist_id])->count();
                    if($hoursFromCount>0){
                        return redirect(app()->getLocale().'/florist/timetable')->with('flash_message_error',' Οι συγκεκριμένες ώρες υπάρχουν. Παρακαλώ προσθέστε διαφορετικές.');
                    
                    }
                    // hours From is already exists please enter another hours From
                    
                    //Prevent duplicate Size Record
                    // $hoursToCount = DB::table('timetable')->where(['toHour' =>$data['timeTo'][$key],'florist_id'=>$florist_id])->count();
                    // if($hoursToCount>0){
                    //     return redirect('/florist/timetable')->with('flash_message_error','"'.$data['timeTo'][$key].' hours To" is already exist please enter another Hours to');
                    // }
                    // if ( $data['timeTo'][$key] >= $val+2   ) {
                        // dd('this is correct');
                    


                    if ($val == '08') {
                        # code...
                        $timeTo = '10';
                    }else if ($val == '10'){
                        $timeTo = '12';
                    }else if ($val == '12'){
                        $timeTo = '14';
                    }else if ($val == '14'){
                        $timeTo = '16';
                    }else if ($val == '16'){
                        $timeTo = '18';
                    }else if ($val == '18'){
                        $timeTo = '20';
                    }
                        DB::table('timetable')->insert(['day'=>$data['day'][$key],'fromHour'=>$val,
                        'toHour'=>$timeTo,'florist_id'=>$florist_id]); 
                
                    // }else{
                    //     // dd('should be gap of 2 hours');
                    //     return redirect('/florist/timetable')->with('flash_message_error','Should be two hours gap!');

                    // }
                    // dd($data['metersTo'][$key]);
                    
                    // return redirect('/admin/florist-profile')->with('flash_message_success','Shipping charges added successfully!');

            }
            return redirect(app()->getLocale().'/florist/timetable')->with('flash_message_success','Η ώρα προστέθηκε με Επιτυχία!');  //Time added successfully!

        }
        if (Session::has('floristSession')) {
            $floristId = Session::get('floristId');
            $timetable = DB::table('timetable')->where(['florist_id'=>Session::get('floristId')])->orderBy('fromHour', 'asc')->get();
        }else{
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
                $timetable = DB::table('timetable')->where(['florist_id'=>Session::get('adminId')])->orderBy('fromHour', 'asc')->get();
            }else{
                return redirect('/florist');
            }
        }
        // dd($timetable);

        $orders = orders::where(['florist_id'=>$floristId,'showOrder'=>1])->get();
        
        Session::put('orders',$orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }
        $hours = [
            '01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','19','20','21','22','23','24'
        ];


        $monday = DB::table('timetable')->where(['day'=>'Δευτέρα','florist_id'=>$floristId ])->first();
        $tuesday = DB::table('timetable')->where(['day'=>'Τρίτη','florist_id'=>$floristId])->first();
        $wednesday = DB::table('timetable')->where(['day'=>'Τετάρτη','florist_id'=>$floristId])->first();
        $thursday = DB::table('timetable')->where(['day'=>'Πέμπτη','florist_id'=>$floristId])->first();
        $friday = DB::table('timetable')->where(['day'=>'Παρασκευή','florist_id'=>$floristId])->first();
        $saturday = DB::table('timetable')->where(['day'=>'Σάββατο','florist_id'=>$floristId])->first();
        $sunday = DB::table('timetable')->where(['day'=>'Κυριακή','florist_id'=>$floristId])->first();

        return view('admin.florist.timetable')->with(compact('timetable','hours','monday','tuesday','wednesday','thursday','friday','saturday','sunday'));
    }
    public function WorkingHours(Request $request){
        if($request->isMethod('post')){
            if (Session::has('floristSession')) {
                $florist_id = Session::get('floristId');
            }else{
                if (Session::has('adminId')) {
                    # code...
                    $florist_id = Session::get('adminId');
                }else{
                    return redirect('/florist');
                }
            }
            $check = 0;
            $data = $request->all();
             // dd($data);   
                    $day = DB::table('working_hours')->where(['day'=>$data['day'],'florist_id'=>$florist_id])->first();
                    if ($day != null ) {
                        # code...
                        // if ($day->fromHour <  ) {
                        //     # code...
                        // }
                        if ($data['timeFrom'] < $day->toHour  ) {
                            // dd('your second time should be greater then first');
                            return redirect(app()->getLocale().'/florist/working-hours')->with('flash_message_error','"'.$data['day'].'" your second time should be greater then previous time');
                            
                        }
                    }

                    $dayCount = DB::table('working_hours')->where(['day'=>$data['day'],'florist_id'=>$florist_id])->count();
                    if($dayCount==2){
                        $check = 1;
                        Session::put('flash_error','"'.$data['day'].'" is already exist please enter another day');
                        return redirect(app()->getLocale().'/florist/working-hours')->with('flash_message_error','"'.$data['day'].'" is already exist please enter another day');
                    
                    }
                    if ( $data['timeTo'] < $data['timeFrom'] ) {
                        return redirect(app()->getLocale().'/florist/working-hours')->with('flash_message_error','"'.$data['day'].'" time to should be greater then time from');
                        
                    }
                    // dd($data['metersTo'][$key]);
                    
                    DB::table('working_hours')->insert(['fromHour'=>$data['timeFrom'],
                    'toHour'=>$data['timeTo'],'florist_id'=>$florist_id,'day'=>$data['day']]); 
            
                    // return redirect('/admin/florist-profile')->with('flash_message_success','Shipping charges added successfully!');

            
            return redirect(app()->getLocale().'/florist/working-hours')->with('flash_message_success','Working hour added successfully!');

        }
        if (Session::has('floristSession')) {
            $floristId = Session::get('floristId');
            $timetable = DB::table('working_hours')->where(['florist_id'=>Session::get('floristId')])->orderBy('fromHour', 'asc')->get();
        }else{
            if (Session::has('adminId')) {
                # code...
                $floristId = Session::get('adminId');
                $timetable = DB::table('working_hours')->where(['florist_id'=>Session::get('adminId')])->orderBy('fromHour', 'asc')->get();
            }else{
                return redirect('/florist');
            }
        }
        // dd($timetable);

        $orders = orders::where(['florist_id'=>$floristId,'showOrder'=>1])->get();
        Session::put('orders',$orders);
        // foreach ($orders as $key => $order) {
        //             # code...
        //     if ($order->order_status=="New") {
        //         Alert::info('You have recived new order', 'Change Order Status');
                            
        //     }
        // }
        $hours = [
            '08','09','10','11','12','13','14','15','16','17','19','20','21','22','23','24'
        ];
        // if(Session::has('flash_error')){
        //     dd('session');
        // }else{
        //     dd('no session');
        // }
            // dd('work');
        return view('admin.florist.workingHours')->with(compact('timetable','hours'));
    }

    public function editTimetable($en,Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            $hoursFromCount = DB::table('timetable')->where(['fromHour'=>$data['timeFrom'],'florist_id'=>$id])->count();
            if($hoursFromCount>0){
                return redirect(app()->getLocale().'/florist/timetable/')->with('flash_message_error','"'.$data['timeFrom'].' hours From" is already exist please enter another hours From');
                    
            }
            $hoursToCount = DB::table('timetable')->where(['toHour' =>$data['timeTo'],'florist_id'=>$data['florist_id']])->count();
            if($hoursToCount>0){
                return redirect(app()->getLocale().'/florist/timetable')->with('flash_message_error','"'.$data['timeTo'].' hours To" is already exist please enter another Hours to');
            }
            // foreach($data['time'] as $key=>$time){
                DB::table('timetable')->where(['id'=>$id])->update(['fromHour'=>$data['timeFrom'],'toHour'=>$data['timeTo']
                ]);
            // }
            return redirect(app()->getLocale().'/florist/timetable')->with('flash_message_success','Time Updated!!!');
        }
        //get method

        $timeTable = DB::table('timetable')->where(['id'=>$id])->first();
        $hours = [
            '01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','19','20','21','22','23','24'
        ];
        $fromHours_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($hours as $hour){
            if($hour==$timeTable->fromHour){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $fromHours_dropdown .= "<option value='".$hour."' ".$selected.">".$hour.":00 </option>";
            
        }
        $toHours_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($hours as $hour){
            if($hour==$timeTable->toHour){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $toHours_dropdown .= "<option value='".$hour."' ".$selected.">".$hour.":00 </option>";
            
        }
        return view('admin.florist.edit_timeTable')->with(compact('timeTable','fromHours_dropdown','toHours_dropdown'));
    }
    public function editWorkingHour($en,Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();
            $dayCount = DB::table('working_hours')->where(['fromHour'=>$data['day'],'florist_id'=>$id])->count();
            if($dayCount>0){
                return redirect(app()->getLocale().'/florist/working-hours/')->with('flash_message_error','"'.$data['day'].' day " is already exist please enter another day');
                    
            }
            // foreach($data['time'] as $key=>$time){
                DB::table('working_hours')->where(['id'=>$id])->update(['fromHour'=>$data['timeFrom'],'toHour'=>$data['timeTo']
                ]);
            // }s
            return redirect(app()->getLocale().'/florist/working-hours')->with('flash_message_success','working hour Updated!!!');
        }
        //get method

        $timeTable = DB::table('working_hours')->where(['id'=>$id])->first();
        $hours = [
            '08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00','24:30'
        ];

        $days = ['Δευτέρα','Τρίτη','Τετάρτη','Πέμπτη','Παρασκευή','Σάββατο','Κυριακή'];

        $day_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($days as $day){
            if($day==$timeTable->day){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $day_dropdown .= "<option value='".$day."' ".$selected.">".$day." </option>";
            
        }

        $fromHours_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($hours as $hour){
            if($hour==$timeTable->fromHour){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $fromHours_dropdown .= "<option value='".$hour."' ".$selected.">".$hour." </option>";
            
        }
        $toHours_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($hours as $hour){
            if($hour==$timeTable->toHour){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $toHours_dropdown .= "<option value='".$hour."' ".$selected.">".$hour." </option>";
            
        }
        return view('admin.florist.edit_workingHours')->with(compact('timeTable','fromHours_dropdown','toHours_dropdown','day_dropdown','days'));
    }
    public function deleteTime($en,$id=null){
        DB::table('timetable')->where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','Time has deleted!');
    }
    

    public function deleteWorkingHour($en,$id=null){
        DB::table('working_hours')->where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error','working hour has deleted!');
    }

    public function updateFeatured($en,Request $request,$id=null){
        $data = $request->all();
        Florist::where('id',$data['id'])->update(['featured_status'=>$data['status']]);

    }


}//end of controller
