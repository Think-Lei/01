<?php 

class AdminAction extends Action
{

    	public function index()
    	{
            

    	    $User = M("imformation"); // 连接表
           // $arr=$User->select();//显示表中所有数据select函数
          //  $this->assign('data',$arr);//将arr的值传入模板,模板用{$data}调用
        //-----------------------------------------------------------------
            //分页
            //1.计算总数
            $count = $User->count();
            //2.导入分页类
            import("ORG.Util.Page");
            //3.实例化分页类,就是赋值new Page(总数, 页数);
            $p = new Page($count, 2);
            //4.分页显示输出
            $page = $p->show();

            // 当前页数据查询,order()是排序函数
            $list = $User->order('id ASC')->limit($p->firstRow.','.$p->listRows)->select();

            // 赋值赋值
            $this->assign('page', $page);
            $this->assign('data', $list);


      	  	$this->display();//显示页面
    	}

    	function delete()
    	{
    		$User=M("imformation");
    		$id=$_GET['id'];
    		$count=$User->delete($id);
    		
    		if($count==0)
    		{
    			$this->error('删除失败');
    		}
    		else
    		{
    			$this->success('删除成功');
    		}

    	}



        public function update()
        {  
            $User=M("imformation");
            $arr=$User->find($id);//查找主键值
            $this->assign('data',$arr); 
            $this->display();
        }


        public function update2()
        {


            $User = M("imformation");

            $data['username']=$_POST['username'];
            $data['password']=$_POST['password'];
            echo $data['id'];
            echo '123';
            echo $arr['id'];

            $count=$User->save($data); 

            if($count>0)
            {
                $this->success('数据修改成功','index');
            }
            else
            {
                $this->error('数据修改失败');
            }
        }

        public function search()
        {
           //获取post的数据，根据数据组装查询的条件，根据条件从数据库中获取数据，返回给页面中遍历
            if(isset($_POST['username']) && $_POST['username']!=null)
            {
                $where['username']=array('like',"%{$_POST['username']}%");
            }

            $m=M("imformation");

            $arr=$m->where($where)->select();

            $this->assign('data',$arr);

            $this->display('index');

        }

}

?>