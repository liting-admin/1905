@extends('layouts.yuan')
@section('title', '客户信息管理')
@section('content') 

<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">客户信息管理</h2>
       <a href="{{url('/client/create')}}" class="fr top_rt_btn add_icon">新建客户</a>
      </div>
      <form action="">
      <section class="mtb">
     <!-- <span class="item_name" style="width:120px;">客户来源：</span>
               <select name="com">
                    <option>--请选择--</option>
                    <option>新闻</option>
                    <option>杂志</option>
                    <option>综艺</option>
                    <option>广告</option>
               </select>
       <span class="item_name" style="width:120px;">客户类别：</span>
               <select name="liebie" class="select">
                    <option>--请选择--</option>
                    <option>潜在客户</option>
                    <option>高级客户</option>
                    <option>待沟通</option>
               </select>
      <span class="item_name" style="width:120px;">销售方式：</span>
               <select name="fangshi" class="select">
                    <option>--请选择--</option>
                    <option>零售</option>
                    <option>积分</option>
                    <option>刷卡</option>
               </select>
      <span class="item_name" style="width:120px;">行业属性：</span>
               <select name="shuxing" class="select">
                    <option>--请选择--</option>
                    <option>建筑行业</option>
                    <option>办公行业</option>
                    <option>IT行业</option>
                    <option>娱乐行业</option>
               </select>
      <span class="item_name" style="width:120px;">企业性质：</span>
               <select name="xingzhi" class="select">
                    <option>--请选择--</option>
                    <option>国家事业单位</option>
                    <option>国家建筑单位</option>
                    <option>世界事业单位</option>
               </select><br> -->
               <input type="text" name="client_name" value="{{$query['client_name']??''}}" class="textbox textbox_225" placeholder="輸入客户名称......"/>
               <input type="text" name="client_ma" value="{{$query['client_ma']??''}}" class="textbox textbox_225" placeholder="輸入客户编码......"/>
               <input type="text" name="client_jian" value="{{$query['client_jian']??''}}" class="textbox textbox_225" placeholder="輸入客户简称......"/>
               <input type="text" name="country" value="{{$query['country']??''}}" class="textbox textbox_225" placeholder="地区...">
               <input type="submit" class="link_btn" value="查询"/>
      </section>
      </form>
      <table class="table">
       <tr>
        <th>选择</th>
        <th>Id</th>
        <th>客户名称</th>
        <th>客户类别</th>
        <th>客户编码</th>
        <th>地区</th>
        <th>销售方式</th>
        <th>客户简称</th>
        <th>传真</th>
        <th>电子邮箱</th>
        <th>销售员</th>
        <th>记录时间</th>
        <th>操作</th>
       </tr>
       @foreach ($data as $v)
          <tr client_id = "{{$v->client_id}}">
               <td class="center"><input type="checkbox"></td>
               <td class="center">{{$v->client_id}}</td>
               <td class="center">{{$v->client_name}}</td>
               <td class="center">{{$v->liebie}}</td>
               <td class="center">{{$v->client_ma}}</td>
               <td class="center">{{$v->country}}</td>
               <td class="center">{{$v->fangshi}}</td>
               <td class="center">{{$v->client_jian}}</td>
               <td class="center">{{$v->chuanzhen}}</td>
               <td class="center">{{$v->email}}</td>
               <td class="center">{{$v->name}}</td>
               <td class="center">{{date('Y-m-d H:i:s',$v->client_time)}}</td>
               <td class="center">
               <a href="{{url('/client/edit/'.$v->client_id)}}" title="编辑" class="link_icon">&#101;</a>
               <a href="{{url('/client/delete/'.$v->client_id)}}" title="删除" class="link_icon">&#100;</a>
               </td>
          </tr>
     @endforeach
      </table>
     {{$data->appends($query)->links()}}
 </div>
</section>
</body>
</html>
@endsection
<!--
本代码由js代码网网友上传，js代码网收集并编辑整理;
尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
-->