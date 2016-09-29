<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<title>完善信息</title>

	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/information.css" >
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/font-awesome.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/regm.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/cityPicker.css"/>

	<script src="/zhihuiyuanPhone/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/index.js" type="text/javascript"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/check.js"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/reg.js"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/cityPicker.js"></script>
</head>
<body>
<header>
        <div class="button">
            <img src="/zhihuiyuanPhone/Public/Home/img/button.png" alt="">
        </div>
        <nav class="menu">
            <ul class="menu_1">
            <?php echo ($content2); ?>
            </ul>
        </nav>
        <a href="/zhihuiyuanPhone/index.html">
            <div class="top">
            <div class="logo">
                <img src="/zhihuiyuanPhone/Public/Home/img/logo.png" alt="">
            </div>
            <div class="word">
                <img src="/zhihuiyuanPhone/Public/Home/img/word.png" alt="">
            </div>
            </div>
        </a>
    </header>



<!--header end-->

<div id="content" class="main">
	<div class="reg_form">

        <div class="title">
            <h1>完善资料</h1>
        </div>

		<form action="/zhihuiyuanPhone/Login/information" method="post">
            <ul>
                <li>
                    <label id="head_P">
                        <input sytle="display:none" class="file_pic" type="file" name="img">
                        <div class="head_pic" id="head_pic">上传头像</div>
                    </label> 
                    <span style="margin-left:-66px;top:4.7rem;" class="error error_file error_center_a">请上传图片格式的文件！</span>
                </li>
                <li>
                   <input disabled="" style="margin-top: .8125rem;" class="text" type="text" name="user" value="姓名：请输入真实姓名"> 
                   <span class="info info_user"></span>
                   <span class="error error_user" style="margin-left:-132px;top:3.65rem;">姓名不能出现数字、英文、标点符号、特殊字符！</span>
                </li>
                <li>
                    <input disabled="" class="text" type="text" name="sex" value="男">
                </li>
                
                <li>
                    <input disabled="" class="text" type="text" name="email" value="邮箱：">
                    <span style="margin-left:-78px;top:3.65rem;" class="error error_email">邮箱格式错误，请重新输入！</span>
                </li>
                
                <li>
                    <input disabled="" class="text" type="text" name="phone" value="联系方式：">
                    <span style="margin-left:-84px;top:3.65rem;" class="error error_phone">手机号格式错误，请重新输入！</span>
                </li>
                
                <li>
                	<div class="citydv">
                    	<input class="city" type="text" name="prov" value="省/市：">
                    	<input style="float:right" class="city_t" type="text" name="city" value="区/县：">
                    </div>
                </li>

                <li>
                    <input class="text" type="text" name="dist" value="社区街道：">
                </li>

                <li>
                    <input class="text" type="text" name="field" value="擅长行业：">
                </li>

                <li>
                    <label>
                        <div class="text form_video">上传视频：</div>
                        <input class="file_video" type="file" name="video">
                    </label>
                    <span style="margin-left:-67px;top:3.65rem;" class="error error_file_video">请上传MP4格式的文件！</span>
                </li>

                <li>
                    <textarea class="intro" name="intro" id=""></textarea>
                    <span class="value">个人简介</span>
                    <span class="ps" style="display: none; margin-left:-56px;top:11.8rem; position:absolute; left:50%;">还可以输入<em class="num">300</em>字</span>
                    <span class="ps" style="display: none; margin-left:-56px;top:11.8rem; position:absolute; left:50%; color:red">已超过<em class="num">20</em>字,请删除！</span>
                </li>

                <li>
                    <div class="checkbox_info">（可多选）</div>
                    <div class="checkbox_next clearfix">
                    	<div class="checkbox_block">
                        <input type="checkbox" value="讲师">
                        <span>讲师</span>
                        </div>
                        <div class="checkbox_block">
                        <input type="checkbox" value="咨询师">
                        <span>咨询师</span>
                         </div>
                        <div class="checkbox_block">
                        <input type="checkbox" value="资源供应">
                        <span>资源供应</span>
                         </div>
                        <div class="checkbox_block">
                        <input type="checkbox" value="资源需求">
                        <span>资源需求</span>
                         </div>
                        <div class="checkbox_block">
                        <input type="checkbox" value="讲师">
                        <span>培训需求</span>
                         </div>
                        <div class="checkbox_block">
                        <input type="checkbox" value="咨询师">
                        <span>咨询需求</span>
                         </div>
                        
                        
                    </div>
                </li>






                <li>
                    <input class="submit" type="submit" value="确认提交">
                </li>
            </ul>
		
		</form>
	</div>
	
</div>


<!--city-->
<script type="text/javascript">
	$(".city").CityPicker();
</script>


<!--aside start-->





	<aside class="bottom_bar">
        <ul><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2994985924&site=qq&menu=yes">

            <li id="imgid1">
                <i class="fa fa-qq fa-2x"></i>
                <span>联系客服</span>
            </li>
            </a>
            <a href="/zhihuiyuanPhone/Map/index">
            <li id="imgid2">
                <i class="fa fa-map-marker fa-2x"></i>
                <span>地图定位</span>
            </li>
            </a>
         <?php if(empty($session)): ?><a href="/zhihuiyuanPhone/Login/index">
            <li id="imgid3">
                <i class="fa fa-th-large fa-2x"></i>
                <span>登陆注册</span>
            </li>
        </a>
        <?php else: ?>
        <a href="/zhihuiyuanPhone/Glod/personal/id/<?php echo ($id); ?>">
            <li id="imgid3">
                <i class="fa fa-male fa-2x"></i>
                <span>个人中心</span>
            </li>
        </a><?php endif; ?>
        </ul>
    </aside>
</body>
</html>