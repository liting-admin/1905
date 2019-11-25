<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sel as Wd;
use App\Dee;
use App\Drr;
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
		// dd($res);
			return view('index.sel.firstlist',['res'=>$res]);
		
		

	}
	public function indexd(){
		$id=Auth::id();
		$c_name=request()->input('c_name');
		$c_sex=request()->input('c_sex');
		$c_aihao=request()->input('c_aihao');
		$where=[];
		if($c_name){
			$where[]=['c_name','like',"%$c_name%"];
		}
		if($c_sex){
			$where[]=['c_sex','like',"%$c_sex%"];
		}
		if($c_aihao){
			$where[]=['c_aihao','like',"%$c_aihao%"];
		}
		$res=Dee::where($where)->where('id','=',$id)->get();
		return view('index.sel.dierlist',['res'=>$res]);
	}
	public function indext(){
		$id=Auth::id();
		$serve_type=request()->input('serve_type');
		$serve_time=request()->input('serve_time');
		$serve_satis=request()->input('serve_satis');
		$serve_desc=request()->input('serve_desc');
		$where=[];
		if($serve_type){
			$where[]=['serve_type','like',"%$serve_type%"];
		}
		if($serve_time){
			$where[]=['serve_time','like',"%$serve_time%"];
		}
		if($serve_satis){
			$where[]=['serve_satis','like',"%$serve_stais%"];
		}
		if($serve_desc){
			$where[]=['serve_desc','like',"%$serve_desc%"];
		}
		$res=Drr::where($where)->where('id','=',$id)->get();
		// dd($res);
			return view('index.sel.disan',['res'=>$res]);
	}

}
