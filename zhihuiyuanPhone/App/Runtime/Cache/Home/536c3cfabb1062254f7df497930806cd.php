<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>注册页面</title>
    <link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/public.css">
    <link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/regm.css">
    <link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/font-awesome.css">

    <script src="/zhihuiyuanPhone/Public/Home/js/jquery.js"></script>
    <script src="/zhihuiyuanPhone/Public/Home/js/check.js"></script>
    <script src="/zhihuiyuanPhone/Public/Home/js/index.js"></script>
    <script src="/zhihuiyuanPhone/Public/Home/js/reg.js"></script>

</head>
<body>
<!-- header start -->
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

<!-- header end -->



<div id="content" class="main">
	<div class="reg_form">

        <div class="title">
            <h1>注册界面</h1>
        </div>

		<form action="/zhihuiyuanPhone/Login/zhuce" onsubmit="return checksubmit('reg')" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label id="head_P">
                        <input sytle="display:none" class="file_pic" type="file" name="img">
                        <div class="head_pic" id="head_pic">上传头像</div>
                    </label>
                    <span style="margin-left:-66px;top:4.7rem;" class="error error_file error_center_a">请上传图片格式的文件！</span>
                    <span style="margin-left:-66px;top:4.7rem;" class="error error_size_file error_center_a">图片尺寸过大！请重新上传</span>
                </li>
                 <li>
                   <input style="margin-top: 1.8125rem;" class="text" type="text" name="user" value="姓名：请输入真实姓名"> 
                   <span class="info info_user"></span>
                   <span class="error error_user" style="margin-left:-132px;top:3.65rem;">姓名不能出现数字、英文、标点符号、特殊字符！</span>
                </li>
                <li>  
                    <select name="sex" id="">
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </li>
                
                <li>
                    <input class="text" type="text" name="phone" value="联系方式：">
                    <span class="info info_phone"></span>
                    <span style="margin-left:-84px;top:3.65rem;" class="error error_phone">手机号格式错误，请重新输入！</span>
                </li>
                <li>
                    <input class="text" type="text" name="email" value="邮箱：">
                    <span style="margin-left:-84px;top:3.65rem;" class="error error_email">邮箱格式错误，请重新输入！</span>
                </li>
                <li>
                    <input class="text" type="text" name="password" value="密码：">
                    <span class="info info_password"><strong style="font-weight: normal; font-size: 12px; color: red;"></strong></span>
                    <span style="margin-left:-78px;top:3.65rem;" class="error error_password">密码格式错误，请重新输入！</span>
                </li>
                <li>
                    <input class="text" type="text" name="password_check" value="密码确认：">
                    <span class="info info_password_check"></span>
                    <span style="margin-left:-72px;top:3.65rem;" class="error error_password_check">密码不一致，请重新输入！</span>
                </li>
                <li>
                    <input class="submit" type="submit" value="确认提交">
                </li>
            </ul>
		
		</form>
	</div>
	
</div>
<script>
    $(function(){
        var parent = $('.issue');
        companyCheckVerify(parent);
        introCheckVerify(parent);
    })
</script>


<!--aside strat-->
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
<!--aside end-->

</body>
</html>