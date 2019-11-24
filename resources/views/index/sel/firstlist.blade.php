@extends('layouts.yuan')
@section('title', '运营大厦')
@section('content') 
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">客户查询</h2>
       <a href="product_detail.html" class="fr top_rt_btn add_icon">返回客户查询</a>
      </div>
      <table class="table">
       <tr>
        <th>客户名称</th>
        <th>客户编码</th>
        <th>客户简称</th>
        <th>销售方式/th>
        <th>客户来源</th>
        <th>行业属性</th>
        <th>企业性质</th>
        <th>企业描述</th>
       </tr>
      <tr>
      <td>{{$v->client_name}}</td>
      <td>{{$v->client_ma}}</td>
      <td>{{$v->client_jian}}</td>
      <td>{{$v->fangshi}}</td>
      <td>{{$v->com}}</td>
      <td>{{$v->shuxing}}</td>
      <td>{{$v->xingzhi}}</td>
      <td>{{$v->desc}}</td>
      <td></td>
       </tr>
      </table>
      <aside class="paging">
       <a>第一页</a>
       <a>1</a>
       <a>2</a>
       <a>3</a>
       <a>…</a>
       <a>1004</a>
       <a>最后一页</a>
      </aside>
 </div>
</section>
</body>
</html>
 @endsection