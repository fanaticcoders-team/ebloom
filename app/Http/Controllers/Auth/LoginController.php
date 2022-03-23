<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator,Redirect,Response,File;

use Socialite;
use Auth;
use Exception;
use App\User;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    
    public function redirectToGoogle()
    {
        
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        // second login method
        // dd("here");
        // try {
        //     $user = Socialite::driver('google')->user();
        // } catch (\Exception $e) {
        //     dd($e);
        //     return redirect('/login');
        // }
        // // only allow people with @company.com to login
        // // if(explode("@", $user->email)[1] !== 'company.com'){
        // //     return redirect()->to('/');
        // // }
        // dd('here');
        // // check if they're an existing user
        // $existingUser = User::where('email', $user->email)->first();
        // if($existingUser){
        //     // log them in
        //     auth()->login($existingUser, true);
        // } else {
        //     // create a new user
        //     $newUser                  = new User;
        //     $newUser->name            = $user->name;
        //     $newUser->email           = $user->email;
        //     $newUser->google_id       = $user->id;
        //     $newUser->save();
        //     auth()->login($newUser, true);
        // }
        // return redirect()->to('/home');

        
        // first login method
        try {
            
            $user = Socialite::driver('google')->stateless()->user();
            dd($user); 

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                 return redirect('/welcome');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                ]);

                Auth::login($newUser);
                dd('here');
                return redirect()->back();
            }

        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect('auth/google');
        }

    }
    // end of google oauth

    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $create['name'] = $user->getName();
            $create['email'] = $user->getEmail();
            $create['facebook_id'] = $user->getId();
            $makePass = $create['facebook_id'];
            // dd(bcrypt($makePass));
            // $2y$10$Kjn6Onxu6N0TevhEh4hytOKeJtllxhDZ8lNYmaRWraE./RE4exf5m
            // 2872942216261309
            // 2872942216261309
            $finduser = User::where('facebook_id', $create['facebook_id'])->first();
            if($finduser){
                // dd('dd find');

                if(Auth::attempt(['email'=>$create['email'],'password'=>$makePass])){
                    Session::put('frontSession',$create['email']??'dummy');

                    // dd('auth');
                    // return redirect('/welcome');
                    return redirect('/welcome');
                }
                // dd('outside auth');
                // Auth::loginUsingId($finduser->id);
                Auth::login($finduser);
                Session::put('frontSession',$create['email']??'dummy');

                return redirect('/welcome');
                // return response()->json('success');

                // return redirect()->back();
            }else{
                // dd('create new');
                $userModel = new User;
                $userModel->name = $create['name']??'';
                $userModel->email = $create['email']??'';
                $userModel->password = bcrypt($makePass)??'';
                $userModel->facebook_id = $create['facebook_id'];
                $userModel->points = '20';
                $userModel->save();
                // Auth::loginUsingId($userModel->id);
                Auth::login($userModel);
                Session::put('frontSession',$create['email']??'dummy');


                return redirect('/welcome');
                // return redirect()->back();
                // return response()->json('success');
                
            }
            // dd('call back');

        } catch (Exception $e) {
            dd($e);
            return redirect('/welcome');
        }
    }

} //end controller
