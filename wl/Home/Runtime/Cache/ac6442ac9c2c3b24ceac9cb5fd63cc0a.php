<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html

PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html>
<head>
<title>注册</title>
<link rel='stylesheet' type='text/css' href=''/>
<script src=""></script>
</head>
<body>
<center>
<form action='__URL__/add' method='post'>
	用户名<input type="text" name="username" placeholder="用户名"><br><br>
	密&nbsp;码<input type="password" name="password" placeholder="密码"><br><br>
	确&nbsp;认<input type="password" name="repassword" placeholder="确认密码"><br><br>
	验证码<input type="texe" name="code"placeholder="验证码，点击刷新"><br><br>
	<img src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/><br><br>
	<input type="submit" style="width:155px;">
</form>
</center>
</body>
</html>