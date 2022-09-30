<?php

namespace App\Http\Controllers;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeUsController extends Controller
{
    public function store(Request $request){
        $sub =new Subscribe;
        $sub ->email=$request->email;
        $sub ->save();
        return redirect()->back()->with('success','For subscribe us ');
    }
}
