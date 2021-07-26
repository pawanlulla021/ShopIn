<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    function addproduct(Request $req)
    {      
      if (Auth::check()) {     
        $product=$req->file('img_src');
        $reIamge=time().'.'.$product->getClientOriginalExtension();
        $dest=public_path('/admin_images');
        $product->move($dest,$reIamge);
               
        $product = new Product;
        $product->price=$req->price;
        $product->category=$req->category;
        $product->description=$req->description;
            
        $product->name=$req->name;
        $product->sub_galary=$reIamge;
                
        $product->save();
        return redirect('/add/men');
      }
      else{
       return redirect('login');
      }  
    }

    

    public function viewAll()
    {
        $todos = Product::all();
        return view('admin.viewall',compact('todos'));
        //return view('admin.viewall');
    }

    public function edit(Product $todo,$id)
    {
        $todo = Product::find($id);
        return view('admin.edit',compact('todo'));
    }

    public function update(Request $req,$id)
    {
      if (Auth::check()) {
        Product ::where('id', $id)->update(['name'=> $req->name,'price'=> $req->price,'category' => $req->category ,'description'=> $req->description]);
        return redirect('/products');
       }
      else{
      return redirect('/login');
      } 
    }

    public function destroy(Request $req,$id)
    {
      if (Auth::check()) {
        Product::where('id',$id)->delete();
        return redirect()->back();
       }
       else{
        return redirect('/login');
       } 
    }

    public function allOrder()
    {
        $todos = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->get();
        return view('admin.order',compact('todos'));
        //return view('admin.order');
    }

    public function deliveryupdate(Request $req,$id)
    {
      if (Auth::check()) {
        Order ::where('order_id', $id)->update(['status'=> $req->category]);
        return redirect()->back();    
       }
       else{
        return redirect('/login');
       }
    } 

    public function homepage()
    {
        $count_products =DB::table('products')->count('id');
        //dd($count_products);

        $count_users =DB::table('users')->count('id');
        //dd($count_users);

        $count_orders =DB::table('orders')->count('user_id');
        //dd($count_orders);
        return view('admin/home',['count_products'=>$count_products,'count_users'=> $count_users,'count_orders'=> $count_orders]);
        //return view('admin/home');
    }

    public function login()
    {
        return view('login');
    }
    public function index()
    {
      
    }


}
