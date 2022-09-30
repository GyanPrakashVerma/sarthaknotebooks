<?php

namespace App\Http\Controllers;
use App\Models\AddToCart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Auth;
class CheckoutController extends Controller
{
    public function checkout()
    {
        $user = Auth::user();
        $setting = Setting::where('delete_status',0)->first();
        $cart = AddToCart::select('*')->leftJoin('products', 'add_to_carts.product_id', '=', 'products.id')->where("user_id", $user->id)->where("add_to_carts.delete_status",0)->get();
        return view('frontend.checkout',compact('cart','user','setting'));
    }

   

    public function order(Request $request) 
    {
        // return $request;
        // return $request;
        $user=Auth::user();
        $order = new Order;
        $order->user_id=$user->id;
        $order->total_price=$request->total;
        $order->name=$request->name;
        $order->email=$request->email;
        $order->phone=$request->phone;
        $order->address1=$request->first_address;
        $order->address2=$request->second_address;
        $order->city=$request->city;
        $order->state=$request->state;
        $order->country=$request->country;
        $order->zipcode=$request->pcode;
        if(isset($request->razorpay_payment_id)){
        $order->payment_id=$request->razorpay_payment_id;
        $order->payment_mode="online";
        $order->payment_status="paid";
        }
        else{
            $order->payment_id=" ";
            $order->payment_mode="COD"; 
            $order->payment_status="pending";

        }
        // $order->order_status=$request->pcode;
        $order->message=$request->message;
        $order->tracking_no='welcome'.rand(1111,9999);
        $order->save();

        $cartitems=AddToCart::select('add_to_carts.product_id as product_id','add_to_carts.quantity as quantity','products.p_price as p_price')->leftJoin('products', 'add_to_carts.product_id', '=', 'products.id')->where("user_id", $user->id)->where("add_to_carts.delete_status",0)->get();
        foreach($cartitems as $cart){
            OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$cart->product_id,
                'quantity'=>$cart->quantity,
                'price'=>$cart->p_price,
            ]);

            $prod=Product::where('id',$cart->product_id)->first();
            $prod->pqty=  ($prod->pqty) - ($cart->quantity);
            $prod->update();
        }

        if(Auth::user()->address1 == null){
            $users=User::where('id',Auth::id())->first();
            $users->name=$request->name;
            $users->email=$request->email;
            $users->phone=$request->phone;
            $users->address1=$request->first_address;
            $users->address2=$request->second_address;
            $users->city=$request->city;
            $users->state=$request->state;
            $users->country=$request->country;
            $users->zipcode=$request->pcode;
            $users->message=$request->message;
            $users->update();
        }
        
        $item=AddToCart::where('user_id',Auth::user()->id)->get();
        $item->each->delete();


        return redirect()->route('orders')->with('message', 'Thank For Shopping from us');


    }
}
