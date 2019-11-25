@extends('layouts.yuan')
@section('title', '运营大厦')
@section('content') 
<section class="rt_wrap content mCustomScrollbar">
  <h1><b>LiTing的STUDIO</b></h1>

      <div class="page_title">
       <h2 class="fl">销售部门，人员</h2>
      </div>
      <table class="table">
       <tr>
        <td>销售部门：
          <select>
              <option value="0">---请选择---</option>
        </select>
      </td>
        <td>销售人员：
            <select>
             <option value="0">---请选择---</option>
        </select>
        </td>
        <td>
        <input type="button" name="" value="查询">
      </td>
       </tr>
      </table>

 
      <div class="page_title">
       <h2 class="fl">客户信息</h2>
      </div>
      <table class="table">
       <tr>
        <td>客户名称：<input type="text" name=""></td>
        <td>客户编码：<input type="text" name=""></td>
        <td>客户简称：<input type="text" name=""></td>
        <tr>
          <td>地区：<select>
                <option value="0">---请选择---</option>
       </select></td>
       <td>地址：<input type="text" name=""></td>
       <td>电话：<input type="text" name=""></td>
        </tr>
        <tr>
        <td>客户来源：<select>
             <option value="0">---请选择---</option>
        </select></td>
        <td>客户类别：<select>
             <option value="0">---请选择---</option>
        </select></td>
        <td>销售方式：<select>
             <option value="0">---请选择---</option>
        </select></td>
        </tr>
        <td>行业属性：<select>
             <option value="0">---请选择---</option>
        </select></td>
        <td>企业性质：<select>
             <option value="0">---请选择---</option>
        </select></td>
        <td>企业描述：<select>
             <option value="0">---请选择---</option>
        </select>
        <b><input type="button" name="" value="查询"></b></td>
       </tr>
      </table>

 
      <div class="page_title">
       <h2 class="fl">联系人信息
      <table class="table">
       <tr>
        <td>联系人姓名：<input type="text" name="">
      </td>
        <td>
            性别：<select>
                 <option value="0">---请选择---</option>

            </select>
        </td>
        <td>爱好：<input type="text" name="">
           <b><input type="button" name="" value="查询"></b>
      </td>
        <tr>
      </table>
 
 
      <div class="page_title">
       <h2 class="fl">客户服务</h2>
      </div>
      <table class="table">
       <tr>
        <td>服务类型：
          <select>
              <option value="0">---请选择---</option>
        </select>
      </td>
        <td>服务日期：<input type="text" name="">至<input type="text" name="">
        </td>
        <tr>
        <td>客户满意度：
          <select>
              <option value="0">---请选择---</option>
        </select>
      </td>
      <td>服务内容：
         <textarea></textarea>
          <b><input type="button" name="" value="查询"></b>
      </td>
     
     
        </tr>
        
      
      </table>
 
</section>
</body>
</html>
  @endsection