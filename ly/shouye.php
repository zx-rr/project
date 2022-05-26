
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<style type="text/css">
*{font-size: 12px }
	</style>
</head>
<body background="b3.jpeg">
	<table width="775" align="center">
	<tr><td colspan="2"><img src="t4.jpg" alt=""></td></tr>
	<tr>
	<td width="179" style="background-image: url('t3.jpg')"  valign="top">
<form action="jiudian.php" method="post">
<table width="160" align="center" style="text-align: center">
<tr height="30">
<td></td>
</tr>
<tr>
<td>用户名<input type="text" name="username" size="10"></td>
</tr>
<tr>
<td>密&nbsp;&nbsp;&nbsp;码<input type="text" name="password" size="10"></td>
</tr>
<tr>
<td><input type="submit" value="登录">&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></td>
</tr>
<tr>
      <td>
      <a href="zhuce.php">注册新用户</a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="shouye1.php">管理员登录</a>
      </td>
</tr>
<tr>
<td>
<?php
if(isset($_GET['errno'])&& $_GET['errno']!=""){
	$errno=$_GET['errno'];
	if ($errno==1) {
		echo "用户名不存在";
	}elseif ($errno==2) {
		echo "密码不正确";
	}
}
?>
</td>
</tr>
</table>
</form>
	</td>
	<td><img src="a2.jpg" alt=""></td>
	</tr>
	</table>
	<table>
	<tr><td></td></tr>

	</table>
</body>
</html>