<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<title>登录</title>

	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/login.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/font-awesome.css">

	<script src="/zhihuiyuanPhone/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/index.js" type="text/javascript"></script>
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

	
	<main>
		<div class="title">
			<h1>登录界面</h1>
			<span class="information"><a href="/zhihuiyuanPhone/Login/information">完善信息</a></span>
		</div>
		<div class="login">
			<form action="/zhihuiyuanPhone/Login/login" method="post">
				<div class="inputdv"><span><img src="/zhihuiyuanPhone/Public/Home/img/login_star.png" alt=""></span>
				<input class="name" type="text" placeholder="姓名/电话" name="user"></div>
				<div class="inputdv"><span><img src="/zhihuiyuanPhone/Public/Home/img/login_star.png" alt=""></span>
				<input class="password" type="password" placeholder="密码：" name="password"></div>
				<input class="submit" type="submit" value="确认登陆">
				<a href="/zhihuiyuanPhone/Login/regmobile" class="registered">注册</a>
			</form>
		</div>
	</main>



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