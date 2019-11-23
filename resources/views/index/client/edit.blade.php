@extends('layouts.yuan')
@section('title', '客户信息编辑')
@section('content') 

<section class="rt_wrap content mCustomScrollbar">
     <form action="{{url('/client/update/'.$data->client_id)}}" method="post" enctype="multipart/form-data">
     @csrf
          <div class="rt_content">
               <div class="page_title">
               <h2 class="fl">编辑客户：</h2>
               </div>
               <ul class="ulColumn2">
               <li>
                    <span class="item_name" style="width:120px;">销售员：</span>
                    <select name="id" class="select">
                         <option>--请选择--</option>
                         @foreach ($res as $v)
                              <option value="{{$v->id}}">{{$v->name}}</option>
                         @endforeach
                    </select>
                    <span class="item_name" style="width:120px;">是否为共享客户：</span>
                    <select name="is_show" class="select">
                         <option>--请选择--</option>
                         <option value="1">是</option>
                         <option value="2">否</option>
                    </select>
               </li>
               <li>
               <span class="item_name" style="width:120px;">客户名称：</span>
               <input type="text" name="client_name" value="{{$data->client_name}}" class="textbox textbox_225" placeholder="客户名称"/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">客户编码：</span>
               <input type="text" name="client_ma" value="{{$data->client_ma}}" class="textbox textbox_225" placeholder="客户编码"/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               <span class="item_name" style="width:120px;">客户简称：</span>
               <input type="text" name="client_jian" value="{{$data->client_jian}}" class="textbox textbox_225" placeholder="客户简称"/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">手机号码：</span>
               <input type="tel" name="tel" value="{{$data->tel}}" class="textbox textbox_225" placeholder="手机号码..."/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               <span class="item_name" style="width:120px;">传真：</span>
               <input type="text" name="chuanzhen" value="{{$data->chuanzhen}}" class="textbox textbox_225" placeholder="传真..."/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">网址：</span>
               <input type="tel" name="httpd" value="{{$data->httpd}}" class="textbox textbox_225" placeholder="网址..."/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               <span class="item_name" style="width:120px;">电子邮箱：</span>
               <input type="email" name="email" value="{{$data->email}}" class="textbox textbox_225" placeholder="电子邮件地址..."/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">地区：</span>
               <input type="text" name="country" value="{{$data->country}}" class="textbox textbox_225" placeholder="地区...">
               <span class="item_name" style="width:120px;">邮政编码：</span>
               <input type="text" name="mail" value="{{$data->mail}}" class="textbox textbox_225" placeholder="邮政编码..."/>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">详细地址：</span>
               <textarea type="text" name="dateil" class="textbox textbox_225" placeholder="详细地址..."/>{{$data->dateil}}</textarea>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <hr>
               <div class="page_title">
                    <h2 class="fl">客户类型：</h2>
               </div>
               <li>
               <span class="item_name" style="width:120px;">客户来源：</span>
                    <select name="com" class="select">
                    <option>--请选择--</option>
                    <option>新闻</option>
                    <option>杂志</option>
                    <option>综艺</option>
                    <option>广告</option>
                    </select>
               </li>
               <li>
               <span class="item_name" style="width:120px;">客户类别：</span>
                    <select name="liebie" class="select">
                    <option>--请选择--</option>
                    <option>潜在客户</option>
                    <option>高级客户</option>
                    <option>待沟通</option>
                    </select>
               </li>
               <li>
               <span class="item_name" style="width:120px;">销售方式：</span>
                    <select name="fangshi" class="select">
                    <option>--请选择--</option>
                    <option>零售</option>
                    <option>积分</option>
                    <option>刷卡</option>
                    </select>
               </li>
               <hr>
               <div class="page_title">
                    <h2 class="fl">企业概况：</h2>
               </div>
               <li>
               <span class="item_name" style="width:120px;">行业属性：</span>
                    <select name="shuxing" class="select">
                    <option>--请选择--</option>
                    <option>建筑行业</option>
                    <option>办公行业</option>
                    <option>IT行业</option>
                    <option>娱乐行业</option>
                    </select>
               </li>
               <li>
               <span class="item_name" style="width:120px;">企业性质：</span>
                    <select name="xingzhi" class="select">
                    <option>--请选择--</option>
                    <option>国家事业单位</option>
                    <option>国家建筑单位</option>
                    <option>世界事业单位</option>
                    </select>
               </li>
               <li>
               <span class="item_name" style="width:120px;">企业描述：</span>
               <textarea type="text" name="desc" class="textbox textbox_225" placeholder="企业描述..."/>{{$data->desc}}</textarea>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <hr>
               <div class="page_title">
                    <h2 class="fl">备注：</h2>
               </div>
               <li>
               <span class="item_name" style="width:120px;">备注1：</span>
               <textarea type="text" name="one" class="textbox textbox_225" placeholder="备注1..."/>{{$data->one}}</textarea>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">备注2：</span>
               <textarea type="text" name="two" class="textbox textbox_225" placeholder="备注2..."/>{{$data->two}}</textarea>
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">客户资料附件：</span>
               无
               <!-- <span class="errorTips">错误提示信息...</span> -->
               </li>
               <li>
               <span class="item_name" style="width:120px;">上传logo：</span>
               <input type="file" class="textbox textbox_225" name="file"/ >
               </li>
               <li>
               <span class="item_name" style="width:120px;"></span>
               <input type="submit" class="link_btn" value="更新"/>
               </li>
               </ul>
          </div>
     </form>
</section>

</body>
</html>
@endsection
<!--
本代码由js代码网网友上传，js代码网收集并编辑整理;
尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
-->