<body bgcolor="skyblue">
<?php
$con=mysql_connect("localhost","root");
$db=mysql_select_db("aditya",$con);
$uuser=$_POST['user'];
$upassword=$_POST['pwd'];
$um=$_POST['mail'];
$upn=$_POST['phno'];
$sql="insert into student values('".$uuser."','".$upassword."','".$um."',".$upn.")";
$qry2=mysql_query($sql);
if($qry2)
{
echo "<center>";
echo "<br><br>";
echo "<h3>Registration is Successfull</h3>";
echo "</center>";
?>
<center><a href="login.html">Click here to Login</a></center>
<?php
}
else
{
echo "<center>";
echo "User Not Registered".mysql_error();
echo "<center>";
}
?>
</body>