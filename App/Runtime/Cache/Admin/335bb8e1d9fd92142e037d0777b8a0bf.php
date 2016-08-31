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

	<div class="register">
			
			<form action="/zhihuiyuan/Admin/User/register" method="post">
				<table border="1px solid #ccc">
				<tr><td align="center">管理员注册</td></tr>
					<tr>
					<td>用&nbsp;&nbsp;户&nbsp;&nbsp;名：<input type="text" name="username" style="background-color:#85DBCE;"></td>
					</tr>
					<tr>
					<td>密	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" style="background-color:#85DBCE;"></td>
					</tr>
					<tr>
						<td>确认密码：
						<input type="password" name="ypassword" style="background-color:#85DBCE;"/>
						</td>
					</tr>
					<tr>
					<td align="center"><input type="submit" value="注册"></td>
					</tr>
				</table>
			</form>
			<br/>
		</div>
	<table class="ua" border="1">
		<tr>
			<td>账户</td>
			<td>管理员等级</td>
			<td>登记管理</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($us)): foreach($us as $key=>$v): ?><tr>
			<td><?php echo ($v["uname"]); ?></td>
			<?php if($v["state"] == 1 ): ?><td style="color:#575757;">普通管理员</td>
				<?php else: ?>
				<td style="color:#FFD700;">超级管理员</td><?php endif; ?>



			<?php if($v["state"] == 1 ): ?><td><a href="/zhihuiyuan/Admin/User/grade/id/<?php echo ($v["id"]); ?>/state/2">升级</a></td>
				<?php else: ?>
				<td><a href="/zhihuiyuan/Admin/User/grade/id/<?php echo ($v["id"]); ?>/state/1">降级</a></td><?php endif; ?>




			<td><a href="/zhihuiyuan/Admin/User/updateShow/id/<?php echo ($v["id"]); ?>">修改</a></td>
		</tr><?php endforeach; endif; ?>
	</table>
		<br/><br/>	
	</div>

</body>
</html>