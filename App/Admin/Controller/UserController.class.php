<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        if($_SESSION){
            if($_SESSION['adminuser']){
                $this->assign('session',$_SESSION);
            }
			if($_SESSION['state'] == 2){
				$us=M("admin_users")->select();

				$this->assign("us",$us);
			}else{
				$this->error('您不是超级会员!');
			}		
            $this->display();
        }else{
            $this->error('非法访问!');
        }
    }



    //会员注册
    public function register(){

    	if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    	$user = $_POST['username'];
    	$password = md5($_POST['password']);
    	$data['uname'] = $user;
    	$data['password'] = $password;
    	$re = M('admin_users')->where(array("uname" => I("post.username")))->find();
    	if($re){
    		$this->error('用户名已存在!');
    		exit();
    	}elseif($_POST['password'] != $_POST['ypassword']){
    		$this->error('两次输入密码不正确!');
    		exit();
    	}else{
	    	if($user && $password){
	    		$result = M('admin_users')->add($data);
	    		if($result){
	    			$this->success('注册成功!');
	    		}else{
	    			$this->error('注册失败!');
	    		};
	    	}else{
	    		$this->error('用户名和密码不能为空!');
	    	}
    	}
    }


    //管理员修改显示 
    public function updateShow(){
        if($_SESSION){

        	if($_SESSION['adminuser']){
                $this->assign('session',$_SESSION);
            }
        	$result = M('admin_users')->where('id = '.$_GET['id'])->find();
        	$this->assign('result',$result);
        	$this->display();
        }else{
            $this->error('非法访问!');
        }
    }

    //管理员修改
    public function update(){
    	if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    	$re = M('admin_users')->where(array("id" => I("post.unameid")))->find();
    	if((md5($_POST['oldpassword'])) != $re['password']){
    		$this->error('原始密码输入错误!');
    		exit();
    	}elseif($_POST['password'] == '' || $_POST['ypassword'] == ''){
    		$this->error('密码及确认密码不能为空!');
    	}elseif($_POST['password'] != $_POST['ypassword']){
    		$this->error('确认密码输入错误!');
    		exit();
    	}else{
    		$data['id'] = $_POST['unameid'];
	    	$data['uname'] = $_POST['uname'];
	    	$data['password'] = md5($_POST['password']);
    		$result = M('admin_users')->data($data)->save();
    		if($result){
    			$this->success('管理员信息修改成功!');
    		}else{
    			$this->error('管理员信息修改失败!');
    		}
    	}
    	
    }

    //管理员登记管理

    public function grade(){
        if($_SESSION){

        	if($_SESSION['adminuser']){
               $this->assign('session',$_SESSION);
            }
            $us=M("admin_users")->select();
        	$data['id'] = $_GET['id'];
        	$data['state'] = $_GET['state'];
        	$re = M('admin_users')->data($data)->save();
        	if($re){
        		$this->success('会员等级修改成功!');
        	}else{
        		$this->error('会员等级修改失败!');
        	}
        	$this->assign('User/index');
        }else{
            $this->error('非法访问!');
        }
    }

}