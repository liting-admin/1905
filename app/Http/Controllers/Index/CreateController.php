<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shop_Index;
class CreateController extends Controller
{
    public function create(){
    	return view('index.create.create');
    }
    public function store(Request $request){
        $post= $request ->except('_token');
        
        $res=Shop_index::create($post);
        if($res){
            return redirect('index/list');
        }
        

    }
    public function list(){
        $data =Shop_Index::get();

        return view('index.index.list',['data'=>$data]);
    }
    }


