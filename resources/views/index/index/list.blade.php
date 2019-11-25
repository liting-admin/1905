<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/index/Css/style.css">
<!--[if lt IE 9]>
<script src="Scripts/html5.js"></script>
<![endif]-->
<script src="Scripts/jquery.js"></script>
<script src="Scripts/jquery.mcustomscrollbar.concat.min.js"></script>

</head>
<body>
<!--header-->
<header>
 <h1><img src="Picture/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="clear_icon">清除缓存</a></li>
  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
 </ul>
</header>
<body>
<table border=2>
<tr>
<td>id</td>
<td>联系人姓名</td>
<td>性别</td>
<td>QQ/msn</td>
<td>工作电话</td>
<td>手机</td>
<td>电子邮件</td>
<td>操作</td>
</tr>
@foreach($data as $v)
<tr>
<td>{{$v->c_id}}</td>
<td>{{$v->c_name}}</td>
<td>{{$v->c_sex}}</td>
<td>{{$v->c_qq}}</td>
<td>{{$v->c_dianhua}}</td>
<td>{{$v->c_shouji}}</td>
<td>{{$v->c_email}}</td>
<td><a href="#">编辑</a><a href="#">删除</a></td>
</tr>
@endforeach
</table>
</body>
</html>