<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Multiimage;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::where('delete_status',0)->get();
        return view('backend.products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate=Category::where('delete_status',0)->get();
        return view('backend.products.create',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product =new Product;
        // $validator = $request->validate([
        //     'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        if ($request->pmimage != null) {
            $main_img = time() . '.' . request()->pmimage->getClientOriginalExtension();
            $request->pmimage->move(('main_products'), $main_img);
            $p_mainimg = $main_img;
            $image_upload = Product::create(["p_mainimg"=> $p_mainimg ,"cate_id"=>$request->cate,"p_name"=>$request->pname,"p_price"=>$request->pprice,"description"=>$request->desc,"discount"=>$request->pdis,"pqty"=>$request->pqty,"m_price"=>$request->mprice]);

        }




        // $files = array();
        // if($request->hasfile('pimage')) {
        //     foreach($request->file('pimage') as $image) {
        //         $name = time().rand(1,100).'.'.$image->extension();
        //         if($image->move(('products'), $name)) {
        //             $files[] = $name;
        //             $upload_status = Multiimage::create(["imageName" => $name,"product_id"=>$request->p_id]);
        //         }
        //     }
        //  }
        //  $product->save();
        return redirect()->route('product.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cate=Category::where('delete_status',0)->get();
        return view('backend.products.edit',compact('product','cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$product)
    {

       

        if ($request->pmimage != null) {
            $main_img = time() . '.' . request()->pmimage->getClientOriginalExtension();
            $request->pmimage->move(('main_products'), $main_img);
            $p_mainimg = $main_img;
            $image_upload = Product::find($product)->update(["p_mainimg"=> $p_mainimg ,"cate_id"=>$request->cate,"p_name"=>$request->pname,"p_price"=>$request->pprice,"description"=>$request->desc,"discount"=>$request->pdis,"pqty"=>$request->pqty,"m_price"=>$request->mprice,"top_product->$request->top_product", "stock_status"=>$request->stock_status]);

        }

        else{
            $image_upload = Product::find($product)->update(["cate_id"=>$request->cate,"p_name"=>$request->pname,"p_price"=>$request->pprice,"description"=>$request->desc,"discount"=>$request->pdis,"pqty"=>$request->pqty,"m_price"=>$request->mprice, "top_product->$request->top_product", "stock_status"=>$request->stock_status]);

        }

        $files = array();
        if($request->hasfile('pimage')) {
            foreach($request->file('pimage') as $image) {
                $name = time().rand(1,100).'.'.$image->extension();
                if($image->move(('products'), $name)) {
                    $files[] = $name;
                    $upload_status = Multiimage::create(["imageName" => $name,"product_id"=>$product]);
                }
            }
         }
        return redirect()->route('product.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete_status=1;
        $product->save();
        return redirect()->route('product.index');
    }
    public function details($id){
        $product=Product::find($id);
        $img=Multiimage::where('delete_status',0)->first();
        return view('backend.products.details',compact('product','img'));
    }

    public function orders(){
        $user = Auth::user();
        
        // $order = Order::where('user_id',$user->id)->get();
        // $item=[];
        // $i = 0;
        // foreach($order as $orders){
        //     $newitem = $orders;
            // $newitem = OrderItem::select('*')->leftJoin('products','order_items.product_id','=','products.id')->leftJoin('orders','order_items.order_id','=','orders.id')->get();
            // $newitem = Order::select('*')->leftJoin('order_items','orders.id','=','order_items.order_id')->leftJoin('products','order_items.product_id','=','products.id')->leftJoin('users','orders.user_id','=','users.id')->get();
            $newitem = Order::get();
        //     array_push($item,$newitem);
        //     $i++;
        // }
        // return $order;
        return view('backend.products.order',compact('user','newitem'));
    }

    public function search(Request $request){
        $search =$request->search;
        $newitem = Order::select('*')->leftJoin('order_items','orders.id','=','order_items.order_id')->leftJoin('products','order_items.product_id','=','products.id')->leftJoin('categories','products.cate_id','=','categories.id')->leftJoin('users','orders.user_id','=','users.id')->where('products.p_name', 'LIKE', "%{$search}%")->orWhere('users.name', 'LIKE', "%{$search}%")->orWhere('total_price', 'LIKE', "%{$search}%")->orWhere('cate_name', 'LIKE', "%{$search}%")->orWhere('orders.created_at', 'LIKE', "%{$search}%")->orWhere('payment_status', 'LIKE', "%{$search}%")->get();
        return view('backend.products.order',compact('newitem'));
    }


    public function order_status($id){
        $status=Order::find($id);
        while($status->order_status<=4){
        if($status->order_status==1){
            $status->shipped_date=now();
        }elseif($status->order_status==2){
            $status->outfordelivery_date=now();

        }else{

        }
        $status->order_status = ($status->order_status)+1;
       
        $status->update();
        return redirect()->back();
    }
    }
    // public function order_update(Request $request){
       
    //     $items = Order::find($request->id);
    //     $items->order_status=$request->order_status;
    //     if($items->order_status == 4){
    //     $items->payment_status=$request->payment_status;
    //     }
    //     $items->update();
    //     // return $items;
    //     return redirect()->back()->with("success");
    // }
    // public function delOrder($id){
    //  $del=Product::find($id);
    //  $del->delete();
    //  return redirect()->back();
    // }

    public function top_product(){
        $product = Product::where('top_product',1)->where('delete_status',0)->get();
        return view('backend.top.index',compact('product'));
    }
  

    public function top_product_updt($id)
    {
        $top_prdct = Product::Find($id);
        $top_prdct->top_product = 1;
        $top_prdct->save();
        return redirect()->back();
    }
    public function top_product_remove($id)
    {
        $top_prdct = Product::Find($id);
        $top_prdct->top_product = 0;
        $top_prdct->save();
        return redirect()->back();
    }
}
