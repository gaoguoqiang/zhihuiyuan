<?php 
namespace Admin\Controller;
	
use Think\Controller;

class NewsController extends Controller{
		
	public function index(){
    if($_SESSION){
      if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
      //显示列表信息
      if($_GET['aid'] == 1){
        $str=getTypen();
        $this->assign('typeStr',$str);
      }
    

	   $this->display();
    }else{
      $this->error('非法访问!');
    }
	}



  public function index2(){
    if($_SESSION){
      if($_SESSION['adminuser']){
              $this->assign('session',$_SESSION);
          }
      //显示列表信息
      if($_GET['aid'] == 2){
        $str=getTypen1();
        $this->assign('typeStr',$str);
      }
      

      $this->display(); 
    }else{
      $this->error('非法访问!');
    }
  }

	

  //两化融合显示标题及内容新闻
  public function show(){

    if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    $post = $_POST['sid'];
    $postid = $_POST['id'];
    if($post){
      $result = M('36info')->where('sid = '.$_POST['sid'])->order('createtime desc')->select();
      if($result){
        foreach ($result as $k=>$v) {
          echo "<option value='{$v['id']}' class='xnews' >{$v['infoname']}</option>";
        }
      }
    }elseif($postid){
      $result = M('36info')->where('id = '.$_POST['id'])->find();
        echo htmlspecialchars_decode($result['content']);
    }
  }



  //企业百科显示标题及内容新闻
  public function show1(){

    if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    $post = $_POST['sid'];
    $postid = $_POST['id'];
    if($post){
      $result = M('info')->where('snid = '.$_POST['sid'])->order('createtime desc')->select();
      if($result){
        foreach ($result as $k=>$v) {
          echo "<option value='{$v['id']}' class='xnews' >{$v['infoname']}</option>";
        }
      }
    }elseif($postid){
      $result = M('info')->where('id = '.$_POST['id'])->find();
        echo  htmlspecialchars_decode($result['content']);
    }
  }










  //修改两化融合新闻 
  public function update(){
    if($_POST['id'] != 0 && $_POST['nid'] != 0){
      $data['id'] = $_POST['id'];
      $data['infoname'] = $_POST['infoname'];
      $data['content'] = $_POST['content'];
      $data['createtime'] = date('Y-m-d H:i:s');
      $result = M('36info')->data($data)->save();
      if($result){
        $this->success('文章修改成功!');
      }else{
        $this->error('文章修改失败!');
      }
    }else{
      $this->error("请选择正确的父类或文章标题!");
    }
  }



   //修改企业百科新闻 
  public function update1(){
    if($_POST['id'] != 0 && $_POST['nid'] != 0){
      $data['id'] = $_POST['id'];
      $data['infoname'] = $_POST['infoname'];
      $data['content'] = $_POST['content'];
      $data['createtime'] = date('Y-m-d H:i:s');
      $result = M('info')->data($data)->save();
      if($result){
        $this->success('文章修改成功!');
      }else{
        $this->error('文章修改失败!');
      }
    }else{
      $this->error("请选择正确的父类或文章标题!");
    }
  }





//添加新闻两化融合显示
  public function addShow(){
    if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    //显示列表信息
    if($_GET['aid'] == 1){
      $str=getTypen();
      $this->assign('typeStr',$str);
    }
    

  $this->display('News/addNews'); 
  }

//添加新闻企业百科显示
  public function addShow1(){
    if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    //显示列表信息
    if($_GET['aid'] == 2){
      $str=getTypen1();
      $this->assign('typeStr',$str);
    }
    
  $this->display('News/addNews2'); 
  }


  //添加两化融合新闻
  public function addNews(){
    //添加两化融合新闻

    $re = M('36serves')->where('id = '.$_POST['nid'])->find();
      $data['infoname'] = $_POST['name'];
      $data['content'] = $_POST['content'];
      $data['sid'] = $_POST['nid'];
      $data['createtime'] = date('Y-m-d H:i:s');
      $data['snid'] = $re['nid'];

      $result = M('36info')->data($data)->add();

      if($result){
        if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
        $this->success('文章添加成功!',U("Admin/News/addShow/aid/1"),2);
      }else{
        if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
        $this->error('文章添加失败!',U("Admin/News/addShow/aid/1"),2);
      }
  }


  public function addNews1(){

    //添加企业百科新闻
    $re = M('services')->where('id = '.$_POST['nid'])->find();

      $data['infoname'] = $_POST['name'];
      $data['content'] = $_POST['content'];
      $data['snid'] = $_POST['nid'];
      $data['createtime'] = date('Y-m-d H:i:s');
      $data['sid'] = $re['nid'];

      $result = M('info')->data($data)->add();

      if($result){
        if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
        $this->success('文章添加成功!',U("Admin/News/addShow1/aid/2"),2);
      }else{
        if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
        $this->error('文章添加失败!',U("Admin/News/addShow1/aid/2"),2);
      }
  }








    
















		
}
	

