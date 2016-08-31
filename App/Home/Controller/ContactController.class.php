<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;


class ContactController extends HomeController {
	public function index(){

		if($_SESSION['user']){
    		$this->assign('user',$_SESSION['user']);
    	}

		$this->display();
	}
	//系列课程
	public function commit(){


		//显示填报人员名单


		if(count($_GET)==1){
		    	//面包屑
			    	if($_GET['id']){
			    		$title = M('36info')->where("id = ".$_GET['id'])->find();
			    	}
			    }




	    //课程列表菜单分页显示
		if($_GET['nid'] && $_GET['id']==''){
	 		$db = M('36info');//实例化模型，参数为数据库表名称，不包含前缀
		    if(isset($_GET['p'])){//判断地址栏是否有参数p；
		   		$page = $_GET['p'];
		    }else{
		   		$page = 1;
		    }
		    $count = $db->where("sid = ".$_GET['nid'])->count();//获取查询总记录数
		    $p = new Page($count,6);//实例化分页类
		    $show = $p->show();//分页显示输出
		    $this->assign('show',$show);//模板变量赋值
		    $result = $db->where("sid = ".$_GET['nid'])->order('createtime desc')->page($page,6)->select();//按创建时间降序排序，每页查询2条;
		    $this->assign('result',$result);




		    	$countOuto = $db->where("sid = ".$_GET['nid'])->order('createtime desc')->find();
				$id = $_GET['id']?$_GET['id'] : $countOuto['id'];
				$content1 = $db->where("id = ".$id)->find();
				$str = $content1['content'];
				$matter1 = htmlspecialchars_decode($str) ;
	    }



        //课程列表
		/*$sid = $_GET['nid'];
 		$commitTitle = M('36info')->where('sid = '.$sid)->select();*/
 		

 		//课程内容
 		$id = $_GET['id'];
 		$commitContent = M('36info')->where('id = '.$id)->find();
 		$str = $commitContent['content'];
		$matter = htmlspecialchars_decode($str) ;


		//显示报名用户
		$CommitUser = M('contacuser')->order('createtime desc')->limit(6)->select();

		for ($i=0; $i <6 ; $i++) { 
			$CommitUser[$i]['phone'] = substr($CommitUser[$i]['phone'],0,3).'*****'.substr($CommitUser[$i]['phone'],-3);
		}


		$this->assign('CommitUser',$CommitUser);
 		$this->assign('title',$title);
 		$this->assign('matter',$matter);
 		$this->assign('matter1',$matter1);
 		$this->assign('commitTitle',$commitTitle);
		$this->display();
	}

	//系列课程填报信息添加
	public function addCommitUser(){

		if($_POST['user']!='' && $_POST['phone']!='' && $_POST['email']!=''){
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$sphone = M("contacuser")->where(array("phone" => I("post.phone")))->find();
			$semail = M("contacuser")->where(array("email" => I("post.email")))->find();
			if($phone == $sphone['phone']){
				$this->error('此电话已存在!');
			}elseif($email == $semail['email']){
				$this->error('此邮箱已存在!');
			}else{
				 $data = array(
		                        'username' => I('post.user'),
		                        'phone' => I('post.phone'),
		                        'email' => I('post.email'),
		                        'company' => I('post.company'),
		                        'referrer' => I('post.referrer'),
		                        'createtime' =>  date('y-m-d h:i:s',time()),
		                        );
				$result = M('contacuser')->add($data);
				if($result){
					$this->success('报名成功!');
				}else{
					$this->error("提交数据失败!");
				}
			}
		}else{
			$this->error('非法提交!');
		}
	}



}