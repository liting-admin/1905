<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cloent;
use App\Product;
class OfferController extends Controller
{
    public function index(){

        $where = [];
        $c_name = \request()->c_name;
        if($c_name){
            $where[] = ['c_name','like',"%$c_name%"];
        }
        $c_code = \request()->c_code;
        if($c_code){
            $where[] = ['c_code','like',"%$c_code%"];
        }
        $c_desc = \request()->c_desc;
        if($c_desc){
            $where[] = ['c_desc','like',"%$c_desc%"];
        }
        $c_diqu = \request()->diqu;
        if($c_diqu){
            $where[] = ['c_diqu','like',"%$c_diqu%"];
        }
        $data = Cloent::where($where)->paginate(1);
        $query = request()->all();
        return view('index.offer.index',['data'=>$data,'query'=>$query]);
    }
    public function lists(){
        $ProductInfo = Product::all();

    }
}
