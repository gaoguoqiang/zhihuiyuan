<?php
namespace Home\Controller;

use Think\Controller;

use Think\Page;


class ReteacherController extends HomeController {
	public function index(){


		if($_SESSION['user']){
    		$this->assign('user',$_SESSION['user']);
    	}
		//显示讲师信息
		//$teacher = M('teacher')->order('createtime desc')->select();


		//讲师显示分页效果
			//$db = M('teacher');//实例化模型，参数为数据库表名称，不包含前缀
			$db = M('users');
		    if(isset($_GET['p'])){//判断地址栏是否有参数p；
		   		$page = $_GET['p'];
		    }else{
		   		$page = 1;
		    }
		    //import('ORG.Util.Page');//导入分页类;
		    $count = $db->count();//获取查询总记录数
		    $p = new Page($count,6);//实例化分页类
		    $show = $p->show();//分页显示输出
		    $this->assign('show',$show);//模板变量赋值


		    /*$result = $db->query('SELECT * FROM si_teacher n, si_users i WHERE n.id = i.tid order by createtime desc');*/



		    $result = $db->table('si_users n, si_teacher i')->where('n.tid = i.id')->field('n.id as id, n.user as user, n.sex as sex,n.email as email,n.phone as phone,i.field as field,i.technology as technology,i.introduction as introduction,i.company as company,i.face as face,i.prov as prov,i.city as city,i.dist as dist,i.teacher as teacher')->order('createtime desc')->page($page,6)->select();
		    $count = $db->count();
		    for ($i=0; $i <= $count; $i++) {

		    	$result[$i]['teacher'] = json_decode($result[$i]['teacher']);
		    	if(is_object($result[$i]['teacher'])){
		    		$result[$i]['teacher'] =(array)$result[$i]['teacher'];
		    	}
			if(count($result[$i]) == 1){
				unset($result[$i]);
			}
		    }

		$this->assign('result',$result);
		$this->assign('teacher',$teacher);
		$this->display();
	}

	public function details(){

		$teachOne = M('teacher')->where('id = '.$_GET['id'])->find();

		$teachOne1 = M('users')->where('tid = '.$teachOne['id'])->find();


		 $array = json_decode($teachOne['teacher']);

        //将stdClass Object数据转为数组
          if(is_object($array)){
            $arr = (array)$array;
          }

        $this->assign('arr',$arr);

		$this->assign('teachOne',$teachOne);
		$this->assign('teachOne1',$teachOne1);
		$this->display();
	}
	public function search(){
		$db = M('users');
		 $result = $db->table('si_users n, si_teacher i')->where('n.tid = i.id')->field('n.id as id, n.user as user, n.sex as sex,n.email as email,n.phone as phone,i.field as field,i.technology as technology,i.introduction as introduction,i.company as company,i.face as face,i.prov as prov,i.city as city,i.dist as dist,i.teacher as teacher')->order('createtime desc')->select();
		 echo json_encode($result);
	}
}