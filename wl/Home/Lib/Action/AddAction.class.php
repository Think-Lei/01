<?php
class AddAction extends Action
{
		function index()
		{
			$this->display();//显示页面
		}

    	public function add()
    	{
    		$User = M("imformation");


    		if(empty($_POST['username'])) //empty()函数判断是否为空值
			{
				$this->error('帐号必须！');
			}

			else if (empty($_POST['password']))
			{
				$this->error('密码必须！');
			}

    		if($_SESSION['verify'] != md5($_POST['code'])) //md5是加密方式
			{
   				$this->error('验证码错误！');
			}

    		if($_POST['password']!=$_POST['repassword'])
    		{
    			$this->error('密码不一致！');
    		}

    		$username=$_POST['username'];
			$password=$_POST['password'];

			$where['username']=$username;
			$where['password']=$password;
			$i=$User->where($where)->count();

			if($i<=0)
			{
 				// 然后直接给数据对象赋值
				$User->username = $username;
				$User->password = $password;
				 
				$i=$User->add();// 把数据对象添加到数据库

				if($i==0)
				{
					$this->error('注册失败');
				}

				else
				{
					$this->success('注册成功', '../Login');
					//Session::set(C('USER_AUTH_KEY'),$username);//将用户名写入Session
				}
			}
			else
			{
				$this->error('该用户已注册');
			}

    	}
	
}

?>