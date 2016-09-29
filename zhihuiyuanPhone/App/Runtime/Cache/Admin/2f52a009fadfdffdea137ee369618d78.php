<?php if (!defined('THINK_PATH')) exit(); session_name( "Zjmainstay" ); session_start(); $_SESSION['admin_user'] = "Y"; session_write_close(); ?>
	<meta http-equiv="refresh" content="0;url=http://www.youdomain.com/administrator/">
	<html>

	<head>用户登录</head>
	<!--判断是否选中-->
	<form name="LoginForm" method="post" action="login.php" onSubmit="return InputCheck(this)">
		<p>
			<label for="username" class="label">用户名:</label>
			<input id="username" name="username" type="text" class="input" />
			<p/>
			<p>
				<label for="password" class="label">密 码:</label>
				<input id="password" name="password" type="password" class="input" />
				<p/>
				<p>
					<input type="submit" name="submit" value="确定" class="left" />
				</p>
	</form>

	</html>