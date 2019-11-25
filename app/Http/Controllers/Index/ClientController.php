<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Client;
use DB;
use App\User;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageSize = config('app.pageSize');
        $client_name = request()->client_name;
        $where = [];
        if($client_name){
            $where[] = ['client_name','like',"%$client_name%"];
        }
        $client_ma = request()->client_ma;
        if($client_ma){
            $where[] = ['client_ma','=',"$client_ma"];
        }
        $client_jian = request()->client_jian;
        if($client_jian){
            $where[] = ['client_jian','=',"$client_jian"];
        }
        $country = request()->country;
        if($country){
            $where[] = ['country','=',"$country"];
        }
        $com = request()->com;
        if($com){
            $where[] = ['com','=',$com];
        }
        $liebie = request()->liebie;
        if($liebie){
            $where[] = ['liebie','=',$liebie];
        }
        $fangshi = request()->fangshi;
        if($fangshi){
            $where[] = ['fangshi','=',$fangshi];
        }
        $shuxing = request()->shuxing;
        if($shuxing){
            $where[] = ['shuxing','=',$shuxing];
        }
        $xingzhi = request()->xingzhi;
        if($xingzhi){
            $where[] = ['xingzhi','=',$xingzhi];
        }
        $data = Client::where($where)->join('users','client.id','=','users.id')->paginate($pageSize);
        $query = request()->all();
        return view('index.client.index',['data'=>$data,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = User::get();
        $data = Client::get();
        // dump($res);
        // dump($data);die;
        return view('index.client.create',['res'=>$res,'data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = request()->except('_token');
        $id = Auth::id();
        // dd($id);
        // $id = request()->input('id');
        if($request->hasFile('file')){
            $post['file'] = $this->upload('file');
        }
        $post['id'] = $id;
        // dd($post['id']);
        $post['client_time'] = time();
        $res = Client::create($post);
        // dd($res);
        if($res){
            return redirect('/client/index');
        }
    }

    public function upload($filename){
        if(request()->file($filename)->isValid()){
            $photo = request()->file($filename);
            $store_result = $photo->store('photo');
            return $store_result;
        }
        exit('未获取到上传文件或过程出错');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$id){
            abort(404);
        }

        $res = User::get();
        $data = Client::where('client_id','=',$id)->first();
        return view('index.client.edit',['res'=>$res,'data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = $request->except('_token');
        $is = Auth::id();
        if($request->hasFile('file')){
            $post['file'] = $this->upload('file');
        }
        $post['id'] = $id;
        Client::where('client_id','=',$id)->update($post);
        return redirect('/client/index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$id){
            abort(404);
        }

        $res = Client::where('client_id','=',$id)->delete();
        if($res){
            return redirect('/client/index');
        }
    }
}
