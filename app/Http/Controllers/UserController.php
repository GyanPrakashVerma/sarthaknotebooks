<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;
// use Session;
class UserController extends Controller
{
    function login(Request $request){
    //    return $request->email." hi ".$request->password;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'user_type' =>"customer"] )){
           
            // $request->session->regenerateToken();
            return redirect('/home');
           }
           return back()->with(['msg'=>"Invalid username/Password!"]);
    }
    function logout(){
        // Session::flush();
        
       Auth::logout();

        return redirect()->route('home');
    }

    function register(Request $request){
        $register = new User;
        $register->name=$request->name;
        $register->email=$request->email;
        $register->phone=$request->phone;
        $register->password=Hash::make($request->password);
        $register->save();
        return redirect()->route('home');
    }

   
}
