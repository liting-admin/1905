<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Record;
class RedcordController extends Controller
{
    public function create(){
    	return view("index.redcord.create");
    }
    public function store(){
    	$data=request()->all();
    	$res=Record::create($data);
    	if($res){
    		echo "成功";
    	}else{
    		echo "失败";
    	}
    }
}
