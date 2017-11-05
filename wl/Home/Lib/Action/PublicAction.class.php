<?php
	class PublicAction extends Action
	{
		function code ()//生成验证码方法
		{
			import('ORG.Util.Image');//引入Image类
    		Image::buildImageVerify(4,1,png,155,30,verify);//调用buildImageVerify()方法
    	}
	
	}
?>