<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html

PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html>
<head>
<title>simple document</title>
</head>
<body>

<form method="post" action='__URL__/addmessage'>
<br><br>
请留言:<br><br>
<br>

<textarea name="message" rows="6"cols="120"></textarea><br>
<input type="submit">

</form>
<br><br>

    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo['username']); ?>:
        <br>
        <div style="width:300px;height:100px; border:1px solid #000;">
        <?php echo ($vo['message']); ?>
        </div>
<br><br><br><?php endforeach; endif; else: echo "" ;endif; ?>

    <div><?php echo ($page); ?></div><br><br>



</body>
</html>