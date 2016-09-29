<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;
header('content-type:text/html;charset=utf-8');
class IndexController extends HomeController {
    public function index(){
    		if(!empty($_SESSION)){
    		$this->assign('session',$_SESSION);


    	}

  		
		//显示文章内容 
 		$content = M('datas')->where('id >1 && id <7')->select();
 		$str = $content['content'];
		//把内容标签输出成字符
 		$matter = htmlspecialchars_decode($str) ;
 		$content1 = M('datas')->where('id >6 && id <= 12')->select();
 		$str1 = $content1['content1'];
 		$matter1 = htmlspecialchars_decode($str1);
 		$content2 = getTypeStr2();
 		$this->assign('content2',$content2);
 		$this->assign('content1',$content1);
		$this->assign('matter',$matter);
 		$this->assign('title',$title);
 		$this->assign('content',$content);
    $this->display();
    }
    public function project(){
      //判断SESSION
      if(!empty($_SESSION)){
        $this->assign('session',$_SESSION);
      }
      if($_GET['id'] != '' && $_GET['tid'] == '')///////写判断  在本身显示，判断ID
      {
      $tit = M('datas')->where('did = '.$_GET['id'])->order('id desc')->select();
      $tit2 = $tit[0]['dataname'];
      $cont = htmlspecialchars_decode($tit[0]['content']);
    }
    if($_GET['tid'] != '' && $_GET['id'] == ''){
      $tit1 = M('datas')->where('id = ' .$_GET['tid'])->find();
      $cont = htmlspecialchars_decode($tit1['content']);

      $tit2 = $tit1['dataname'];
      }
     
     
      
      $content2 = getTypeStr2();
      $this->assign('content2',$content2);
      $this->assign('cont',$cont);
      $this->assign('tit2',$tit2);
      $this->assign('tit',$tit);
     
      $this->display();
        
    }


    	



   }