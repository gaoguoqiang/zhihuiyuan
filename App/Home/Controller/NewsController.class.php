<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;

class NewsController extends HomeController {
    public function index(){

    	if($_SESSION['user']){
    		$this->assign('user',$_SESSION['user']);
    	}


    	 //分页显示
	 		$db = M('news');//实例化模型，参数为数据库表名称，不包含前缀
		    if(isset($_GET['p'])){//判断地址栏是否有参数p；
		   		$page = $_GET['p'];
		    }else{
		   		$page = 1;
		    }
		    $count = $db->count();//获取查询总记录数
		    $p = new Page($count,9);//实例化分页类
		    $show = $p->show();//分页显示输出
		    $this->assign('show',$show);//模板变量赋值
		    $result = $db->order('date desc')->page($page,9)->select();//按创建时间降序排序，每页查询2条;
		    $this->assign('result',$result);

    	//获取news文章
    	//$news = M('news')->order('date desc')->select();
       		


       		$this->assign('news',$news);
        	$this->display();
    }


    public function showNews(){


    		//面包屑
    	if($_GET['id']){
    		$title = M('news')->where("id = ".$_GET['id'])->find();
	    }



	    //显示文章内容
	    if($_GET['id']!=''){
	    	$newsCount = M('news')->where('id = '.$_GET['id'])->find();
	    	$str = $newsCount['content'];
			$matter = htmlspecialchars_decode($str) ;
	    }

		



	    $this->assign('matter',$matter);
	    $this->assign('title',$title);
    	$this->display();
    }
}