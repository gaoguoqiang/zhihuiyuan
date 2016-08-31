<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class IndexController extends HomeController {
    public function index(){


    	if($_SESSION['user']){
    		//登录用户信息
    		$result = M('users')->where($_SESSION)->find();
    		$_SESSION['vip'] = $result['vip'];
    		$this->assign('user',$_SESSION['user']);
    	}


    	//前台轮播显示
    	$datas = M('datas')->where('type=1')->limit(6)->select();
    	$datas2 = M('datas')->where('type=2')->limit(5)->select();



    	$typeStr=getTypeStr2();

    	$this->assign('datas2',$datas2);
    	$this->assign('datas',$datas);
		$this->assign('typeStr',$typeStr);
        $this->display();
    }


    //首页列表
    public function commitList1(){
    	if($_GET['nid'] == 16){
    		header("Location: ".__ROOT__."/Contact/commit/nid/16");
    	}elseif($_GET['nid'] == 17){
    		header("Location: ".__ROOT__."/Reteacher/index/nid/17");
    	}elseif($_GET['nid'] == 18){
    		header("Location: ".__ROOT__."/Train/index/nid/18");
		}elseif($_GET['nid'] == 22){
			header("Location: ".__ROOT__."/Reteacher/index/nid/22");
    	}else{
		    	if(count($_GET)==1){
		    	//面包屑
			    	if($_GET['nid']){
			    		$title = M('36serves')->where("id = ".$_GET['nid'])->find();
			    	}elseif($_GET['id']){
			    		$title2 = M('36serves')->where("id = ".$_GET['id'])->find();
			    		$title = M('36serves')->where("id = ".$title2['nid'])->find();
			    		$title3 = M('36info')->where("sid = ".$_GET['id'])->order('id desc')->find();
			    	}elseif($_GET['iId']){
			    		$title3 = M('36info')->where("id = ".$_GET['iId'])->find();
			    		$title2 = M('36serves')->where("id = ".$title3['sid'])->find();
			    		$title = M('36serves')->where("id = ".$title2['nid'])->find();
			    	}
		    	}elseif($_GET['id'] && $_GET['nid']){
		    		$title = M('36serves')->where("id = ".$_GET['nid'])->find();
		    		$title2 = M('36serves')->where("id = ".$_GET['id'])->find();
		    		$title3 = M('36info')->where("sid = ".$_GET['id'])->order('id desc')->find();
		    	}
				
				
				
				//一级分类下的默认文章显示

				if(count($_GET)==1 && $_GET['nid'] != ''){

					$cont = M('36info')->where('sid = '.$_GET['nid'])->find();

					$cont = htmlspecialchars_decode($cont['content']);

					$this->assign('cont',$cont);

				}

		    	
		    	/*if(!$_GET['id']){
		    	//显示二级列表下的三级列表内容
		    	$toList = M('36serves')->where("nid = ".$_GET['nid'])->select();
		    	}*/

		    	/*//三级目录下的文章列表
				$threeList = M('36info')->where("sid = ".$_GET['id'])->select();*/

		 		//二级菜单分页显示
				if($_GET['nid'] && $_GET['id']==''){
			 		$db = M('36serves');//实例化模型，参数为数据库表名称，不包含前缀
				    if(isset($_GET['p'])){//判断地址栏是否有参数p；
				   		$page = $_GET['p'];
				    }else{
				   		$page = 1;
				    }
				    //import('ORG.Util.Page');//导入分页类;
				    $count = $db->where("nid = ".$_GET['nid'])->count();//获取查询总记录数
				    $p = new Page($count,10);//实例化分页类
				    $show = $p->show();//分页显示输出
				    $this->assign('show',$show);//模板变量赋值
				    $result = $db->where("nid = ".$_GET['nid'])->order('id desc')->page($page,10)->select();//按创建时间降序排序，每页查询2条;
				    $this->assign('result',$result);
			    }

			    //三级菜单分页显示
			    if($_GET['id'] && $_GET['nid']==''){
			    	$db = M('36info');//实例化模型，参数为数据库表名称，不包含前缀
				    if(isset($_GET['p'])){//判断地址栏是否有参数p；
				   		$page = $_GET['p'];
				    }else{
				   		$page = 1;
				    }
				    //import('ORG.Util.Page');//导入分页类;
				    $count = $db->where("sid = ".$_GET['id'])->count();//获取查询总记录数
				    $p = new Page($count,10);//实例化分页类
				    $show = $p->show();//分页显示输出
				    $this->assign('show',$show);//模板变量赋值
				    $result2 = $db->where("sid = ".$_GET['id'])->order('id desc')->page($page,10)->select();//按创建时间降序排序，每页查询2条;
				    $this->assign('result2',$result2);



				     $countOuto = $db->where("sid = ".$_GET['id'])->order('id desc')->find();
				$id = $_GET['iId']?$_GET['iId'] : $countOuto['id'];
				$content1 = $db->where("id = ".$id)->find();
				$str = $content1['content'];
				$matter1 = htmlspecialchars_decode($str) ;
			    }
			    if($_GET['id'] && $_GET['nid']){
			    	$db = M('36info');//实例化模型，参数为数据库表名称，不包含前缀
				    if(isset($_GET['p'])){//判断地址栏是否有参数p；
				   		$page = $_GET['p'];
				    }else{
				   		$page = 1;
				    }
				    //import('ORG.Util.Page');//导入分页类;
				    $count = $db->where("sid = ".$_GET['id'])->count();//获取查询总记录数
				    $p = new Page($count,10);//实例化分页类
				    $show = $p->show();//分页显示输出
				    $this->assign('show',$show);//模板变量赋值
				    $result2 = $db->where("sid = ".$_GET['id'])->order('id desc')->page($page,10)->select();//按创建时间降序排序，每页查询2条;
				    $this->assign('result2',$result2);



				     $countOuto = $db->where("sid = ".$_GET['id'])->order('id desc')->find();
				$id = $_GET['iId']?$_GET['iId'] : $countOuto['id'];
				$content1 = $db->where("id = ".$id)->find();
				$str = $content1['content'];
				$matter1 = htmlspecialchars_decode($str) ;
			    }








				//显示文章内容 
				$content = M('36info')->where("id = ".$_GET['iId'])->find();
				
				$str = $content['content'];
				$matter = htmlspecialchars_decode($str) ;




				//$matter = preg_replace("/<\/?[^>]+>/i",'',$str);
				$this->assign('title',$title);
				$this->assign('title2',$title2);
				$this->assign('title3',$title3);
				$this->assign('toList',$toList);
				$this->assign('content1',$content1);
				$this->assign('threeList',$threeList);
				$this->assign('matter',$matter);
				$this->assign('matter1',$matter1);
				$this->assign('content',$content);
		    	$this->display('Index/36');
		    }
		}



	//轮播效果
	public function commitList2(){

		if(count($_GET)==1){
    	//面包屑
	    	if($_GET['id']){
	    		$title = M('datas')->where("id = ".$_GET['id'])->find();
	    	}elseif($_GET['did']){
	    		$title2 = M('datas')->where("id = ".$_GET['did'])->find();
	    		$title = M('datas')->where("id = ".$title2['did'])->find();
	    	}	

	    	/*//显示二级列表下的三级列表内容
    	$toList = M('datas')->where("did = ".$_GET['id'])->select();*/
    	};




    	


 		//二级菜单分页显示
		if($_GET['id'] && $_GET['did']==''){
	 		$db = M('datas');//实例化模型，参数为数据库表名称，不包含前缀
		    if(isset($_GET['p'])){//判断地址栏是否有参数p；
		   		$page = $_GET['p'];
		    }else{
		   		$page = 1;
		    }
		    //import('ORG.Util.Page');//导入分页类;
		    $count = $db->where("did = ".$_GET['id'])->count();//获取查询总记录数
		    $p = new Page($count,10);//实例化分页类
		    $show = $p->show();//分页显示输出
		    $this->assign('show',$show);//模板变量赋值
		    $result = $db->where("did = ".$_GET['id'])->order('id desc')->page($page,10)->select();//按创建时间降序排序，每页查询2条;
		    $this->assign('result',$result);





		     $countOuto = $db->where("did = ".$_GET['id'])->order('id desc')->find();


			$str = $countOuto['content'];
			$matter1 = htmlspecialchars_decode($str) ;

			//$count = preg_replace("/<\/?[^>]+>/i",'',$str);
		    }

	    







		//显示文章内容 
		$content = M('datas')->where("id = ".$_GET['did'])->find();
		
		$str = $content['content'];
		$matter = htmlspecialchars_decode($str) ;





		//$matter = preg_replace("/<\/?[^>]+>/i",'',$str);
		$this->assign('title',$title);
		$this->assign('title2',$title2);
		$this->assign('title3',$title3);
		$this->assign('toList',$toList);
		$this->assign('content1',$content1);
		$this->assign('threeList',$threeList);
		$this->assign('matter',$matter);
		$this->assign('matter1',$matter1);
		$this->assign('content',$content);
    	$this->display('Index/carousel');
		    
	}



}