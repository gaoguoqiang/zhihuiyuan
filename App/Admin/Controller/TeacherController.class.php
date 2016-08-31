<?php
namespace Admin\Controller;
use Think\Controller;
class TeacherController extends Controller {
    public 	function index(){
    	if($_SESSION){
	    	if($_SESSION['adminuser']){
	          $this->assign('session',$_SESSION);
	        }
			$js=M("teacher")->select();
			$this->assign("js",$js);
			$db=M("users");
			$result = $db->query('SELECT * FROM si_teacher n, si_users i WHERE n.id = i.tid ');
	        $this->assign("result",$result);
			$this->display();
		}else{
        	$this->error('非法访问!');
      	}
		
	}
	function teacher(){
		if($_SESSION){
			if($_SESSION['adminuser']){
	            $this->assign('session',$_SESSION);
	        }
	        if($_GET['id']){
	        	$re = M('users')->where('id = '.$_GET['id'])->find();
	        	$result = M('teacher')->where('id = '.$re['tid'])->find();
	        }



	        $this->assign("re",$re);
			$this->assign("result",$result);
			$this->display('Teacher/teacher');
		}else{
        	$this->error('非法访问!');
      	}

		
	}


	//会员等级管理
	public function vip(){
		if($_SESSION){

			$data['id'] = $_GET['id'];
			$data['vip'] = $_GET['vip'];
			$result = M('users')->data($data)->save();
			if($result){
				$this->success('会员等级修改成功!');
			}else{
				$this->error('会员等级修改失败!');
			}



			$this->display('Teacher/index');
		}else{
        	$this->error('非法访问!');
      	}
	}




}