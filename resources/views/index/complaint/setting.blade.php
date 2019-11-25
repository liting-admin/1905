@extends('layouts.yuan')
@section('title', '运营大厦')
@section('content')
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">客户查询</h2>
      </div>
     <section>
      <ul class="ulColumn2">
       <form action="">
            <li>
                 <h2><b>销售部门、人员</b></h2>
                 <span class="item_name" style="width:120px;">销售部门：</span>
                 <input type="text" class="textbox textbox_225">
                 <a href="#" style="color: red;">选择</a>
                 <a href="#" style="color: red;">清空</a>
                 <span class="item_name" style="width:120px;">销售人员：</span>
                 <input type="text" class="textbox textbox_225">
                 <a href="#" style="color: red;">选择</a>
                 <a href="#" style="color: red;">清空</a><br>
                 <button style="color: red">查询</button>
            </li>
       </form>
       <form action="">
           <h2><b>客户投诉</b></h2>
           <li>
            投诉类型：<select class="select">
                          <option>----</option>
                      </select>
            <span class="item_name" style="width:120px;">投诉日期：</span>
            <input type="date" class="textbox textbox_225">至<input type="date" class="textbox textbox_225"><br>
            <span class="item_name" style="width:120px;">投诉内容：</span>
            <textarea  class="textarea" style="height:50px;width:640px;"></textarea><br>
            <button style="color: red">查询</button>
           </li>
       </form>
       <form action="">
           <h2><b>客户信息</b></h2>
           <li>
               <span class="item_name" style="width:120px;">客户名称：</span>
               <input type="text" class="textbox textbox_295">
               <span class="item_name" style="width:120px;">客户编码：</span>
               <input type="text" class="textbox textbox_295"><br>
               <span class="item_name" style="width:120px;">客户简称：</span>
               <input type="text" class="textbox textbox_295">
               <span class="item_name" style="width:120px;">地区：</span>
               <input type="text" class="textbox textbox_295"><br>
               <span class="item_name" style="width:120px;">地址：</span>
               <input type="text" class="textbox textbox_295">
               客户来源：<select class="select">
                <option>----</option>
               </select>
               客户类别：<select class="select">
                <option>----</option>
               </select>
               销售方式：<select class="select">
                <option>----</option>
               </select>
               行业属性：<select class="select">
                <option>----</option>
               </select>
               企业性质：<select class="select">
                <option>----</option>
               </select><br>
               企业描述:<textarea  class="textarea" style="height:50px;width:640px;"></textarea><br>
               <button style="color: red">查询</button>
           </li>
       </form>
       <form action="">
       <h2><b>联系人信息</b></h2>
       <li>
        <span class="item_name" style="width:120px;">联系人姓名：</span>
        <input type="text" class="textbox textbox_295">
        <select class="select">
         性别:<option>-----</option>
        </select>
        <span class="item_name" style="width:120px;">爱好：</span>
        <input type="text" class="textbox textbox_295"><br>
        <button style="color: red">查询</button>
       </li>
       </form>
      </ul>
     </section>
 </div>
</section>
</body>
</html>
<!--
本代码由js代码网网友上传，js代码网收集并编辑整理;
尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
-->
@endsection