<?php
namespace Home\Controller;
use Think\Controller;


class HomeController extends Controller {
	//检测用户是否登录
    protected function _initialize(){
//  	if($_SESSION['user']){
//  		$user = $_SESSION['user'];
//  		$this->assign('user',$user);
//  	}

    	/*//处理自动登录,当cookie存在,且session不存在的情况下,生成session
    	if(!is_null(cookie('auto')) && !session('?user_auth')){
    		$value=explode('|',encryption(cookie('auto'),1));
    		list($username,$ip)=$value;
    		if($ip==get_client_ip()){


	    		$username=encryption(cookie('auto'),1);
	    		$User=D('User');
	    		$map['username'] = $username;
	    		$userObj=$User->field('id,username,face')->where($map)->find();

	    		//自动登陆后写入信息
						$update=array(
							'id'=>$userObj['id'],
							'last_login'=>NOW_TIME,//保存当前登录时间
							//'last_ip'=>get_client_ip(1),//保存最后登录IP
							);
						$User->save($update);
	    		
	    		//将记录写入cookie或session中
						$auth=array(
							'id'=>$userObj['id'],
							'username'=>$userObj['username'],
							'face'=>json_decode($userObj['face']),
							'last_login'=>NOW_TIME,
							);
						//写入session,ThinkPHP自带方法
						session('user_auth',$auth);
			}
    	};

    	//检测session是否存在 
        if(session('?user_auth')){
        	return 1;
        }else{
        	$this->redirect('Login/index');
        };*/


        //头像显示
       /* public function face(){
        	$faceNmae = M()->where()->find();
        }*/
    }
}