<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate=Category::where('delete_status',0)->get();
        return view('backend.category.index',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new Category;
        $category->cate_name=$request->cate;
        if ($request->image != null) {
            $cate_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('cate_img'), $cate_img);
            $category->image = $cate_img;
        }
        $category->description=$request->desc;
        $category->save();
        return redirect()->route('category.index')->with("success ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->cate_name=$request->cate;
        if ($request->image != null) {
            $cate_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('cate_img'), $cate_img);
            $category->image = $cate_img;
        }
        $category->description=$request->desc;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('category.index')->with("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete_status=1;
        $category->save();
        return redirect()->route('category.index')->with("success");
    }
}
