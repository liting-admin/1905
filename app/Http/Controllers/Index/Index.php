<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(){
    	return view('index.index.index');
    }
    
     public function list(){
    	return view('index.index.list');
    }
}
