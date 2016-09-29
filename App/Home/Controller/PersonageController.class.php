<?php
namespace Home\Controller;

use Think\Controller;

use Think\Upload;
header("Content-type:text/html;charset=utf-8");

class PersonageController extends HomeController {
	//个人中心
    public function index(){


    	if($_SESSION['user']){
    		$this->assign('user',$_SESSION['user']);
    	}
        $user = $_SESSION['user'];
        $password = $_SESSION['password'];
        $result = M('Users')->where(array(
                "user" => $user,
                'password' => $password,
                ))->find();

        $result2 = M('teacher')->where("id= ".$result['tid'])->find();
        $result2['teacher'] = json_decode($result2['teacher']);

        $arr = $result2['teacher'];

        //将stdClass Object数据转为数组
          if(is_object($arr)){
            $arr = (array)$arr;
          }

        $this->assign('arr',$arr);
        $this->assign('result',$result);
        $this->assign('result2',$result2);

    	$this->display();
    }

    //完善个人资料
    public function orgData(){
        //显示个人资料
        if($_SESSION['user']){

            $userResulr1 = M('users')->where(array(
                "user" => $_SESSION['user'],
                'password' => $_SESSION['password'],
            ))->find();

            $userResulr = M('teacher')->where('id = '.$userResulr1['tid'])->find();

             $userResulr['teacher'] = json_decode($userResulr['teacher']);
             //print_r($userResulr);
            $arr = $userResulr['teacher'];
            //将stdClass Object数据转为数组
          if(is_object($arr)){
            $userResulr['teacher'] = (array)$arr;
          }

            $this->assign('userResulr',$userResulr);
            $this->assign('userResulr1',$userResulr1);
            $this->assign('user',$_SESSION['user']);
        }

    	$this->display('Personage/perfectInfo');
    }

    //更新个人资料
    public function save(){
        if($_POST) {
            if(!empty($_FILES['face']['name'])){
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
                    $_POST['face'] = $info['face']['savename'];
                     //teacher数组转为json数据处理
                    $_POST['teacher'] = json_encode($_POST['teacher']);

                    $user = $_SESSION['user'];
                    $password = $_SESSION['password'];
                    $result = M('Users')->where(array(
                        "user" => $user,
                        'password' => $password,
                        ))->find();

                    $result = M('teacher')->where('id = '.$result['tid'])->save($_POST);

                    if ($result) {
                        $this->success('信息更新成功!',U('Personage/index'));
                    } else {
                        $this->error("信息提交数据失败");
                    }    
                }
                
            }else{

                //teacher数组转为json数据处理
                if($_POST['teacher'] != null){
                 $_POST['teacher'] = json_encode($_POST['teacher']);
                }
                $user = $_SESSION['user'];
                $password = $_SESSION['password'];
                $result = M('Users')->where(array(
                    "user" => $user,
                    'password' => $password,
                    ))->find();

                $result = M('teacher')->where('id = '.$result['tid'])->save($_POST);

                if ($result) {
                    $this->success('信息更新成功!',U('Personage/index'));
                } else {
                    $this->error("信息提交数据失败");
                }
                    
            }   
        }
    }



}