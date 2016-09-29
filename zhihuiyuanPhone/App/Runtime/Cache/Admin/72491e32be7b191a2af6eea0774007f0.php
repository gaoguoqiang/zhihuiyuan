<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
	<head>
<!---->
<meta charset="UTF-8">
<title>智慧源后台管理</title>
<link rel="stylesheet" href="/zhihuiyuan/Public/Admin/css/index.css"/>
<script src="/zhihuiyuan/Public/Admin/js/jquery.js"></script>
<script src="/zhihuiyuan/Public/Admin/js/index.js"></script>
<script src="/zhihuiyuan/Public/Admin/js/dtree.js"></script>
<script src="/zhihuiyuan/Public/Admin/js/show.js"></script>
<script src="/zhihuiyuan/Public/Admin/js/show1.js"></script>


<script type="text/javascript">

	var ThinkPHP={
		'ROOT':'/zhihuiyuan',
		'IMG':'/zhihuiyuan/Public/<?php echo MODULE_NAME/img;?>',
		'FACE':'/zhihuiyuan/Public/<?php echo MODULE_NAME/face;?>',
		'MODULE':'/zhihuiyuan/Admin',
		'UPLOADIFY':'/zhihuiyuan/Public/Admin/uploadify',
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
	<p class="contain_nav">后台管理： 管理首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span >尊敬的	<font style="color:#049"><?php echo ($session["adminuser"]); ?></font>	您好!  【<a href="/zhihuiyuan/Admin/Login/loginOut">退出登录</a>】</span></p>
	

	<div class="contain_side">
	<script src="/zhihuiyuan/Public/Admin/js/left.js"></script>

	</div>
	<div class="header_center">
		
	</div> 
	<div class="contain_main">
		<h2 class="classify_title">分类管理</h2>
		<div align="center" style="font-size:25px;">当前操作：添加分类</div><br/>
	<div align="center" style="font-size">添加企业百科分类</div>
	<table border="1" align="center">
	<tr>
		<th>名称</th>
		<th>操作</th>
	</tr>
	 <?php echo ($typeStr); ?> 
</table>
		
		
	</div>
</div>

</body>
</html>