<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;

class TrainController extends HomeController {
    public function index(){

    	//查询发表培训需求内容
    	$result = M('trainneed')->order('createtime desc')->select();


    	//分页
    	$db = M('trainneed');//实例化模型，参数为数据库表名称，不包含前缀
		    if(isset($_GET['p'])){//判断地址栏是否有参数p；
		   		$page = $_GET['p'];
		    }else{
		   		$page = 1;
		    }
		    //import('ORG.Util.Page');//导入分页类;
		    $count = $db->count();//获取查询总记录数
		    $p = new Page($count,8);//实例化分页类
		    $show = $p->show();//分页显示输出
		    $this->assign('show',$show);//模板变量赋值
		    $result = $db->order('id desc')->page($page,8)->select();//按创建时间降序排序，每页查询10条;
		    $this->assign('result',$result);
    	$this->assign('result',$result);
    	
    	$this->display();
    }



    //添加培训需求
    public function add(){
    	if($_SESSION['user']){
    		if($_POST['title']!='' AND $_POST['content'] !=''){
		    	//添加发表文章
		    	$_POST['name'] = $_SESSION['user'];
		    	$_POST['createtime'] = date('Y-m-d ');

		    	$result = M('trainneed')->add($_POST);

		    	if($result){
		    		$this->success('发表成功!',U('Train/index'));
		    	}else{
		    		$this->error('发表失败!');
		    		exit();
		    	}
		    }else{
		    	$this->error('请填写标题及内容!');
		    	exit();
		    }
    	}else{
    		$this->error('请登录!');
    		exit();
    	};
    }

    //显示发表内容
    public function show(){
    	//查询发表培训需求内容
    	$result = M('trainneed')->select();
    	print_r($result);



    }







}