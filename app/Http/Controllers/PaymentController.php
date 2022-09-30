<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
     {
       return view('frontend.payment');
     }
     public function process(Request $request)
     {
         $payInfo = [
                   'user_id' => '1',
                   'product_id' => $request->product_id,
                   'r_payment_id' => $request->payment_id,
                   'amount' => $request->amount,
                ];
        Payment::insertGetId($payInfo);  
        return redirect('payment-success');
     }
     public function success(Request $request)
     {
        return $request;
       return view('razorpay.success');
     }
}
