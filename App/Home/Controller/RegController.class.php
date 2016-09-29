<?php
namespace Home\Controller;

use Think\Controller;

use Think\Upload;

class RegController extends HomeController {
    public function index(){


        if($_SESSION['user']){
            $this->assign('user',$_SESSION['user']);
        }
       
            $this->display();

    }

    //注册
    public function insert() {
        if(isset($_POST['user'])) {
            if($_POST['password'] == ''){
                $this->error('密码不能为空!');
            }else{
                if(!empty($_FILES['userfile']['name'])){
                    //头像上传
                    $upload = new Upload(); //实例化上传类
                    $upload->maxSize = 1000000; //设置上传大小，字节
                    $upload->exts =  array('jpg','gif','png','jpeg'); //限定后缀
                    $upload->savePath = './'; //在根目录Uploads下
                    $upload->autoSub = false;//不设置子目录
                    $info = $upload->upload(); //执行上传方法
                    if (!$info) {
                        $this->error($upload->getError()); //错误了
                        exit();
                    } else {
                        //定义密码和时间
                        $_POST['password'] = md5(I("post.password"));
                        $_POST['createtime'] = date("Y-m-d", time("H:i:s"));
                        //查询注册信息
                        //手机号不能重复
                         $userRec = M("users")->where(array("phone" => I("post.phone")))->find();
                        if ($userRec['user'] == $_POST['user']) {
                            $this->error("手机号已注册!");
                        };
                        //邮箱不能重复
                         $userRec2 = M("users")->where(array("email" => I("post.email")))->find();
                         if ($userRec2['email'] == $_POST['email']) {
                            $this->error("邮箱已注册!");
                        };

                        //提交注册信息
                        $data = array(
                            'user' => I('post.user'),
                            'password' => I('post.password'),
                            'sex' => I('post.sex'),
                            'email' => I('post.email'),
                            'phone' => I('post.phone'),
                            'createtime' => I('post.createtime'),
                            );

                            $uid = M('Users')->add($data);
                            $date['id'] = $uid;
							$tid['tid'] = $uid;
							$tid = M('users')->where('id = '.$uid)->save($tid);
                            $date['face'] = $info['userfile']['savename'];
                            $face = M('teacher')->add($date);
                        if ($uid && $face) {
                            $this->success('注册成功!',U('Index/index'));
                        } else {
                            $this->error("提交数据失败!");
                        }
                    }
                    
                }else{
                     //定义密码和时间
                    $_POST['password'] = md5(I("post.password"));
                    $_POST['createtime'] = date("Y-m-d", time("H:i:s"));
                    $_POST['face'] = $_FILES['userfile']['name'];
                    //查询注册信息
                        //手机号不能重复
                         $userRec = M("users")->where(array("phone" => I("post.phone")))->find();
                        if ($userRec['user'] == $_POST['user']) {
                            $this->error("手机号已注册!");
                        };
                        //邮箱不能重复
                         $userRec2 = M("users")->where(array("email" => I("post.email")))->find();
                         if ($userRec2['email'] == $_POST['email']) {
                            $this->error("邮箱已注册!");
                        };

                    //提交注册信息
                    $data = array(
                        'user' => I('post.user'),
                        'password' => I('post.password'),
                        'sex' => I('post.sex'),
                        'email' => I('post.email'),
                        'phone' => I('post.phone'),
                        'createtime' => I('post.createtime'),
                        );

                        
                        $uid=M('Users')->add($data);
                        $date['id'] = $uid;
						$tid['tid'] = $uid;
						$tid = M('users')->where('id = '.$uid)->save($tid);
                        $face = M('teacher')->add($date);

                    if ($uid && $face) {
                        $this->success('注册成功!',U('Index/index'));
                    } else {
                        $this->error("提交数据失败");
                    }
                }   
            }
        }
    }



}