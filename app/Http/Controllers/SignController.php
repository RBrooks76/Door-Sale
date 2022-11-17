<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\User;
use Session;

class SignController extends Controller
{
    //
    public $message = [
        'email'  => "The :attribute field don't match :email style.",
    ];

    public function onLogin(Request $request){
        $is = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();
        if($is){
            Session::put('email', $request->email);
            Session::put('isLogin', $is->id);
            return redirect()->route('toHome');
        } else {
            return redirect()->route('toLogin');
        }
    }

    public function onSignup(Request $request){
        $is = User::where('email', $request->email)
                ->first();

        if(!$is){
            if($request->password === $request->cpassword ){
                User::create([
                    // 'email'     => $valid['email'],
                    // 'password'  => $valid['password'],
                    'email'     => $request->email,
                    'password'  => $request->password,
                ]);

                return redirect()->route('toSignup');
            } else {
                return redirect()->route('toSignup')->with('message', "Your password don't match");
            }
        } else {
            return redirect()->route('toSignup')->with('message', 'The same email already exits.');
        }
    }

    public function onLogout(){
        Session::forget('email');
    }
}
