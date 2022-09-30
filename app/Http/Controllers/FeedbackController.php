<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $feedback=Feedback::where('delete_status',0)->get();
        return view('backend.Feedbacks.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.Feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = new Feedback;
        $feedback->Name=$request->fname;
        if ($request->image != null) {
            $feedback_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('feedback_img'), $feedback_img);
            $feedback->image = $feedback_img;
        }
        $feedback->email=$request->email;
        $feedback->subject=$request->subject;
        $feedback->message=$request->msg;
        $feedback->save();
    return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit( $feedback)
    {
        $feedback=Feedback::where('id',$feedback)->first();
        return view('backend.Feedbacks.edit',compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $feedback)
    {
        $feedback=Feedback::where('id',$feedback)->first();
        $feedback->Name=$request->fname;
        if ($request->image != null) {
            $feedback_img = time() . '.' . request()->image->getClientOriginalExtension();
            $request->image->move(('feedback_img'), $feedback_img);
            $feedback->image = $feedback_img;
        }
        $feedback->email=$request->email;
        $feedback->subject=$request->subject;
        $feedback->message=$request->msg;
        $feedback->status=$request->status;
        $feedback->save();
    return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($feedback)
    {
        $feedback=Feedback::where('id',$feedback)->first();
        $feedback->delete_status = 1;
        $feedback->save();
        return redirect()->route('testimonial.index')->with('success', ' Deleted sucessfully');
    }
}
