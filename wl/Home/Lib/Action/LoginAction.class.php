<?php
	import('ORG.Util.Session');//导入session类

	class LoginAction extends Action
	{

		function index()
		{
			$this->display();//显示登陆页面
		}

		function do_login()//登陆验证
		{
			Session::set('username',$_POST['username']);//将username存入session;
			if(empty($_POST['username']))
			{
				$this->error('帐号必须！');
			}

			else if (empty($_POST['code']))
			{
				$this->error('验证码必须！');
			}

			else if (empty($_POST['password']))
			{
				$this->error('密码必须！');
			}

			//dump($_SESSION);//调试方法
			$username=$_POST['username'];
			$password=$_POST['password'];
			$code=$_POST['code'];



			if($_SESSION['verify'] != md5($_POST['code'])) //md5是加密方式
			{
   				$this->error('验证码错误！');//显示错误页面
			}

			$m=M('imformation');//连接表
			$where['username']=$username;
			$where['password']=$password;
			$i=$m->where($where)->count();


			if($username=="1701210370")
			{
				if($i>0)
				{
					$this->redirect('Admin/index');
				}

			}
	 		else if($i>0)
			{

				$this->redirect('User/index');//跳转
			}

			else
			{
				$this->error('用户名或密码错误');
			}

		}

	}
?>
