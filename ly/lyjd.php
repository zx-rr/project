<?php
header('content-type:text/html;charset=utf8');
//1建立mysql连接
$conn=mysql_connect('localhost','root','') or mysql_error();
//2设置编码方式
mysql_set_charset('utf8'); 
//3打开指定数据库
mysql_select_db('ly',$conn);
$sql="select * from lx ";
$rel=mysql_query($sql);

$sqlb="select * from lx order by adress desc";
    $result=mysql_query($sqlb);
    $res_rows=mysql_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body background="b3.jpeg">
<table width="775" align="center">
		<tr>
			<td><img src="c1.png" alt=""></td>
		</tr >
					<td style="text-align: center"><input type="text" name="t1" size="20">
					
					<input type="submit" value="查询">
					</td>
			
<table style="text-align: center" border="1" width="580" align="center">
			
			<tr>
				    <td>主题乐园</td>
				    <td width="100">旅游地址</td>
				    <td width="100">旅游攻略</td>
			</tr>
			<form>
			<?php while($row=mysql_fetch_array($result)) {?>
			<tr>
				<td><?php print_r($row["gonglue"]);?></td>
				<td><?php print_r($row["adress"]);?></td>
				
				<td>查看</td>
			</tr>
			<?php };?>
			</form>
			</table>
	<tr>
		<td align="center"><img src="t4.jpg" alt=""></td>
	</tr>
	</table>
</body>
</html>