<?php
$con=mysql_connect("localhost","root");
$db=mysql_select_db("aditya",$con);
$sql2="create table student(user varchar(20),password varchar(10) ,email varchar(50),phno long)";
$qry2=mysql_query($sql2,$con);
if($qry2)
echo "table created";
else
echo "failed to create table".mysql_error();
?>