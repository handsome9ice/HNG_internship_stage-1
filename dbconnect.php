<?php

$host='localhost';
$user='root';
$pass='';
$db='mydb';

// Create connection
$con=mysqli_connect($host,$user,$pass,$db);
// Check connection
if ($con)
echo 'Connected successfully to mydb database';

$sql="insert into mytable1 (username,password,email) values ('okpok',663636363,'nyin@es.ukod')";
$query=mysqli_query($con,$sql);
if($query)
  echo 'data inserted successfully';
?>
