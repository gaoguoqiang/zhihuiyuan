<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index() {

        if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }



        $this->display("User/login");
    }

    //登录验证
    public function login() {
        $userRec = M("admin_users")->where(array(
            "uname" => I("post.uname"),
            "password" => md5(I("post.password")),
            ))->find();
        if($userRec){
            if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
            $this->success('登陆成功!',U("Admin/Index/index"),2);
            $_SESSION['adminuser'] = $userRec['uname'];
            $_SESSION['state'] = $userRec['state'];
        }else{
            $this->error('用户名或密码错误!');
        }
       
    }


    //退出登录
    public function loginOut(){
         //清理session
        session(null);
        //清除自动登录的cookie
        cookie('user',null);
        //跳转到成功页面
        $this->success('退出成功!','/zhihuiyuan/Index/index');
    }
    
       
}
      