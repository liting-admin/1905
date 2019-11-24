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
		$client_name=request()->input('client_name');
		$client_ma=request()->input('client_ma');
		$client_jian=request()->input('client_jian');
		$fangshi=request()->input('fangshi');
		$com=request()->input('com');
		$shuxing=request()->input('shuxing');
		$xingzhi=request()->input('xingzhi');
		$desc=request()->input('desc');
		$where=[];
		if($client_name){
			$where[]=['client_name','like',"%$client_name%"];
		}
		if($client_ma){
			$where[]=['client_ma','like',"%$client_ma%"];
		}
		if($client_jian){
			$where[]=['client_jian','like',"%$client_jian%"];
		}
		if($fangshi){
			$where[]=['fangshi','like',"%$fangshi%"];
		}
		if($com){
			$where[]=['com','like',"%$com%"];
		}
		if($shuxing){
			$where[]=['shuxing','like',"%$shuxing%"];
		}
		if($desc){
			$where[]=['desc','like',"%$desc%"];
		}
		$res=Wd::where($where)->where('id','=',$id)->get();
	
			return view('index.sel.firstlist',['res'=>$res]);
		
		

	}

}
