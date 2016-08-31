<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body { margin: 0; padding: 0; background: #f2f2f2; font-family: '微软雅黑'; }
		ul, li { margin: 0; padding: 0; list-style: none; }
		input { margin: 0; padding: 0; outline: none; border: none; font-size: 18px; color: #666; text-indent: 8px; }
		.login_from { width: 500px; height: 442px; background: #fff; position: absolute; left: 50%; top: 50%; margin-top: -221px; margin-left: -250px; }
		.login_from .title { height: 70px; background: #288f6f; font-size: 36px; color: #fff; text-align: center; line-height: 70px; }
		.login_from .user { padding: 56px 0 48px 34px; }
		.login_from span { font-size: 24px; color: #000; }
		.login_from input { width: 346px; height: 38px; border: none; background: #f2f2f2; }
		.login_from .pass { padding: 0 0 78px 34px; }
		.login_from .btn {  padding-left: 114px; }
		.login_from .submit { width: 272px; height: 52px; background: #288f6f; font-size: 30px; color: #fff; font-family: '微软雅黑';cursor: pointer; }
	</style>
</head>
<body>
	<form method="post" action="/Admin/Login/login">
		<ul class="login_from">
			<li class="title">管理员登陆</li>
			<li class="user">
				<span>用户名</span>
				<input class="text" type="text" name="uname">
			</li>
			<li class="pass">
				<span>密　码</span>
				<input class="text" type="password" name="password">
			</li>
			<li class="btn">
				<input class="submit" type="submit" value="登录">
			</li>
		</ul>
	</form>
		
</body>
</html>