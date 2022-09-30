<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where('delete_status',0)->get();
        return view('backend.Setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = new Setting;
        $setting->company_name = $request->company_name;
        if ($request->image != null) {
            $setting_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('setting_img'), $setting_img);
            $setting->logo = $setting_img;
        }

        $setting->contact_no = $request->contact_no;
        $setting->contact_optional = $request->contact_optional;
        $setting->address = $request->address;
        $setting->email = $request->email;

        $setting->facebook_link = $request->facebook_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->insta_link = $request->insta_link;
        $setting->linkedin_link = $request->linkedin_link;
        $setting->pinterest_link = $request->pinterest_link;
        $setting->google_link = $request->google_link;
        $setting->f_about = $request->f_about;
        $setting->g_map = $request->g_map;
        $setting->save();
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('backend.Setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $setting->company_name = $request->company_name;
        if ($request->image != null) {
            $setting_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('setting_img'), $setting_img);
            $setting->logo = $setting_img;
        }
        $setting->contact_no = $request->contact_no;
        $setting->contact_optional = $request->contact_optional;
        $setting->address = $request->address;
        $setting->email = $request->email;

        $setting->facebook_link = $request->facebook_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->insta_link = $request->insta_link;
        $setting->linkedin_link = $request->linkedin_link;
        $setting->pinterest_link = $request->pinterest_link;
        $setting->google_link = $request->google_link;
        $setting->f_about = $request->f_about;
        $setting->g_map = $request->g_map;
        $setting->save();
        return redirect()->route('setting.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting->delete_status=1;
        $setting->save();
        return redirect()->route('setting.index')->with('success',' deleted sucessfully');
    }
}
