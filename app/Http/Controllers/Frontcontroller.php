<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\AddToCart;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Multiimage;
use App\Models\Feedback;
use App\Models\Wishlist;
use App\Models\Enquiry;
use App\Models\Setting;

use Auth;

// use App\Controllers\CategoryController;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{

   
    public function product_s(Request $request, $categ = null)
    {
        if (isset($request->search)) {
            $search = $request->search;

            if(isset($request->categ)){
                $catee = $request->categ;
                $product = Product::where('p_name', 'LIKE', "%{$search}%")
                ->where('cate_id',$catee)
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->where('delete_status', 0)
                ->get()
                ->toarray();
            }else{
                $product = Product::where('p_name', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->where('delete_status', 0)
                ->get()
                ->toarray();
            }

            
            $cate = Category::where('delete_status', 0)->get();
            if (Auth::check()) {
                $userid = Auth()->user()->id;
                $newproduct = [];
                foreach ($product as $p) {
                    $product_id = $p['id'];
                    if (
                        Wishlist::where('prod_id', $product_id)
                            ->where('user_id', $userid)
                            ->where('delete_status', 0)
                            ->get()
                            ->count() > 0
                    ) {
                        $p = array_merge($p, ['wishlist' => true]);
                    } else {
                        $p = array_merge($p, ['wishlist' => false]);
                    }
                    array_push($newproduct, $p);
                }
                $product = json_decode(json_encode($newproduct));
            } else {
                $product = json_decode(json_encode($product));
            }
            $setting = Setting::where('delete_status',0)->first();

            return view('frontend.products', compact('cate', 'search', 'product','categ','setting'));
        } 
        if ($categ != null) {
            $search = $request->search;
            $product = Product::where('delete_status', 0)
                ->where('cate_id', $categ)
                ->get()
                ->toarray();
            $cate = Category::where('delete_status', 0)->get();
            if (Auth::check()) {
                $userid = Auth()->user()->id;
                $newproduct = [];
                foreach ($product as $p) {
                    $product_id = $p['id'];
                    if (
                        Wishlist::where('prod_id', $product_id)
                            ->where('user_id', $userid)
                            ->where('delete_status', 0)
                            ->get()
                            ->count() > 0
                    ) {
                        $p = array_merge($p, ['wishlist' => true]);
                    } else {
                        $p = array_merge($p, ['wishlist' => false]);
                    }
                    array_push($newproduct, $p);
                }
                $product = json_decode(json_encode($newproduct));
            } else {
                $product = json_decode(json_encode($product));
            }
            $setting = Setting::where('delete_status',0)->first();

            return view('frontend.products', compact('cate', 'search', 'product','categ','setting'));
        }

        $search = $request->search;

        $product = Product::where('delete_status', 0)
            ->get()
            ->toarray();
        $cate = Category::where('delete_status', 0)->get();
        if (Auth::check()) {
            $userid = Auth()->user()->id;
            $newproduct = [];
            foreach ($product as $p) {
                $product_id = $p['id'];
                if (
                    Wishlist::where('prod_id', $product_id)
                        ->where('user_id', $userid)
                        ->where('delete_status', 0)
                        ->get()
                        ->count() > 0
                ) {
                    $p = array_merge($p, ['wishlist' => true]);
                } else {
                    $p = array_merge($p, ['wishlist' => false]);
                }
                array_push($newproduct, $p);
            }
            $product = json_decode(json_encode($newproduct));
        } else {
            $product = json_decode(json_encode($product));
        }
        $setting = Setting::where('delete_status',0)->first();

        return view('frontend.products', compact('cate', 'search', 'product','categ','setting'));
    }

   public function product_detail($id){
    
    $product = Product::where('id', $id)
    ->get()
    ->toarray();

if (Auth::check()) {
    $userid = Auth()->user()->id;
    $newproduct = [];
    foreach ($product as $p) {
        // return $p;
        $product_id = $p['id'];
        if (
            Wishlist::where('prod_id', $product_id)
                ->where('user_id', $userid)
                ->where('delete_status', 0)
                ->get()
                ->count() > 0
        ) {
            $p = array_merge($p, ['wishlist' => true]);
        } else {
            $p = array_merge($p, ['wishlist' => false]);
        }
        array_push($newproduct, $p);
    }
    $product = json_decode(json_encode($newproduct[0]));
} else {
    $product = json_decode(json_encode($product[0]));
}
    $img = Multiimage::where('product_id', $id)->get();
    $setting = Setting::where('delete_status',0)->first();
    return view('frontend.product_detail',compact('product','img','setting'));
   }

   public function about(){
    $feedback = Feedback::where('delete_status',0)->get();
    $setting = Setting::where('delete_status',0)->first();
    return view('frontend.about',compact('feedback','setting'));
   }

   public function contact(){
    $setting = Setting::where('delete_status',0)->first();
    return view('frontend.contact',compact('setting'));
   }
   public function header(){
    $setting = Setting::where('delete_status',0)->first();
    return view('frontend.include.header',compact('setting'));
   }

   public function gallery(){
    $setting = Setting::where('delete_status',0)->first();
    $gallery = Gallery::where('delete_status',0)->get();
    return view('frontend.gallery',compact('gallery','setting'));
   }

   public function add_cart(){
    $setting = Setting::where('delete_status',0)->first();
    return view('frontend.add_cart',compact('setting'));
   }
 

   public function design(){

    return view('frontend.design_copy');
   }

   public function home()
   {
      
    $setting = Setting::where('delete_status', 0)->first();
    $feedback = Feedback::where('delete_status', 0)->get();
    $top_product = Product::where('top_product',1)->where('delete_status',0)->get();
    // return $banner;
    $cate = Category::where('delete_status', 0)->get();
    $product = Product::where('delete_status', 0)
        ->get()
        ->toarray();
    if (Auth::check()) {
        $userid = Auth()->user()->id;
        $newproduct = [];
        foreach ($product as $p) {
            $product_id = $p['id'];
            if (
                Wishlist::where('prod_id', $product_id)
                    ->where('user_id', $userid)
                    ->where('delete_status', 0)
                    ->get()
                    ->count() > 0
            ) {
                $p = array_merge($p, ['wishlist' => true]);
            } else {
                $p = array_merge($p, ['wishlist' => false]);
            }
            array_push($newproduct, $p);
        }
        $product = json_decode(json_encode($newproduct));
    } else {
        $product = json_decode(json_encode($product));
    }

    

      
        return view ('frontend.index',compact('cate','product','feedback','setting','top_product'));
   }

   public function passforget()
   {
       return view('frontend.forget-password');
   }
   public function profile()
   {
       $setting = Setting::where('delete_status',0)->first();
       $user = User::where('user_type', 'customer')->get();
       return view('frontend.profile', compact('user','setting'));
   }
   function update(Request $request)
   {
       $users = User::where('id', Auth::id())->first();
       $users->name = $request->name;
       $users->email = $request->email;
       $users->phone = $request->phone;
       $users->address1 = $request->first_address;
       $users->city = $request->city;
       $users->zipcode = $request->pcode;
       $users->update();
       return redirect()
           ->back()
           ->with('msg', 'Profile Updated Successfully!');
   }

   public function Contact_store(Request $request)
   {
       $enquiry =new Enquiry;
       $enquiry ->name=$request->name;
       $enquiry ->email=$request->email;
       $enquiry ->contact=$request->contact;
       $enquiry ->message=$request->message;
       $enquiry ->save();
       return redirect()->back()->with('success','We will contact you soon !!');

   }

   
}