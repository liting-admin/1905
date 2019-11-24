<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sel as Wd;
class Sel extends Controller
{
	public function index(){
		return view('index.sel.selfirst');
	}
	public function indexs(){
		$id=Auth::id();
		$where=[
			['Id','=',$id],
		
		];
		$res=Wd::where($where)->get();
		return view('index.sel.firstlist','res'=>$res);

	}

}
