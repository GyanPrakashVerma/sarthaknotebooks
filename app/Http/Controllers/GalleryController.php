<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::where('delete_status',0)->get();
        return view('backend.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        if ($request->image != null) {
            $gallery_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('gallery_img'), $gallery_img);
            $gallery->image = $gallery_img;
        }
        $gallery->save();
        return redirect()->route('gallery.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        // return $gallery;
        return view('backend.gallery.edit', compact('gallery'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        
        if ($request->image != null) {
            $gallery_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('gallery_img'), $gallery_img);
            $gallery->image = $gallery_img;
        }
        $gallery->save();
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete_status=1;
        $gallery->save();
        if(file_exists('gallery_img/'.$gallery->image)){
         unlink('gallery_img/'.$gallery->image);}
        return redirect()->route('gallery.index')->with('success','deleted sucessfully');
    
    }
}
