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
	<p class="contain_nav">后台管理： 管理首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span >尊敬的	<font style="color:#049"><?php echo ($user); ?></font>	您好!  【<a href="/zhihuiyuan/Admin/Login/loginOut">退出登录</a>】</span></p>
	

	<div class="contain_side">
	<script src="/zhihuiyuan/Public/Admin/js/left.js"></script>

	</div>
	<div class="header_center">
		
	</div> 
	<div class="contain_main">
		<form action="/zhihuiyuan/Admin/" method="post">
			<table border="1" align="center" id="abc">
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="uname" value="<?php echo ($result["uname"]); ?>" /></td>
			</tr>
			<tr>

				<td>旧密码：</td>
				<td><input type="oldpassword"/></td>
			</tr>
			<tr>

				<td>新密码：</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td>确认密码：</td>
				<td><input type="ypassword" name="ypassword" /></td>
			</tr>
			<tr>
				<td>权限：</td>
				<?php if($result["state"] == 1 ): ?><td>普通管理员</td>
				<?php else: ?>
				<td>超级管理员</td><?php endif; ?>

			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" value="确认提交" align="center"></td>
			</tr>
		</table>	
		</form>
		
		
	</div>
</div>
<script charset="utf-8" src="/zhihuiyuan/Public/Admin/js/text/kindeditor.js"></script>
<script charset="utf-8" src="/zhihuiyuan/Public/Admin/js/text/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                	window.editor = K.create('#editor_id');
        });

</script>
<script src="/zhihuiyuan/Public/Admin/js/show.js"></script>
</body>
</html>