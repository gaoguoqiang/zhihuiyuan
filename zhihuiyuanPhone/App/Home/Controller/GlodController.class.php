<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class GlodController extends Controller {
    public function index(){
    	//判断SESSION
    	if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);
    	}
    	if($_GET['id']){
    	$nid = $_GET['id'];
    	$re = M('36serves')->where('nid ='.$nid)->select();
    	$re1 = M('36info')->where('sid = '.$nid)->find();
    	$tit = $re1['infoname'];
    	$cont = htmlspecialchars_decode($re1['content']);
    
    	}
    	if($_GET['did']){
    	$re = M('datas')->where('did = '.$_GET['did'])->select();
    	}
         

     
    	

    	/*//下拉列表和首页连接接受的值''
		$tit = M('datas')->where('id < 13 && id>1')->select();
		if($_GET['nid']!=''&&$_GET['id']=''){
			$newsCount1 = M('info')->where('id = '.$_GET['nid'])->find();
	    	$str1 = $newsCount1['infoname'];
	    	$str = $newsCount1['content'];
			$matter = htmlspecialchars_decode($str) ;

		}elseif ($_GET['id']!=''&&$_GET['nid']=''){
			$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount1['dataname'];
	        }
	   
	    	if($_GET['id']!=''){
	    	$newsCount = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str = $newsCount['content'];
			$matter = htmlspecialchars_decode($str) ;
		}
		// /////////////////////////
		if($_GET['nid']!=''){
	    	$newsCount1 = M('info')->where('id = '.$_GET['nid'])->find();
	    	$str1 = $newsCount1['infoname'];
	    	$str = $newsCount1['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }
	    //首页左侧列表
		if($_GET['id']!=''){
	    	$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount1['dataname'];
	        }
	   
	    	if($_GET['id']!=''){
	    	$newsCount = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str = $newsCount['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }

		$tit1 = M('datas')->where('id = '.$id)->select();
		$tit2 = M('datas')->where('id = 2')->find();

		$tit2['content'] = htmlspecialchars_decode($tit2['content']);
		$newsCount2 = M('datas')->where('did = '.$_GET['id'])->select();
		$content2 = getTypeStr2();
		$this->assign('content2',$content2);
    	$this->assign('newsCount2',$newsCount2); 
		$this->assign('str1',$str1);
	    $this->assign('matter',$matter);
	  	$this->assign('tit2',$tit2);
		$this->assign('tit',$tit);*/
		$content2 = getTypeStr2();
 		$this->assign('content2',$content2);
		$this->assign('tit',$tit);
		$this->assign('cont',$cont);
		$this->assign('re',$re);
        $this->display();
    }
    public function goldproject(){
    	//判断SESSION
    	if(!empty($_SESSION)){
			
    		$this->assign('session',$_SESSION);
    	}


    	$result = M('36info')->where('sid ='.$_GET['id'])->find();
    		/*//内容页左侧列表
    		$tit = M('datas')->where('id < 13 && id>1')->select();
    		if($_GET['id']!=''){
	    	$newsCount1 = M('datas')->where('id = '.$_GET['id'])->find();
	    	$str1 = $newsCount1['dataname'];
	        
	    	$str = $newsCount1['content'];
			$matter = htmlspecialchars_decode($str) ;
	        }
	        $newsCount2 = M('datas')->where('did = '.$_GET['id'])->select();
	        $content2 = getTypeStr2();
	        $this->assign('content2',$content2);
    	    $this->assign('newsCount2',$newsCount2); 
	        $this->assign('str1',$str1);
    		$this->assign('matter',$matter);
	        $this->assign('tit',$tit);*/
			$content2 = getTypeStr2();
 	     	$this->assign('content2',$content2);
	        $this->assign('result',$result);
	       
	        $this->display();
	    
    }
   public function teachermore(){
   	//判断SESSION
    	if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);
    	}
   			$tit = M('teacher')->where('id ='.$_GET['id'])->find();
   			$content2 = getTypeStr2();
 		    $this->assign('content2',$content2);
   			$this->display();
   }

  public function personal(){
  	//判断SESSION
    	if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);
    	}
  		$id = $_SESSION['id'];
  		$result = M('users')->where('id = '.$id)->find();
  		$tid = $result['tid'];
  		$result1 = M('teacher')->where('id = '.$tid)->find();
  		$this->assign('result',$result);
     	$this->assign('result1',$result1);
     	$this->display();
  }
    // function goldproject(){

    // 	// $con = M('datas')->where('')
    // 	$this->display("Glod/goldproject");
    // }
public function person(){

	  

        //清理session
        session(null);
        //清除自动登录的cookie
        cookie('user',null);
        //跳转到成功页面
        $this->success('退出成功!',U('Index/index'));

            }


    	



   }