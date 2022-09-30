<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Auth;
use App\Models\OrderItem;
use App\Models\Setting;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allorder()
    {
        $user = Auth::user();
        
        $order = Order::where('user_id',Auth::user()->id)->get();
        // return $order;
        $item=[];
        $i = 0;
        foreach($order as $orders){
  // return is_array($item[$i]);
            // array_push($item,json_decode(json_encode( $orders)));
            $newitem = $orders;
            $newitem['items'] = OrderItem::select('*')->leftJoin('products','order_items.product_id','=','products.id')->where('order_id',$orders->id)->get();
            // $newitem.od = $orders;
            array_push($item,$newitem);

            $i++;
        }
        // return $item;
    
        // $order = Order::select('*')->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')->leftJoin('products', 'order_items.product_id', '=', 'products.id')->where('orders.user_id', $user->id)->get();
        // return $order;
        $setting = Setting::where('delete_status',0)->first();

        return view('frontend.orders', compact('user','item','setting'));
    }

    public function order_cancel($id)
    {
        $order = Order::Find($id);
        $order->order_status = 0;
        $order->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders');
    }
}
