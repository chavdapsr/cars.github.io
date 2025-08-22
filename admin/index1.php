<?php
    include("controller.php");
    $j= new reqres();
    $j-> login($a,$a1);



?>

<html>
<head>
<title>Adminlogin</title>
<link href="css1/login.css" rel="stylesheet" type="text/css" media="all" >


</head>

<body style="background-image:url('images/bac.jpg')">
 <center>
 <div class="logo">
        <a href="index.php"><h1 style="font-size: 50px;font-family:fantasy;"><span style="color:#BCC6CC;">Car-Mafia</span><span style="color:#D54F30;"> Admin Panle</span></h1></a>
 </div>
 </center>

<form>
        <h1><span style="color:#BCC6CC;">Admin</span><span style="color:#D54F30;"> Login</span></h1>
		<input name="emailaddress" placeholder="Enter your emial id?" class="email" type="email" required >
		<input name="password" placeholder="Enter your password?" class="email" type="password" maxlength="8" required >
		<input name="submit" class="btn" type="submit" value="Submit" >
</form>

</body>

</html>
