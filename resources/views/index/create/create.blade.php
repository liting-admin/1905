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
<!--aside nav-->
<!--aside nav-->
<form action="{{url('index/store')}}" method="post">
@csrf
<table border=2>
<tr>
<td><h3>联系人基本信息</h3></td>
</tr>
<tr>
<td>客户单位</td>
<td><input type="text" name="c_danwei"></td>
</tr>
<tr>
<td>联系人职位</td>
<td><input type="text" name="c_zhiwei"></td>
</tr>
<tr>
<td>姓名</td>
<td><input type="text" name="c_name"></td>
</tr>
<tr>
<td>性别</td>
<td><input type="radio" name="c_sex" value="男">男<input type="radio" name="c_sex" value="女">女</td>
</tr>
<tr>
<td>生日</td>
<td><input type="text" name="c_shengri"></td>
</tr>
<tr>
<td>爱好</td>
<td><input type="text" name="c_aihao"></td>
</tr>
</table>
<table border=2>
<tr>
<td><h3>联系方式</h3></td>
</tr>
<tr>
<td>家庭邮编</td>
<td><input type="text" name="c_youbian"></td>
</tr>
<tr>
<td>家庭住址</td>
<td><input type="text" name="c_zhuzhi"></td>
</tr>
<tr>
<td>工作电话</td>
<td><input type="text" name="c_dianhua"></td>
</tr>
<tr>
<td>手机</td>
<td><input type="text" name="c_shouji"></td>
</tr>
<tr>
<td>qq号码</td>
<td><input type="text" name="c_qq"></td>
</tr>
<tr>
<td>家庭电话</td>
<td><input type="text" name="c_jiadian"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="c_email"></td>
</tr>
<tr>
<td>msn</td>
<td><input type="text" name="c_msn"></td>
</tr>
</table>
<input type="submit" value="提交">
</form>
</body>
</html>
<!--
本代码由js代码网网友上传，js代码网收集并编辑整理;
尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
-->