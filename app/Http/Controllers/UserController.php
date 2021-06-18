<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email' => $req->input('email')])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or password is incorrect";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/user/home');
        }
        
    }
    function register(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/user/login');
    }

    function admin_login(Request $req)
    {
        $user = User::where(['email' => $req->input('email_id')])->first();
        if(!$user || !Hash::check($req->email_password,$user->password)){
            return "Username or password is incorrect";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/admin/home');
        }
    }

}
