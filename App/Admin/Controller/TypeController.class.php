<?php
namespace Admin\Controller;
use Think\Controller;
header('Content-Type: text/html; charset=utf-8');
class TypeController extends Controller {
    public function index(){
      if($_SESSION){
        if($_SESSION['adminuser']){
          $this->assign('session',$_SESSION);
        }
         //两化融合分类使用函数，生成包含option的字符串，并传给模板
        $str=getTypen();
        $this->assign('typeStr',$str);

      //企业百科分类使用函数，生成包含option的字符串，并传给模板
        $str1=getTypen1();
        $this->assign('typeStr1',$str1);
         
        $this->display();
      }else{
        $this->error('非法访问!');
      }
    }

    
  //修改分类
  function update(){
    if($_SESSION){

      if($_SESSION['adminuser']){
              $this->assign('session',$_SESSION);
          }
      if($_GET['xid'] == 1){
        $id = $_GET['id'];
        $arr = M("36serves")->where("id=$id")->find();
        $this->assign('arr',$arr);
      }elseif($_GET['xid'] == 2){
        $id = $_GET['id'];
        $arr = M("services")->where("id = $id")->find();
        $this->assign('arr',$arr);
      }
      
      $this->display();
    }else{
      $this->error('非法访问!');
    }
  }
  //修改表单数据处理
  function usave(){
    if($_POST['36name'] !=''){
      $ob=M('36serves');
      $id=$_POST['id'];
      $re=$ob->where("id=$id")->data($_POST)->save();
      if($re){
        $this->success("修改成功",U("Admin/Type/oper/aid/1"),2);
      }else{
        $this->error("修改失败",U("Admin/Type/oper/aid/1"),3);
      }
    }elseif($_POST['sername'] !=''){
      $ob=M('services');
      $id=$_POST['id'];
      $re=$ob->where("id=$id")->data($_POST)->save();
      if($re){
        if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
        $this->success("修改成功",U("Admin/Type/oper/aid/2"),2);
      }else{
        if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
        $this->error("修改失败",U("Admin/Type/oper/aid/2"),3);
      }
    }
    
  }

  //添加两化融合分类,表单数据处理
  function save(){
    
   $path = M('36serves')->where('nid = '.$_POST['nid'])->find();
    $_POST['path'] = $path['path'];
    $ob=M('36serves');
    $re=$ob->data($_POST)->add();
    if($re){
      if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
      $this->success("添加成功",U("Type/index"),2);
    }else{
      if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
      $this->error("添加失败",U("Type/index"),3);
    }
  }


  //添加企业百科分类,表单数据处理
  function save2(){
    
   $path = M('services')->where('nid = '.$_POST['nid'])->find();
    $_POST['path'] = $path['path'];
    $ob=M('services');
    $re=$ob->data($_POST)->add();
    if($re){
      if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
      $this->success("添加成功",U("Type/index"),2);
    }else{
      if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
      $this->error("添加失败",U("Type/index"),3);
    }
  }


  //分类的列表
  function oper(){
    if($_SESSION){
      if($_SESSION['adminuser']){
              $this->assign('session',$_SESSION);
          }
        if($_GET['aid'] == 1){
          $str=getTypenTr();
          $this->assign('typeStr',$str);
        }elseif($_GET['aid'] == 2){
          $str=getTypenTr2();
          $this->assign('typeStr',$str);
        }
        $this->display();
      }else{
        $this->error('非法访问!');
      }
    }

  //删除分类
    function del(){

     /* if($_GET['id'] !=''){
        //地址栏，上线以后改为域名
        echo '<script type="text/javascript">
         var re =window.confirm("是否删除此分类?");
         if(re == false){
           location.href="http://localhost/zhihuiyuan/Admin/Type/oper/aid/1";
         }
        </script>';
      }*/

      if($_GET['xid'] == 1){
        if($_GET['id'] !=''){
          $id = $_GET['id'];
          $re = M("36serves")->where("id = $id")->delete();
          if($re){
            if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
            $this->success('删除分类成功!');
          }else{
            if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
            $this->error('删除分类失败!');
          };
        };
      }elseif($_GET['xid'] == 2){
        if($_GET['id'] !=''){
          $id = $_GET['id'];
          $re = M("services")->where("id = $id")->delete();
          if($re){
            if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
            $this->success('删除分类成功!');
          }else{
            if($_SESSION['adminuser']){
            $this->assign('user',$_SESSION['adminuser']);
        }
            $this->error('删除分类失败!');
          };
        };
      }
  }







}