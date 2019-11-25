
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
        <th>联系人名称</th>
        <th>性别</th>
        <th>爱好</th>
     
       </tr>
       @foreach($res as $v)
      <tr>
      <td>{{$v->c_name}}</td>
      <td>{{$v->c_sex}}</td>
      <td>{{$v->c_aihao}}</td>
       </tr>
       @endforeach
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