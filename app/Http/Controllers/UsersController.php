<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Products;
use App\Florist;
use Auth;
use DB;
use Session;
use Validator;
use Mail;
use App\Mail\ForgetPasswordMail;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function userLoginRegister(){
        return view('wayshop.users.login_register');
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'name' => 'required',
                 'password' => 'required',
                ]);
            // echo "<pre>";print_r($data);die;
        if ($validator->passes()) {
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
                // return response()->json('error');
                return response()->json([
                    'error' => ['Το email ήδη χρησιμοποιείται']
                ]);
                // return redirect()->back()->with('flash_message_error','Email is already exist');
            }else{
                //adding user in table
                $user = new User; 
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->points = '20';
                $user->save();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    Session::put('frontSession',$data['email']);
                    return response()->json('success');
                    // return redirect('/welcome');
                }
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
       return redirect(app()->getLocale().'/welcome');
   }
   public function login(Request $request){
       if($request->isMethod('post')){
           $data = $request->all();
           $validator = Validator::make($request->all(), [
            'email' => 'required|email',
             'password' => 'required',
            ]);
            // dd($data);
        //    echo "<pre>";print_r($data);die;
        // if ($validator->passes()) {
        if ($validator->passes()) {
        //    echo "<pre>";print_r($data);die;
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            Session::put('frontSession',$data['email']);

            // return redirect()->back();
            return response()->json('success');
        }else{
            // return response()->json('Invalid username and password!');
            return response()->json([
                'error' => [
                    'email' => 'Invalid email and password!'
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
            $userCount = User::where('email',$data['email'])->count();
            if($userCount==0){
                // return response()->json('error');
                return response()->json([
                    'error' => ['Your email not exists']
                ]);
                // return redirect()->back()->with('flash_message_error','Email is already exist');
            }else{

                $password = mt_rand( 1000000000, 9999999999 );
                $pass = bcrypt($password);
                User::where('email',$data['email'])->update(['password'=>$pass]);
            
                Mail::to($data['email'])->send(new ForgetPasswordMail($password));        
            
                return response()->json('success'.$userCount);
            }
        }
        return response()->json([
            'error' => $validator->errors()->all()
        ]);
        }

    }

   public function account(Request $request){
    if (Auth::check()) {
        $user_email = Auth::user()->email;
        $session_id = Session::get('session_id');
        $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
            $query->where('user_email', '=', $user_email)
                  ->orWhere('session_id', '=', $session_id);
        })->get();
        // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
    }else{
        $session_id = Session::get('session_id');
        $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
    }
    // dd($session_id);
    foreach($userCart as $key=>$product){
        $productDetails = Products::where(['id'=>$product->product_id])->first();
        $userCart[$key]->image = $productDetails->image;
    }
       return view('wayshop.users.account')->with(compact('userCart'));
   }
   //------------------wishlist section---------
   public function wishList(){
        $wish_list = DB::table('wish_list')->where(['user_id'=>Auth::user()->id])->get();
        $florists = Florist::get();
        // if (Auth::check()) {
        //     $user_email = Auth::user()->email;
        //     $session_id = Session::get('session_id');
        //     $userCart= DB::table('cart')->where(function ($query) use ($user_email,$session_id) {
        //         $query->where('user_email', '=', $user_email)
        //               ->orWhere('session_id', '=', $session_id);
        //     })->get();
        //     // $userCart = DB::table('cart')->where('user_email',$user_email)->get();
        // }else{
        //     $session_id = Session::get('session_id');
        //     $userCart = DB::table('cart')->where(['session_id'=>$session_id])->get();
        // }
        // // dd($session_id);
        // foreach($userCart as $key=>$product){
        //     $productDetails = Products::where(['id'=>$product->product_id])->first();
        //     $userCart[$key]->image = $productDetails->image;
        // }
        // return view('wayshop.users.wish_list')->with(compact('wish_list','florists',));
        return view('favorite_store')->with(compact('wish_list','florists',));
            
    }

   public function addToWishList($en,$slug){
        // $product = Products::where(['slug'=>$slug])->first();
        $florist = Florist::where(['slug'=>$slug])->first();

        if ($florist!=null) {
            # code...
            DB::table('wish_list')->insert(['product_id'=>$florist->id,'user_id'=>Auth::user()->id
                ]);
            return redirect()->back()->with('flash_message_success','Product has been added in wish list');
        }else{
            return redirect()->back();
        }

   }
    public function deleteWishList($en,$slug){
        $florist = Florist::where(['slug'=>$slug])->first();
        if ($florist!=null) {
            DB::table('wish_list')->where(['product_id'=>$florist->id,'user_id'=>Auth::user()->id])->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
    //end wish list
   public function changePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $old_pwd = User::where('id',Auth::user()->id)->first();
            $current_pwd = $data['current_pass'];
            if(Hash::check($current_pwd,$old_pwd->password)){
                $new_pwd = bcrypt($data['password']);
                User::where('id',Auth::user()->id)->update(['password'=>$new_pwd]);
                return redirect()->back()->with('flash_message_success','Password has been Updated Successfully!');
            }else{
                return redirect()->back()->with('flash_message_error','Your current password in valid!');
            }
        }
       return view('wayshop.users.change_password');
   }

   public function changeAddress(Request $request){
    
    $user_id = Auth::user()->id;
    $user_email =Auth::user()->email;
    $userDetails = User::find($user_id);

    if ($request->isMethod('post')) {
        
        $data=$request->all();
        // dd($data);
        $user = User::find($user_id);
        $user->email = $user_email;
        $user->name = $data['name'];
        // $user->address = $data['address'];
        // $user->city = $data['city'];
        // $user->state = $data['state'];
        // $user->pincode = $data['pincode'];
        $user->mobile = $data['mobile'];
        $user->save();
        return redirect()->back()->with('flash_message_success','Profile has been Updated Successfully!');
    }

    return view('wayshop.users.change_address')->with(compact('userDetails'));
}

}
