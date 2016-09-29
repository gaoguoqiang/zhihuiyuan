<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<title>金牌项目</title>

	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/word.css" >
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/font-awesome.css">

	<script src="/zhihuiyuanPhone/Public/Home/js/jquery.js" type="text/javascript"></script>
	<script src="/zhihuiyuanPhone/Public/Home/js/check.js"></script>
    <script src="/zhihuiyuanPhone/Public/Home/js/index.js"></script>
   
    <script src="/zhihuiyuanPhone/Public/Home/js/themenav.js"></script>
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

	<main id="content">
		<div class="title">
            <h1><?php echo ($tit2); ?></h1>
        </div>
        <div class="main_word">
        	<p><?php echo ($cont); ?></p>
        </div>

	<!--侧边导航栏-->
	<?php if(empty($tit)): ?><span></span>
	<?php else: ?>
		<aside class="class_theme">
			<div class="class_theme_button">
				<p class="theme_button">查看更多</p>
				<i class="fa fa-hand-o-right theme_hand fa-2x"></i>
			</div>
			<div class="class_nav">
				
				<ul>
				<?php if(is_array($tit)): foreach($tit as $key=>$v): if(($v[id] == 10)): ?><li><a href="http://rckf.qyfd.cn/tefm/index.aspx"><?php echo ($v["dataname"]); ?></a></li>
				<?php else: ?>
					<li><a href="/zhihuiyuanPhone/Index/project/tid/<?php echo ($v[id]); ?>"><?php echo ($v["dataname"]); ?></a></li><?php endif; endforeach; endif; ?>	
				</ul>
			

			</div>
		</aside><?php endif; ?>

	
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