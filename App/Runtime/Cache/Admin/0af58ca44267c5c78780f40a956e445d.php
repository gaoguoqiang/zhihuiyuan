<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
	<head>
<!--<!DOCTYPE html>
<html>
	<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="./Public/css/index.css">

<script src="./Public/Left/js/dtree.js"></script>
<div id="header"></div>
<div id="contain" class="clear">
	<p class="contain_nav">后台管理： 管理首页</p>
	<div class="contain_side">
<script>
	var ThinkPHP={
		'ROOT':'',
		'IMG':'/Public/<?php echo MODULE_NAME/img;?>',
		'FACE':'/Public/<?php echo MODULE_NAME/face;?>',
		'MODULE':'/admin',
		'UPLOADIFY':'/Public/Admin/uploadify',
		'IMAGEURL':'<?php echo U("File/image");?>',
		'FACEURL':'<?php echo U("File/face");?>',
		'BIGFACE':'<?php echo session("user_auth")["face"]->big;?>',
		'INDEX':'<?php echo U("Index/index");?>',


	}

	
</script>
	
</head>
	<body>
	</body>
</html>
-->
<meta charset="UTF-8">
<title>智慧源后台管理</title>
<link rel="stylesheet" href="/Public/Admin/css/index.css"/>
<script src="/Public/Admin/js/jquery.js"></script>
<script src="/Public/Admin/js/index.js"></script>
<script src="/Public/Admin/js/dtree.js"></script>




<script type="text/javascript">

	var ThinkPHP={
		'ROOT':'',
		'IMG':'/Public/<?php echo MODULE_NAME/img;?>',
		'FACE':'/Public/<?php echo MODULE_NAME/face;?>',
		'MODULE':'/admin',
		'UPLOADIFY':'/Public/Admin/uploadify',
		'IMAGEURL':'<?php echo U("File/image");?>',
		'FACEURL':'<?php echo U("File/face");?>',
		'BIGFACE':'<?php echo session("user_auth")["face"]->big;?>',
		'INDEX':'<?php echo U("Index/index");?>',

	}
	</script>

</head>
<body>
<div id="header"></div>

<div id="contain" class="clear">
	<p class="contain_nav">后台管理： 管理首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span >尊敬的	<font style="color:#049"><?php echo ($session["adminuser"]); ?></font>	您好!  【<a href="/Admin/Login/loginOut">退出登录</a>】</span></p>
	

	<div class="contain_side">
	<script src="/Public/Admin/js/left.js"></script>

	</div>
	<div class="header_center">
		
	</div> 


	<div class="contain_main">
	
	<div align="center"><h1>首页管理页面</h1></div>
	<br/><br/><br/><br/>
	<ul align="center">
		<li><h3 align="center">您好：<?php echo ($session["adminuser"]); ?></h3></li>
		<br/>
		<?php if(($session["state"] == 1)): ?><li><h3>您的身份是：&nbsp;普通管理员</h3></li>
		<?php else: ?> 
		<li><h3>您的身份是：&nbsp;超级管理员</h3></li><?php endif; ?>

	
	</ul>


</body>
</html>