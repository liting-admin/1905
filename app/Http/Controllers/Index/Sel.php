<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sel extends Controller
{
	public function index(){
		return view('index.sel.selfirst');
	}
	public function indexs(){
		return view('index.sel.firstlist');

	}

}
