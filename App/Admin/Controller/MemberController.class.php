<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function Member(){
    	if($_SESSION){
	    	  if($_SESSION['adminuser']){
	            $this->assign('session',$_SESSION);
	        }
	       
	        $this->display();
        }else{
	        $this->error('非法访问!');
	    }
    }
}