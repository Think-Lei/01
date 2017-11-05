<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body bgcolor="#faebd7" background="/wl/public/Images/3.jpg" margintop="100px">
<h1>helloworld.com</h1>
<br>
<br>
<br>

<form action='__URL__/do_login' method="post" >
	用户名<input type="text" name="username" value=""><br><br>
	密&nbsp;码<input type="password" name="password" value=""><br><br>
	验证码<input type="tsxt" name="code" value=""><br><br>
	<img src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/><br>
	<input  type="submit" name="login" value="登录">
</form>
<a href="/wl/index.php/Add">注册</a>
</body>
</html>