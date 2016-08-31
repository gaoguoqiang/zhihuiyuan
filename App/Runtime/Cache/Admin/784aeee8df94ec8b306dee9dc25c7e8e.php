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
		'MODULE':'/Admin',
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
<script src="/Public/Admin/js/show.js"></script>
<script src="/Public/Admin/js/show1.js"></script>


<script type="text/javascript">

	var ThinkPHP={
		'ROOT':'',
		'IMG':'/Public/<?php echo MODULE_NAME/img;?>',
		'FACE':'/Public/<?php echo MODULE_NAME/face;?>',
		'MODULE':'/Admin',
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
		<h2 class="classify_title">分类管理</h2>
		<div align="center" style="font-size:25px;">当前操作：添加分类</div><br/>
		<div align="center" style="font-size">添加两化融合分类</div>
	<form action="/Admin/Type/save" method="post">
		<table border="1" align="center">
			<tr>
				<td>名称：</td>
				<td><input type="text" name="36name" style="background-color:#85DBCE;border:0;width:100%;"/></td>
			</tr>
			
			<tr>
				<td>父分类：</td>
				<td><select name="nid" style="background-color:#85DBCE;border:0;width:100%;">
				<option value="0" >顶级分类</option>	
				<?php echo ($typeStr); ?>
				</select>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" value="提交"/></td>
			</tr>
			
		</table>
	</form>




	<br/><br/>
	<div align="center" style="font-size">添加企业百科分类</div>
	<form action="/Admin/Type/save2" method="post">
		<table border="1" align="center">
			<tr>
				<td>名称：</td>
				<td><input type="text" name="sername" style="background-color:#85DBCE;border:0;width:100%;"/></td>
			</tr>
			
			<tr>
				<td>父分类：</td>
				<td><select name="nid" style="background-color:#85DBCE;border:0;width:100%;">
				<option value="0">顶级分类</option>	
				<?php echo ($typeStr1); ?>
				</select>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" value="提交"/></td>
			</tr>
			
		</table>
	</form>
		
		
	</div>
</div>

</body>
</html>