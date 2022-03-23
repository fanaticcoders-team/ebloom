<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    
    public function register(Request $request){
        // return response()->json(['message' => 'User has been registered!'],200);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required',
        ]);
        $data = $request->all();

            if ($validator->passes()) {
                $userCount = User::where('email',$data['email'])->count();
                if($userCount>0){
                    // return response()->json('error');
                    return response()->json([
                        'error' => ['Email already exists!']
                    ],401);
                    // return redirect()->back()->with('flash_message_error','Email is already exist');
                }else{
                            
                    $user = new User([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                        'points' => "20",
                    ]);
                    
                    $user->save();
		    $userDetails = User::find($user->id);
                    return response()->json(['success' => $userDetails],200);

                    
                }
            }
            return response()->json([
                'error' => $validator->errors()->all()
            ],401);


    }

    // public function login(Request $request){
    //     $request->validate([
    //         'email'=> 'required',
    //         'password'=> 'required|string',

    //     ]);
    //     $credentials = request(['email','password']);
        
    //     if (!Auth::attempt($credentials)) {
    //         # code...
    //         return response()->json(['message' => 'Unauthorized'],401);

    //     }
    //     $user = $request->user();
    //     $tokenresult = $user->createToken('Personal Access Token');
    //     $token = $tokenresult->token;
    //     $token->expires_at = Corbon::now()->addWeeks(1);
    //     $token->save();

    //     return response()->json(['data'=> [
    //         'user'=>Auth::user(),
    //         'access_token'=>$tokenresult->accessToken,
    //         'token_type'=> 'Bearer',
    //         'expires_at'=> Corbon::parse($tokenresult->token->expires_at)->toDateTimeString(),

    //     ]]);

    // }

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
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                $user = Auth::user();
                return response()->json(['success' => $user],200);

            }else{
                return response()->json([
                    'error' => ['Invalid email or password!']
                ],401);
            }
         }
         return response()->json([
             'error' => $validator->errors()->all()
         ],401);
        }
    }



}
