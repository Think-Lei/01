<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html

PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html>
<head>
<title></title>
<script type="text/javascript">
function startTime()
{
var today=new Date()
var h=today.getHours()
var m=today.getMinutes()
var s=today.getSeconds()
// add a zero in front of numbers<10
m=checkTime(m)
s=checkTime(s)
document.getElementById('txt').innerHTML=h+":"+m+":"+s
t=setTimeout('startTime()',500)
}

function checkTime(i)
{
if (i<10) 
  {i="0" + i}
  return i
}
</script>
    
</head>
<body onload="startTime()">
<center>
<form method="post" action='__URL__/search'>
    <input type="text" name="username" >
    <input type="submit">
</form>
<br><br><br>
<table border="0">
    <tr>
        <th >ID</th>
        <th >用户名</th>
        <th >密码</th>
        <th >学号</th>
        <th >学年</th>
        <th >班级</th>
        <th >学校</th>
        <th >学院</th>
        <th >系</th>
        <th >性别</th>
        <th >名族</th>
        <th >宿舍号</th>
        <th >邮箱</th>
        <th >手机号</th>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($vo['id']); ?></td>
        <td><?php echo ($vo['username']); ?></td>
        <td><?php echo ($vo['password']); ?></td>
        <td><?php echo ($vo['student_id']); ?></td>
        <td><?php echo ($vo['year']); ?></td>
        <td><?php echo ($vo['class']); ?></td>
        <td><?php echo ($vo['school']); ?></td>
        <td><?php echo ($vo['college']); ?></td>
        <td><?php echo ($vo['department']); ?></td>
        <td><?php echo ($vo['sex']); ?></td>
        <td><?php echo ($vo['nation']); ?></td>
        <td><?php echo ($vo['dorm']); ?></td>
        <td><?php echo ($vo['Email']); ?></td>
        <td><?php echo ($vo['phone']); ?></td>

        <td>
        <a href="/shzu/index.php/Admin/delete/id/<?php echo ($vo["id"]); ?>">删除</a>
        <a href="/shzu/index.php/Admin/update/id/<?php echo ($vo["id"]); ?>">修改</a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<br><br><br>
<div><?php echo ($page); ?></div><br><br>
<div id="txt"></div>
</center>
</body>
</html>