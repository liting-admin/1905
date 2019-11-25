@extends('layouts.yuan')
@section('title', '客户服务记录')
@section('content')
  <form action="{{url('/redcord/store')}}" method="post">
<section class="rt_wrap content mCustomScrollbar">
@csrf
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">客户服务基本信息</h2>
      </div>
      <ul class="ulColumn2">  
       <li>
        <span class="item_name" style="width:120px;" name="">服务类型：</span>
          <select class="select" name="r_type">
            <option value="">请选择</option>
            <option value="1">上门服务</option>
          </select>
        <!-- <span class="errorTips">错误提示信息...</span> -->
       </li>
       <li>
        <span class="item_name" style="width:120px;">服务日期：</span>
        <input type="date" name="datas" class="textbox textbox_225"/>
        <!-- <span class="errorTips">错误提示信息...</span> -->
       </li>
       <li>
        <span class="item_name" style="width:120px;">客户名称：</span>
        <select class="select" name="c_id">
         <option value="">请选择</option>
         <option value="1">名称</option>
        </select>
       </li>
       <li>
         <li>
        <span class="item_name" style="width:120px;">联系人：</span>
        <select class="select" name="c_contacts">
         <option value="">请选择</option>
         <option value="1">联系人</option>
        </select>
       </li>
       <li>
        <span class="item_name" style="width:120px;">服务估计成本：</span>
        <input type="text" class="textbox textbox_225" name="cost" />元
        <!-- <span class="errorTips">错误提示信息...</span> -->
       </li>
       <li>
        <span class="item_name" style="width:120px;">时间成本：</span>
        <input type="text" class="textbox textbox_225" name="timecost" />小时
        <!-- <span class="errorTips">错误提示信息...</span> -->
       </li>
       <li>
        <span class="item_name" style="width:120px;">服务内容描述：</span>
        <textarea  class="textarea" name="content"></textarea>
       </li>
      <div class="page_title">
       <h2 class="fl">客户反馈：</h2>
      </div>
       <li>
        <span class="item_name" style="width:120px;">客户满意度：</span>
          <select class="select" name="satisfaction">
            <option value="1">很满意</option>
            <option value="2">比较满意</option>
            <option value="3">不满意</option>
            <option value="4">很不满意</option>  
          </select>
       </li>
       <li>
        <span class="item_name" style="width:120px;" >客户反馈意见：</span>
        <textarea  class="textarea" name="opinion"></textarea>
       </li>
       <div class="page_title">
       <h2 class="fl">描述：</h2>
      </div>
      <li>
        <span class="item_name" style="width:120px;" >备注1：</span>
        <textarea  class="textarea" name="remarks"></textarea>
       </li>
       <li>
        <span class="item_name" style="width:120px;">备注2：</span>
        <textarea  class="textarea"  name="remarkstwo"></textarea>
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn" value="添加"/>
       </li>
      </ul>
 </div>
 
</section>
</body>
</html>
</form>
  @endsection