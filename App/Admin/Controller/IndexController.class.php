<?php
namespace Admin\Controller;

use Think\Controller;

  class IndexController extends Controller {
    public function index(){
      if($_SESSION['adminuser']){
          $this->assign('session',$_SESSION);
          $this->display();
      }else{
        $this->display('User/login');
      }
    
    }


    //分类页默认显示 
    public function type(){
      if($_SESSION){
        if($_SESSION['adminuser']){
              $this->assign('session',$_SESSION);
          }
        //默认分类列表显示
        //二级分类
        $resuleTow = M('36serves')->where('nid = 0')->select();
        //三级分类
        $resuleSthree = M('36serves')->where('nid = 1')->select();
        //四级分类
        $resuleFour = M('36serves')->where('nid = 9')->select();


        $this->assign('resuleFour',$resuleFour);
        $this->assign('resuleSthree',$resuleSthree);
        $this->assign('resuleTow',$resuleTow);


        $this->display('News/index');
      }else{
        $this->error('非法访问!');
      }

    }


    public function addtype(){
      if($_SESSION){
        //二级分类列表显示

        if($_POST['content1'] == 1){
          $resuleTow = M('36serves')->where('nid = 0')->select();
          foreach ($resuleTow as $k => $v) {
          echo '<option class="tow" value="'.$v['id'].'">'.$v['36name'].'</option>';
            
          };
          //echo json_encode($resuleTow);
        }elseif($_POST['content2']){
          echo $_POST['content2'];
        }


        if($_POST['content1'] == 2){
           $resuleTow = M('services')->where('nid = 0')->select();
           foreach ($resuleTow as $k => $v) {
            echo '<option class="tow" value="'.$v['id'].'">'.$v['sername'].'</option>' ;
          }
        }
      }else{
        $this->error('非法访问!');
      }
    }
    







}