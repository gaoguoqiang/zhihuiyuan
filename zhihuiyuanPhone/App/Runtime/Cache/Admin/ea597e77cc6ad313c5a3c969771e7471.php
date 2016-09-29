<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div align="center">当前操作：添加分类</div><br/>
	<form action="/zhihuiyuan1/Admin/Type/save" method="post">
		<table border="1" align="center">
			<tr>
				<td>名称：</td>
				<td><input type="text" name="name" /></td>
			</tr>
			
			<tr>
				<td>父分类：</td>
				<td><select name="fid">
				<option value="0">顶级分类</option>	
				<?php echo ($typeStr); ?>
				</select>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" value="提交"/></td>
			</tr>
			
		</table>
	</form>
</body>
</html>