<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="/zhihuiyuan/Public/Admin/css/index.css">
<script src="/zhihuiyuan/Public/Admin/js/jquery.js"></script>
<script src="/zhihuiyuan/Public/Admin/js/index.js"></script>

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
	<script src="/zhihuiyuan/Public/Admin/js/dtree.js"></script>


<script></script>
</head>
<body>
<div id="header"></div>
<div id="contain" class="clear">
	<p class="contain_nav">后台管理： 管理首页</p>
	<div class="contain_side">
	<script  src='/zhihuiyuan/Public/Admin/js/left.js'></script>
		
	</div>
	<div class="contain_main">
		<h2 class="classify_title">分类管理</h2>
		<div align="center" style="font-size:25px;">当前操作：添加分类</div><br/>
		<div align="center" style="font-size">添加两化融合分类</div>
	<form action="/zhihuiyuan/Admin/Type/usave" method="post">
		<table border="1" align="center">
			<tr>
				<td>名称：</td>
				<td>
				<?php if(empty($arr["36name"])): ?><input type="text" name="sername" value="<?php echo ($arr["sername"]); ?>" style="background-color:#85DBCE;border:0;width:100%;"/>
				<input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>">
					<?php else: ?>
				<input type="text" name="36name" value="<?php echo ($arr["36name"]); ?>" style="background-color:#85DBCE;border:0;width:100%;"/>
				<input type="hidden" name="id" value="<?php echo ($arr["id"]); ?>"><?php endif; ?>
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