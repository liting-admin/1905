
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
        <th>服务类型</th>
        <th>客户服务满意度</th>
        <th>日期</th>
        <th>服务内容</th>
       </tr>
       @foreach($res as $v)
      <tr>
      <td>{{$v->serve_type=='1'?'上门服务':'解决客户投诉'}}</td>
      <td>{{$v->serve_satis=='2'?'很满意':'好'}}</td>
      <td>{{date('Y-m-d H:i:s',$v->serve_time)}}</td>
      <td>{{$v->serve_desc}}</td>
      
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