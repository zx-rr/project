<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
*{font-size:17px;}

	</style>
</head>
<body background="b2.jpeg">
    <form action="lianjie.php" method="post" >
	<table width="776" align="center">
	<br>
	<tr>
		
		<table align="center" height=30 >
			<tr>
				<td colspan="2" style="text-align: center;">请用户认真填写注册信息！</td>
			</tr>
			<tr height=7></tr>
			<tr>
				<td>手机号：</td>
				<td><input type="text" name="t1" size="25"></td>
			</tr>
			<tr>
				<td>密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
				<td><input type="text" name="t2" size="25"></td>
			</tr>
			<tr>
				<td>验证密码：</td>
				<td><input type="text" name="t3" size="25" >请与密码填写一致</td>
			</tr>
			<tr>
				<td>真实姓名：</td>
				<td><input type="text" name="t4" size="25"></td>
			</tr>
			<tr>
				<td>性别：</td>
				<td><input type="radio" name="r5" value="男" checked="checked">男
				<input type="radio" name="r5" value="女">女
				</td>
			</tr>
			<tr>
				<td>E-mail：</td>
				<td><input type="text" name="t5" size="25"></td>
			</tr>
			<tr>
				<td>密保问题：</td><td><input type="text" name="t6" size="25"></td>
				</select></td>
			</tr>
			<tr>
				<td>密保答案：</td><td><input type="text" name="t7" size="25">
			</td>
			<tr>
				<td colspan="2" style="text-align: center;"><input type="submit" value="注册">&nbsp;&nbsp;&nbsp;
				<input type="reset" name="重置">
				</td>
			</tr>
		</table>