<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Setting;
use Illuminate\Http\Request;
use DB;
use Auth;

class AddToCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $=::where('delete_status',0)->get();
        $user = Auth::user();
        $setting = Setting::where('delete_status',0)->first();
        // return $user->id;
        $cart = AddToCart::select('add_to_carts.id as id','add_to_carts.quantity as quantity','products.p_mainimg as p_mainimg','products.p_name as p_name','products.p_price as p_price')->leftJoin('products', 'add_to_carts.product_id', '=', 'products.id')->where("user_id", $user->id)->where("add_to_carts.delete_status",0)->get();
        // return $cart;
        return view('frontend.cart',compact('cart','user','setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('frontend.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carw= AddToCart::where('user_id',$request->user_id)->where('delete_status', 0)->get();
        $cartw= AddToCart::where('user_id',$request->user_id)->where('product_id',$request->product_id)->where('delete_status', 0)->get();
       
        if($cartw->count()>0){

$www = AddToCart::find($cartw->first()->id);

$www->quantity = $www->quantity +1;
$status = $www->update();
            

            return ['status'=>$status,'msg'=>'message, Your product already exit quantity increase by 1 in cart ! ','cart_count'=>$carw->count()];
        }else
           {
            // return $request;
       $cart=new AddToCart;
       $cart->product_id=$request->product_id;
       $cart->user_id=$request->user_id;
       $cart->quantity=$request->quantity;
       $status =  $cart->save();

       
       return ['status'=>$status,'msg'=>'message, Product Added Successfully','cart_count'=>$carw->count()];
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function show(AddToCart $addToCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function edit(AddToCart $addToCart)
    {
        // return view('frontend.cart',compact('addToCart'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$addToCart)
    {
        $addToCart1=AddToCart::find($addToCart);
        $addToCart1->quantity=$request->quantity;
        $addToCart1->save();
        // return $addToCart1;

         return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddToCart  $addToCart
     * @return \Illuminate\Http\Response
     */
    public function destroy($addToCart)
    {
        $addToCart=AddToCart::find($addToCart);
        $addToCart->delete_status=1;
        $addToCart->save();
        return  redirect()->route('cart.index');
    }
    public function deleteall()
    {
        // DB::table('add_to_carts')->truncate();
        $item=AddToCart::where('user_id',Auth::user()->id)->get();
        $item->each->delete();
        return  redirect()->back();
    }
}
