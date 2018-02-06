<?php
$con=mysql_connect("localhost","root");
$db=mysql_select_db("aditya",$con);
{
  $mn="june";
  $mn1="july";
  $mn2="august";  
         if($mn)
              {
                      echo "<center>";
                      echo "cse1juneattendance.html";
                      echo "</center>";
                      echo "<br>";
                      ?>
                      <?php
                }
         elseif($mn1)
  {
     echo "<center>";
     echo"cse1julyattendance.html";
     echo "</center>";
     echo "<br>";
 ?>
<?php
  } 
        if($mn2)
  {
     echo "<center>";
     echo"cse1augustattendance.html";
     echo "</center>";
     echo "<br>";
 ?>
     <center>Click to Home</a></center>
<?php
  }
}
?>