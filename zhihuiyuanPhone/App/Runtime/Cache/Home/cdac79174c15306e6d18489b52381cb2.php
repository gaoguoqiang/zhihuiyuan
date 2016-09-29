<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
	

	<title>智慧源-首页</title>
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/public.css">
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/screen.css" >
	<link rel="stylesheet" href="/zhihuiyuanPhone/Public/Home/css/swiper.min.css">
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
			<a href="index.html">
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
	<section class="box">
		<article>
			<img src="/zhihuiyuanPhone/Public/Home/img/pic-01.jpg" alt="">
		</article>
	</section>
	
	<section class="box-one">
		<div class="box-header">
			<div class="box-header-lf"></div>
			<h1>两化融合产品升级</h1>
		</div>
		<article class="box-one-b">
			
			<ul>
				<li>
					<div class="box-one-pic"><a href="http://www.zady.cn/aqpt/login.jsp"><img src="/zhihuiyuanPhone/Public/Home/img/两化融合图片_01.png" alt=""></a>
					</div>
					<div class="box-one-word">
						<p><a href="/zhihuiyuanPhone/Index/project/id/1">CSR企业责任平台</a></p>
					</div>
				</li>
				<?php if(is_array($content)): foreach($content as $key=>$v): ?><li><a href="/zhihuiyuanPhone/Index/project/id/<?php echo ($v["id"]); ?>">
					<div class="box-one-pic"><img src="/zhihuiyuanPhone/Public/uploads/<?php echo ($v["pic"]); ?>.png" alt="">
					</div>
					<div class="box-one-word">
					<p><?php echo ($v["dataname"]); ?></p>
					</div></a>
				</li><?php endforeach; endif; ?>
			</ul>
				
		</article>
	</section>
	<div class="clearfix"></div>

	<section class="box-two">
		<div class="box-header">
			<div class="box-header-lf"></div>
			<h1>总裁教练集群统帅</h1>
		</div>
		<article class="box-one-b">
			<ul>
				<?php if(is_array($content1)): foreach($content1 as $key=>$v): ?><li><a href="/zhihuiyuanPhone/Index/project/id/<?php echo ($v["id"]); ?>">
					<div class="box-one-pic"><img src="/zhihuiyuanPhone/Public/uploads/<?php echo ($v["pic"]); ?>.png" alt="">
					</div>
					<div class="box-one-word">
					<p><?php echo ($v["dataname"]); ?></p>
					</div></a>
				</li><?php endforeach; endif; ?>
			</ul>
		</article>
		<div class="clearfix"></div>
		<div class="box-block"></div>
	</section>

	</main>


	

	<aside class="bottom_bar">
		<div id="qq_select" class="qq_select">
			<ul>
				<li>
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2990965492&site=qq&menu=yes">
						<i class="fa fa-qq fa-2x"><span>QQ客服</span></i>
					</a>
				</li>
				<li>
					<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2994985924&site=qq&menu=yes">
						<i class="fa fa-qq fa-2x"><span>QQ客服</span></i>
					</a>
				</li>
			</ul>
		</div>
		<ul>

			<li id="imgid1">
				<i class="fa fa-qq fa-2x"></i>
				<span>联系客服</span>
			</li>

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