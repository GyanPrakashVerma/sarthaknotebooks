<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Setting;
use Auth;
use Hash;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function page(){
        // User::create([
        //     'user_type'=>'Owner',
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin')
        // ]);
      $setting = Setting::where('delete_status',0)->first();
        
        return view('backend.login',compact('setting'));
    }
    function authentic(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password] )){
           
            // $request->session->regenerateToken();
            return redirect('/admin/dashboard');
           }
           return back()->with(['msg'=>"Invalid username/Password!"]);
        
    //    
    }
    
    function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('/adminlogin');
    }
}
