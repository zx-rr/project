<?php
header("Content-Type:text/html;charset=utf8");
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysql_connect("localhost","root","");
mysql_set_charset('utf8');
mysql_select_db("ly",$conn);
$sql="select * from yh where name='{$username}'";
$rel=mysql_query($sql);
if($row=mysql_fetch_array($rel)){
	if ($password != $row['password']) {
		header("location:shouye.php");		
	}
}
else{
	header("location:shouye.php");
}
?>

<?php
header('content-type:text/html;charset=utf8');
//1建立mysql连接
$conn=mysql_connect('localhost','root','') or mysql_error();
//2设置编码方式
mysql_set_charset('utf8'); 
//3打开指定数据库
mysql_select_db('ly',$conn);
$sqla="select * from jd ";
$rela=mysql_query($sqla);
$rel=mysql_query($sql);
$shuliang=mysql_num_rows($rel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<style type="text/css">
*{font-size: 20px }
	</style>
</head>
<body background="b1.jpeg">
	<table width="775" align="center">
	<tr><td colspan="2"> <img src="t4.jpg" alt=""></td></tr>
	
		<tr>	
		<td width="168" style="background-image: url('t6.jpg')"  valign="top">
			<br>
     <a>地区分类</a>
     <br>
			<?php while($rows=mysql_fetch_array($rela)) {?>
			<a href="lyjd.php?adress=<?php echo $rows['adress'];?>"><br/><?php echo $rows['adress'];?></a>
			<?php };?>


		</td>
	<td width="1100"><img src="a3.jpg" alt=""></td>	
		</tr>

	</table>
</body>
</html>