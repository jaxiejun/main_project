<?php 
/*
*建立数据库连接
*/
header('Content-Type:text/html;charset=utf-8');
$hostname_conn="localhost";
$username_conn="root";
$password_conn="admin";

$conn=mysql_connect($hostname_conn,$username_conn,$password_conn); 	
if (!$conn) {
	echo "数据库连接失败";
}
 ?>
