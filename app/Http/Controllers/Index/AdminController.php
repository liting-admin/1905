<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function reg(){
        return view('index.admin.index');
    }

    public function doReg(){
        $post = request()->except('_token');
        $post['password'] = bcrypt($post['password']);
        $res = User::create($post);
        return redirect('/admin/login');
    }

    public function login(){
        return view('index.admin.login');
    }
    public function doLogin(){
        $post = request()->except('_token');
        if(Auth::attempt($post)){
            return redirect('/client/index');
        }else{
            return redirect('/admin/login')->with('msg','没有此用户');
        }
    }
}
