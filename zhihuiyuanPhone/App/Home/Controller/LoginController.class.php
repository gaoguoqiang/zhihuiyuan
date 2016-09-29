<?php
namespace Home\Controller;

use Think\Controller;


use Think\Upload;

header('content-type:text/html;charset=utf-8');
class LoginController extends Controller {
    public function index(){
        //判断SESSION
        if(!empty($_SESSION)){
            $this->assign('session',$_SESSION);
        }

		$content2 = getTypeStr2();
 		$this->assign('content2',$content2);
        $this->display();
        }



    public function information(){
//判断SESSION
        if(!empty($_SESSION)){
            $this->assign('session',$_SESSION);
        }

			$content2 = getTypeStr2();
 	    	$this->assign('content2',$content2);
            $this->display();
    	
    }
    public function regmobile(){
//判断SESSION
        if(!empty($_SESSION)){
            $this->assign('session',$_SESSION);
        }
		$content2 = getTypeStr2();
 		$this->assign('content2',$content2);
    	$this->display();
    }
    public function login(){


    	//登陆验证
       $user = $_POST['user'];
       $password = md5($_POST['password']);

        $result = M("Users")->where(array(
        		"user" => $user,
        		'password' => $password,
        	))->find();
        if($user == $result['user'] && $password == $result['password']){
        	$this->success('登录成功!',U('Index/index'));
            $_SESSION["id"] = $result['id'];
            $_SESSION["vip"] = $result['vip'];
            $_SESSION["user"] = $user;
            $_SESSION["password"] = $result['password'];


        }else{
        	$this -> error('用户名或密码不正确!');
        } 
        }



    public function zhuce(){
        //判断SESSION
        if(!empty($_SESSION)){
            $this->assign('session',$_SESSION);
        }

        if($_POST){
            if($_POST['user'] == ''){
                $this->error('用户名不能为空!');
            }elseif($_POST['password'] == ''){
                $this->error('密码不能为空!');
            }else{
                if($_FILES['img']['name']){
    
                     //头像上传
                    $upload = new Upload(); //实例化上传类
                    $upload->maxSize = 1000000; //设置上传大小，字节
                    $upload->exts =  array('jpg','gif','png','jpeg'); //限定后缀
                    $upload->savePath = './Uploads/'; //在根目录Uploads下
                    $upload->autoSub = false;//不设置子目录
                    $info = $upload->upload(); //执行上传方法
                   
                    if (!$info) {
                        $this->error($upload->getError()); //错误了
                    }
                    //表单验证
                     $re = M('users')->where(array('email'=>I('post.email')))->find();
                    if($re){
                        $this->error('邮箱已注册!');
                        exit();
                    }
                    $rel = M('users')->where(array('phone'=>I('post.phone')))->find();
                    if($rel){
                        $this->error('手机已注册!');
                        exit();
                    }

                    //提交数据
                     $data = array(
                                'user' => I('post.user'),
                                'password' => MD5(I('post.password')),
                                'sex' => I('post.sex'),
                                'email' => I('post.email'),
                                'phone' => I('post.phone'),
                                'createtime' => date('Y-m-d H-i-s'),
                                'tid' => $tid['id'] + 1,
                                );                    
                                $uid=M('Users')->add($data);
                                $date['id'] = $uid;
                                $date['face'] =$info['img']['savename'];
                                $tid['tid'] = $uid;
                                $face = M('teacher')->add($date);
                                $tid = M('Users')->where('id ='.$uid)->save($tid);
                            if ($uid){
                                $this->success('注册成功!',U('Index/index'));
                            } else {
                                $this->error("提交数据失败");
                            }
                }else{
                    //表单验证
                     $re = M('users')->where(array('email'=>I('post.email')))->find();
                    if($re ){
                        $this->error('邮箱已注册!');
                        exit();
                    }
                    $rel = M('users')->where(array('phone'=>I('post.phone')))->find();
                    if($rel){
                        $this->error('手机已注册!');
                        exit();
                    }
                     $data = array(
                                'user' => I('post.user'),
                                'password' => MD5(I('post.password')),
                                'sex' => I('post.sex'),
                                'email' => I('post.email'),
                                'phone' => I('post.phone'),
                                'createtime' => date('Y-m-d H-i-s'),
                                'tid' => $tid['id'] + 1,
                                );                    
                                $uid=M('Users')->add($data);
                                $date['id'] = $uid;
                                $tid['tid'] = $uid;
                                $face = M('teacher')->add($date);
                                $tid = M('Users')->where('id ='.$uid)->save($tid);
                    if ($uid){
                        $this->success('注册成功!',U('Index/index'));
                    } else {
                        $this->error("提交数据失败");
                    }
                }
            }      
        }
    }
    



    	



}