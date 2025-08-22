<?php
   mysql_connect("localhost","root","") or die("connection not found");
   mysql_select_db("carmafia") or die(mysql_error());
   
   $ins=mysql_query("insert into features values('','$a2','$x','$p','$y','$s','$z','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23')") or die (mysql_error());
?>
