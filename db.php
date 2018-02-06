<html>
<head>
</head>
<body>
<?php
$con=mysql_connect("localhost","root");
if($con)
{
echo "successfully connected";
}
else
{ 
die('failed:' .mysql_error());
}
$sql="create database aditya";
$qry=mysql_query($sql);
if($qry)
echo "<h1>Database Created</h1>";
else
echo "failed".mysql_error();
?>
</body>
</html>