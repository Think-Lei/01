<?php 

class UserAction extends Action
{
	

    	public function index()
    	{
    		
    		$value1 = session('username');//获得Login模块的session值
   
        $this->assign('name',$value1);//将value1的值传入模板,模板用{$name}调用
    	    
      	$this->display();//显示页面
    
   	}


	
}

?>