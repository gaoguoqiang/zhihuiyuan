<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" name="viewport" />


	<title>讲师详情</title>


	<link rel="stylesheet" href="/zhihuiyuan/zhihuiyuanPhone/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuan/zhihuiyuanPhone/Public/Home/css/teachermore.css" >
	<link rel="stylesheet" href="/zhihuiyuan/zhihuiyuanPhone/Public/Home/css/font-awesome.css">

	<script src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/js/index.js" type="text/javascript"></script>
</head>
<body>
	<!--header start-->
	<header>
		<div class="button">
			<img src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/img/button.png" alt="">
		</div>
		<nav class="menu">
			<ul class="menu_1">
			<?php echo ($content2); ?>
			</ul>
		</nav>
		    <a href="/zhihuiyuan/zhihuiyuanPhone/index.html">
		    <div class="top">
			<div class="logo">
				<img src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/img/logo.png" alt="">
			</div>
			<div class="word">
				<img src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/img/word.png" alt="">
			</div>
		    </div>
	    	</a>

	</header>
	<!--header end-->
	<!--main start-->
	<main>
		<div class="toptitle">
			<h1>个人信息</h1>
		</div>
		<div class="main_head">
			<img src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/img/移动端讲师推荐.png" alt="">
			<img src="/zhihuiyuan/zhihuiyuanPhone/Public/Home/img/vip.gif" alt="">
			<span>积分：<em>0</em></span>
			<a href="">充值</a>
		</div>
		<div class="main_word">
			<ul>
				<li>
					<p>姓名：<span>xxxxx</span></p>
				</li>
				<li>
					<p>性别：<span>xx</span></p>
				</li>
				<li>
					<p>地址：<span>xxxxxxxxxx</span></p>
				</li>
				<li>
					<p>擅长领域：<span>xxxxxxxxxxx</span></p>
				</li>
				<li>
			 		<p>技术特长：<span>xxxxx</span></p>
				</li>
				<li>
					<p>单位名称：<span>xxxxx</span></p>
				</li>
				<li>
					<p>职位：<span>xxxxx</span></p>
				</li>
				<li>
					<p>个人简介：</p><span>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
				</li>
			</ul>
		</div>

		<!--video-->
		<figure>
			<video class="video" controls="controls" src="video/video.mp4"></video>
		</figure>

	
	</main>
	<!--main end-->
	<!--aside start-->
	<aside class="bottom_bar">
		<ul><a href="">
			<li id="imgid1">
				<i class="fa fa-qq fa-2x"></i>
				<span>联系客服</span>
			</li>
			</a>
			<a href="">
			<li id="imgid2">
				<i class="fa fa-map-marker fa-2x"></i>
				<span>地图定位</span>
			</li>
			</a>
			<?php if(empty($session)): ?><a href="/zhihuiyuan/zhihuiyuanPhone/Login/index">
			<li id="imgid3">
				<i class="fa fa-th-large fa-2x"></i>
				<span>登陆注册</span>
			</li>
		</a>	
		<?php else: ?>
		<a href="javascript:;">
			<li id="imgid3">
				<i class="fa fa-male fa-2x"></i>
				<span>注销</span>
			</li>
		</a><?php endif; ?>

		</ul>
	</aside>
	<!--aside end-->
</body>
</html>