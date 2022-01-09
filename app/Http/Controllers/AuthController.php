<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\Gmail;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login()
    {   
        $title = "Login";
        return view('frontend.login', compact('title'));
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin')
                        ->with('status','You have Successfully loggedin');
        }
  
        return redirect("login")->with('status','Oppes! You have entered invalid credentials');
    }

    public function register()
    {   
        $title = "Register";
        return view('frontend.register', compact('title'));
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|unique:users',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $user_id = rand(00000,99999);
        $email = $request->input('email');
        $token = md5($request->input('email'));
        $details = [
            'user_id' => $user_id,
            'token' => $token,
        ];
        Mail::to($email)->send(new Gmail($details));
        if (Mail::failures()) {
            return redirect("register")->with('status', 'Error!, Email could not be sent now');
       }else{
            
        $user = User::create([
            'first_name'=> $request->input('first_name'),
            'last_name'=> $request->input('last_name'),
            'phone'=> $request->input('phone'),
            'email'=> $request->input('email'),
            'username'=> $request->input('username'),
            'user_id'=> $user_id,
            'acc_status'=> 0,
            'password'=> Hash::make($request->input('username')),
        ]);
         
        
        return redirect("login")->with('status', 'Great! successfully Registered, Please Confirm your email ');
        }
    }

    public function verifyaccount($user_id, $token)
    {       
        $user = User::where('user_id', $user_id)->first();
        $token2 = md5($user->email);
        if($token == $token2){
            $post = DB::table('users')
            ->where('user_id', $user_id)
            ->update([
                'acc_status'=> 1,
            ]);
            return redirect("login")->with('status','Email Verified!, Please Login');
        }else{

            dd('token does not match ');
            return redirect("login")->withSuccess('Error! The token does not match');
        }
 
       
  
        
    }
}
