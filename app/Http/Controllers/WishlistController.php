<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Setting;
use Illuminate\Http\Request;
use Auth;
use DB;
class WishlistController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // return $user->id;
        $wishlists = Wishlist::select('*')->leftJoin('products', 'wishlists.prod_id', '=', 'products.id')->where("user_id", $user->id)->where("wishlists.delete_status",0)->get();
        // $wishlists = Wishlist::select(*)->leftJoin('products', 'wishlists.prod_id', '=', 'products.id')->where("user_id", $user->id)->where("wishlists.delete_status",0)->get();
        $setting= Setting::where('delete_status',0)->first();
        // return $wishlists;
        // $wishlists = Wishlist::where("delete_status",0)->get();
        return view('frontend.wishlist', compact('user', 'wishlists','setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $status=Wishlist::where('user_id',Auth::user()->id)
        // ->where('prod_id',$request->prod_id)
        // ->first();
        
        // if(isset($status->user_id) and isset($request->product_id))
        //    {
        //        return redirect()->back()->with('flash_messaged', 'This item is already in your
        //        wishlist!');
        //    }
        //    else
        //    {
            // return $request;
               $wishlist = new Wishlist;
        
               $wishlist->user_id = $request->userr_id;
               $wishlist->prod_id = $request->prod_id;
               $wishlist->save();
        
               return $wishlist;
           
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($wishlist)
    {
      
        $wishlist=Wishlist::find($wishlist);
        $wishlist->delete_status=1;
        $wishlist->save();
        // return $wishlist;
        return  redirect()->route('wishlist.index');
    }
    public function deleteall()
    {
        // DB::table('wishlists')->truncate();
        // // $delCart->delete_status=1;
        // // $delCart->save();
        $item=Wishlist::where('user_id',Auth::user()->id)->get();
        $item->each->delete();
        return  redirect()->route('wishlist.index');
    }
}
