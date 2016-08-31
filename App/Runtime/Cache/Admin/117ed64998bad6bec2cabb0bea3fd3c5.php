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
<script src="/Public/Admin/js/show.js"></script>
	<div class="contain_main">
		<form action="/Admin/News/update" method="post">
			<table border="1" align="center" id="abc">
			<tr>
				<td>父分类：</td>
				<td><select name="nid" id="xnews" style="background-color:#85DBCE;border:0;width:200px;">
				<option value="0" >顶级分类</option>	
				<?php echo ($typeStr); ?>
				</select>
				</td>

				<td>名称：</td>
				<td><select name="id" id="x" style="background-color:#85DBCE;border:0;width:200px;">
				<option value="0" >文章标题</option>	
				</select>
			</tr>
			<tr>
				<td>文章标题：</td>
				<td  id="td"><input type="text" name="infoname" value="文章标题" style="background-color:#85DBCE;border:0;width:200px;"></td>
			</tr>
			
		</table>
			<!-- 加载编辑器的容器 -->
		    <script id="container" name="content" type="text/plain">
		    </script>
		    <!-- 配置文件 -->
		    <script type="text/javascript" src="/Public/Admin/js/ueditor-1.4.3.3/ueditor.config.js"></script>
		    <!-- 编辑器源码文件 -->
		    <script type="text/javascript" src="/Public/Admin/js/ueditor-1.4.3.3/ueditor.all.js"></script>

			<input type="submit" value="确认提交">
			
		</form>
		
		
	</div>
</div>
<script charset="utf-8" src="/Public/Admin/js/text/kindeditor.js"></script>
<script charset="utf-8" src="/Public/Admin/js/text/lang/zh_CN.js"></script>
		    <!-- 实例化编辑器 -->
		    <script type="text/javascript">
		        var ue = UE.getEditor('container',{
					initialFrameHeight:500,
					autoHeightEnabled:false,
					maximumWords:20000
				});
		    </script>

</body>
</html>