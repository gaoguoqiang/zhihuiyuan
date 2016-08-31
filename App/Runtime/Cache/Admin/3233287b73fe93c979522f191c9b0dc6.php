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
	<table class="ua" border="1">
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>邮箱</td>
			<td>电话</td>
			<td>会员等级</td>
			<td>会员管理</td>
		</tr>
		<?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
			<td><a href="/zhihuiyuan/Admin/Teacher/teacher/id/<?php echo ($v["id"]); ?>"><?php echo ($v["user"]); ?></a></td>
			<td><?php echo ($v["sex"]); ?></td>
			<td><?php echo ($v["email"]); ?></td>
			<td><?php echo ($v["phone"]); ?></td>

			<?php if($v["vip"] == 1 ): ?><td style="color:#575757;">普通会员</td>
				<?php else: ?>
				<td style="color:#FFD700;">VIP会员</td><?php endif; ?>


			<?php if($v["vip"] == 1 ): ?><td><a href="/zhihuiyuan/Admin/Teacher/vip/id/<?php echo ($v["id"]); ?>/vip/2">升级会员</a></td>
				<?php else: ?>
				<td><a href="/zhihuiyuan/Admin/Teacher/vip/id/<?php echo ($v["id"]); ?>/vip/1">降级会员</a></td><?php endif; ?>
		</tr><?php endforeach; endif; ?>
		
	</table>
	</div>
	</div>
</div>
	
</body>
</html>