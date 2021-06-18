<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  function index()
  {
    //home page 
    $product  =   Product::where('category','Home|Home')->get();
    $women    =   Product::where('category','Home|Women')->get();
    $men      =   Product::where('category','Home|Men')->get();
    $kid      =   Product::where('category','Home|Kid')->get();
  
    //return view('home',compact('products','womens')) ;
    //return view('home',compact('womens'));
    return view('home',['products'=>$product,'womens'=> $women,'mens'=> $men,'kids'=> $kid ]);
  }

  public function detail($id)
  {
    $data = Product::find($id);
    //$data = Product::all();
    return view('detail',['product'=> $data]);
  }

  function addToCart(Request $req)
  {
    //agar user login h tohhi wo cart mei add karega
    //humare session ka naam user h
    if($req->session()->has('user'))
    {
      $cart =new Cart;
      $cart->user_id=$req->session()->get('user')['id'];
      $cart->product_id=$req->product_id;
      $cart->save();
      return redirect('/user/home');
      //return "Hello from cart ";
    }
    else
    {
      return redirect('/user/login');
    }
  }

  //to get cart from from carts table jo user login h
  static function cartItem()
  {  
    $userId = Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
    
    //$data = Product::find($id);
    //$data = Product::all();
    //return view('detail',['product'=> $data]);
  }

  function cartList()
  {
    $userId=Session::get('user')['id']; 
    $products = Db::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->where('carts.user_id',$userId)
    ->select('products.*','carts.id as cart_id')
    ->get();

    return view('cart',['products'=>$products]);    
  }

  function removeItemfromcart($id)
  {
    Cart::destroy($id);
    return redirect('/user/cart');
  }
 
  function orderNow()
  {
    $userId=Session::get('user')['id']; 
    $total = DB::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->where('carts.user_id',$userId)
    ->sum('products.price');

    return view('ordernow',['total'=>$total]);
        
  }
    
  function orderPlace(Request $req)
  {  
    $userId=Session::get('user')['id']; 
    $allitemofusercart= Cart::where('user_id',$userId)->get();
    foreach($allitemofusercart as $cart)
    {
      $order= new Order;
      $order->product_id=$cart->product_id;
      $order->user_id=$cart->user_id;
      $order->status=$req->status;
      $order->payment_mode=$req->payment; 
      $order->payment_status="pendding";
      $order->address=$req->address;
      $order->mobile_no=$req->phone;
      $order->pin_code=$req->pin;
      $order->cus_name=$req->name;
      $order->save();
      
      Cart::where('user_id',$userId)->delete();
    }

      return redirect('/user/home');
  }
    
  function myOrdershistory()
  {
    $userId=Session::get('user')['id']; 
    $orders = DB::table('orders')
    ->join('products','orders.product_id','=','products.id')
    ->where('orders.user_id',$userId)
    ->get();
    
    return view('order_history',['orders'=>$orders]);
  }

  function men()
  {   
    $women    =   Product::where('category','Men|Men')->get();
    return view('men',['womens'=> $women]);
  }

  function women()
  {
    $women    =   Product::where('category','Women|Women')->get();
    return view('women',['womens'=> $women]);

  }

  function kid()
  {
    $women    =   Product::where('category','Kid|Kid')->get();
    return view('kid',['womens'=> $women]);
  }

  function electronic()
  {
    $women    =   Product::where('category','Electronics|Electronics')->get();
    return view('electronic',['womens'=> $women]);
  }

  function contact()
  {
    return view('contact');
  }

  function about()
  {
    return view('about');
  }
    
}
