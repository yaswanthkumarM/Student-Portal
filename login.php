<body bgcolor="skyblue">
<?php
$con=mysql_connect("localhost","root");
$db=mysql_select_db("aditya",$con);
$uname=$_POST['user'];
$upassword=$_POST['pwd'];
$found=0;
$sql="select *from student";
$qry2=mysql_query($sql);
while($row=mysql_fetch_array($qry2))
{
  $un=$row['user'];
  $pw=$row['password'];
  if($uname==$un && $upassword==$pw)
  {
     echo "<center>";
     echo "<br><br>";
     echo "<h3>Login Successful</h3>";
     echo "</center>";
     echo "<br>";
 ?>
     <center><a href="home.html" target="_parent">Click to Home</a></center>
<?php
     $found=$found+1;
  }
}
if($found==0)
{
echo "<center>";    
echo "<h3>login failed</h3>";
echo "<br>";
echo "<h4>Give Valid Credentials</h4>";
echo "</center>";
}
?>
</body>