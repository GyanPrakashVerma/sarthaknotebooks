<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
// use App\Models\Product;
use Auth;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        // $user = Auth::user();
        $b=Order::find($id);
        // $order = Order::select('*')
        //     ->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')->get();
        // return $order;
        // return $b;
        $inv = OrderItem::select('*')
            ->leftJoin('products', 'order_items.product_id', '=', 'products.id')->where('order_id',$b->id)
            ->get();

        // return  $inv;
        return view('frontend.myPDF', compact('inv', 'b'));

        $pdf = PDF::loadView('frontend.myPDF');

        return $pdf->download('myPDF.pdf');
    }
}
