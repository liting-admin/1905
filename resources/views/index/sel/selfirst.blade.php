@extends('layouts.yuan')
@section('title', '运营大厦')
@section('content') 
<section class="rt_wrap content mCustomScrollbar">
  <h1><b>LiTing的STUDIO</b></h1>
  <form action="{{url('/index/Sel/indexs')}}" method="post">
  @csrf
      <div class="page_title">
       <h2 class="fl">销售部门，人员</h2>
      </div>
      <table class="table">
       <tr>
        <td>销售人员：<input type="text" name="id">
        </td>
       </tr>
      </table>
      <div class="page_title">
       <h2 class="fl">客户信息</h2>
      </div>
      <table class="table">
       <tr>
        <td>客户名称：<input type="text" name="client_name"></td>
        <td>客户编码：<input type="text" name="client_ma"></td>
        <td>客户简称：<input type="text" name="client_jian"></td>
        <tr>
        <td>客户来源：
        <input type="text" name="com">
       </td>
        
        <td>销售方式：
        <input type="text" name="fangshi">
        </td>
        </tr>
        <td>行业属性：
        <input type="text" name="shuxing">
        </td>
        <td>企业性质：
        <input type="text" name="xingzhi">
        </td>
        <td>企业描述：
        <input type="text" name=desc">
        
        <b><input type="submit" name="" value="查询"></b></td>
       </tr>
      </table>
</form>
 <form action="{{url('/index/Sel/indexd')}}" method="post">
 @csrf
      <div class="page_title">
       <h2 class="fl">联系人信息
      <table class="table">
       <tr>
        <td>联系人姓名：<input type="text" name="c_name">
      </td>
        <td>
            性别：<select name="c_sex">
                 <option value="0">---请选择---</option>
                 <option value="0">男</option>
                 <option value="0">女</option>
                
            </select>
        </td>
        <td>爱好：<input type="text" name="c_aihao">
           <b><input type="submit" name="" value="查询"></b>
      </td>
        <tr>
      </table>
</form>
 <form  action="{{url('/index/Sel/indext')}}" method="post">
 @csrf
      <div class="page_title">
       <h2 class="fl">客户服务</h2>
      </div>
      <table class="table">
       <tr>
        <td>服务类型：
          <select name="serve_type">
              <option value="0">---请选择---</option>
              <option value="1">上门服务</option>
              <option value="2">解决客户投诉</option>
              <option value="3">客户培训</option>
             
        </select>
      </td>
        <td>服务日期：<input type="text" name="serve_time">
        </td>
        <tr>
        <td>客户满意度：
          <select name="serve_satis">
              <option value="0">---请选择---</option>
              <option value="1">好</option>
              <option value="2">很满意</option>
              <option value="3">比较满意</option>
              <option value="4">不满意</option>
              <option value="5">很不满意</option>
        </select>
      </td>
      <td>服务内容：
         <textarea name="serve_desc"></textarea>
          <b><input type="submit" name="" value="查询"></b>
      </td>
        </tr>
      </table>
</form>
</section>
</body>
</html>

  @endsection