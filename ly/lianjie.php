<?php
header("Content-Type:text/html;charset=utf8");
$username=$_POST['t1'];
$password=$_POST['t2'];
$repassword=$_POST['t3'];
$truename=$_POST['t4'];
$sex=$_POST['r5'];
$email=$_POST['t5'];
$question=$_POST['t6'];
$answer=$_POST['t7'];
if($password==$repassword){$conn=mysql_connect("localhost","root","");
mysql_set_charset('utf8');
mysql_select_db("ly",$conn);
$sql="insert yh(name,password,truename,sex,email,question,answer) values('{$username}','{$password}','{$truename}','{$sex}','{$email}','{$question}','{$answer}')";
$rel=mysql_query($sql);
header("location:shouye.php");
}
else{
	header("location:zhuce.php");
}

?>