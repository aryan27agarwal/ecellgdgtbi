<?php
$db_url=getenv('MYSQL_DATABASE_URL');
$url=parse_url($db_url);
$host=$url["host"];
$username=$url["user"];
$password=$url["pass"];
$port = $url["port"];
$dbname=substr($url["path"],1);

$conn=mysqli_connect($host,$username,$password,$dbname, $port) or die("Database connection fail");
?>
