<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends HomeController {
	public function index(){

        if($_SESSION['user']){
            $this->assign('user',$_SESSION['user']);
        }

        //前台轮播显示
        $datas = M('datas')->where('type=1')->limit(6)->select();
        $datas2 = M('datas')->where('type=2')->limit(6)->select();

        $this->assign('datas2',$datas2);
        $this->assign('datas',$datas);



		
         $typeStr=getTypeStr2();
            $this->assign('typeStr',$typeStr);
		$this->display('Index/index');
	}
    public function login(){
       $user = $_POST['user'];
       $password = md5($_POST['password']);

        $result = M("Users")->where(array(
        		"user" => $user,
        		'password' => $password,
        	))->find();
        if($user == $result['user'] && $password == $result['password']){
        	$this->success('登录成功!',U('Login/index'));
            $_SESSION["vip"] = $result['vip'];
            $_SESSION["user"] = $user;
            $_SESSION["password"] = $result['password'];
        }else{
        	$this -> error('用户名或密码不正确!');
        }

    }
    public function logout(){
        //清理session
        session(null);
        //清除自动登录的cookie
        cookie('user',null);
        //跳转到成功页面
        $this->success('退出成功!',U('Index/index'));
    }
}