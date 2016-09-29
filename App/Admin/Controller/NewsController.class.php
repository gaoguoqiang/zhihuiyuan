<?php 
namespace Admin\Controller;
	
use Think\Controller;

use Think\Upload;
header('content-type:text/html;charset=utf-8');

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

//集群动态显示页面
  public function index3(){
    if($_SESSION){
      if($_SESSION['adminuser']){
              $this->assign('session',$_SESSION);
          }
      //显示列表信息
      if($_GET['aid'] == 3){
        $list = M('news')->select();
        $this->assign('list',$list);
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




  //集群动态显示标题及内容新闻
  public function show2(){

    if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        }
    if($_POST['sid']){
      $result = M('news')->where('id = '.$_POST['sid'])->find();
      echo "<tr class=\"xnews\">
        <td>修改标题：</td>
        <td><input type=\"text\" name=\"title\" value=\"{$result['title']}\" style=\"background-color:#85DBCE;border:0;width:200px;width:100%;\"/></td>
      </tr>
      <tr class=\"xnews\">
        <td>引导语：</td>
        <td><input type=\"text\" name=\"guide\" value=\"{$result['guide']}\" style=\"background-color:#85DBCE;border:0;width:200px;width:100%;\"/></td>
      </tr>
      <tr class=\"xnews\">
        <td>配图：</td>
        <td id=\"content\">
          <div class=\"head_pic\" id=\"head_pic\">
            <img src=\"/Public/uploads/compress/{$result['pic']}\" id=\"img\" >
          </div>
          <input type=\"file\" class=\"file_pic\" name=\"userfile\" id=\"file\" />       
                </td>
      </tr>";

      
    }
  }
  public function sShow(){
    if($_POST['id']){
      $rel = M('news')->where('id = '.$_POST['id'])->find();
       echo  htmlspecialchars_decode($rel['content']);
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




  //修改企业百科新闻 
  public function update2(){
    if($_POST['nid'] != 0){
        if(!empty($_FILES['userfile']['name'])){
        //头像上传
        $upload = new Upload(); //实例化上传类
        $upload->maxSize = 1000000; //设置上传大小，字节
        $upload->exts =  array('jpg','gif','png','jpeg'); //限定后缀
        $upload->savePath = '../Public/uploads/compress/'; //在根目录Uploads下
        $upload->autoSub = false;//不设置子目录
        $info = $upload->upload(); //执行上传方法
        if (!$info) {
            $this->error($upload->getError()); //错误了
            exit();
        }
        //添加文章初始化数据
        $data['id'] = $_POST['nid'];
        $data['title'] = $_POST['title'];
        $data['pic'] = $info['userfile']['savename'];
        $data['guide'] = $_POST['guide'];
        $data['content'] = $_POST['content'];
        $data['date'] = date('Y-m-d H:i:s');
        //添加文章
        $result = M('news')->save($data);
        if($result){
          $this->success('文章修改成功!');
        }else{
          $this->error('文章修改失败!');
        }}
    }else{
      $this->error("请选择正确文章标题!");
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



  //添加新闻集群动态显示
  public function addShow2(){
    if($_SESSION['adminuser']){
            $this->assign('session',$_SESSION);
        } 
  $this->display('News/addNews3'); 
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



  public function addNews2(){

    //添加集群动态内容
    if(empty($_POST['title'])){
      echo "<script type=\"text/javascript\">
                alert('请填写文章标题!');
              </script>";
      exit();
    }elseif(empty($_POST['guide'])){
      echo "<script type=\"text/javascript\">
                alert('请填写文章引导语!');
              </script>";
      exit();
    }else{
      if(!empty($_FILES['userfile']['name'])){
        //头像上传
        $upload = new Upload(); //实例化上传类
        $upload->maxSize = 1000000; //设置上传大小，字节
        $upload->exts =  array('jpg','gif','png','jpeg'); //限定后缀
        $upload->savePath = '../Public/uploads/compress/'; //在根目录Uploads下
        $upload->autoSub = false;//不设置子目录
        $info = $upload->upload(); //执行上传方法
        if (!$info) {
            $this->error($upload->getError()); //错误了
            exit();
        }
        //添加文章初始化数据
        $data['title'] = $_POST['title'];
        $data['pic'] = $info['userfile']['savename'];
        $data['guide'] = $_POST['guide'];
        $data['content'] = $_POST['content'];
        $data['date'] = date('Y-m-d H:i:s');
        //添加文章
        $result = M('news')->add($data);
        if($result){
          $this->success('文章发表成功!');
        }else{
          $this->error('文章发表失败!');
        }


      }else{
        echo "<script type=\"text/javascript\">
                alert('需上传文章配图!');
              </script>";
      exit();
      }
    } 






  }








    
















		
}
	

