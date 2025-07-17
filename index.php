<?php
    include("controller.php");
    $j= new reqres();
    $j-> login($a,$a1);



?>

<html>
    <head>
        <title>admin login</title>
        <link rel="stylesheet" href="screen.css" type="text/css" media="screen" title="default" >   
    	<style type="text/css">
    	body{
	font-family: 'AmbleRegular';
	background:url('images/nice.jpg')repeat;
	
		
}

		.auto-style1 {
			font-size: large;
			font-weight: bold;
			border-left-color: #A0A0A0;
			border-right-color: #C0C0C0;
			border-top-color: #A0A0A0;
			border-bottom-color: #C0C0C0;
			padding-bottom: 6px;
		}
		.auto-style2 {
			font-size: large;
			font-weight: bold;
		}
		.auto-style3 {
			color: #BCC6CC;
			font-size: large;
			font-weight: bold;
			padding: 0;
		}
		.auto-style4 {
			margin-top: 0px;
		}
		</style>
    </head>         
    <body id="login-bg" style="width: 830px;background-image:url('images/nice.jpg'); height: 504px; color: #BCC6CC">
        <form method="post">
            <div id="login-holder" style="height: 483px">

            <!-- start logo -->
            <br/>
            <br/>
            <br/>
            <br/>
             <div class="logo">
                            <a href="index.php"><h1 style="font-size: 50px;font-family:fantasy;"><span style="color:#BCC6CC;">Car</span><span style="color:#D54F30;">-Mafia</span></h1></a>
                         </div>
                       <!-- end logo -->

            <div class="clear"></div>

            <!--  start loginbox ................................................................................. -->
            <div id="loginbox" style="left: -9px; top: 1px; width: 814px; height: 412px;">
            <!--  start login-inner -->
            <div id="login-inner" style="width: 485px; height: 312px;" class="auto-style4">

            <table align="center"  >
                <caption  class="auto-style3">Admin Login</caption>
                <tr>
                <td>
                <br/>
                </td></tr>
                <tr>
                <br/>
                <td class="auto-style1">USERNAME</td>
                <td>
				<input class="bac"  type="text" name="un" class="form1" style="height: 28px" ></td>
                <tr>
                    <td class="auto-style2">PASSWORD</td>
                    <td>
					<input class="bac" type="password" name="pw"  class="form1" style="height: 28px"></td>
                </tr>
                <tr>
                    <th></th>
                    <td valign="top"><input type="checkbox" class="checkbox-size" id="login-check"><label style="color:#BCC6CC" for="login-check">Remember me</label></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <center>
					<input class="bac" type="submit" value="login" name="s" class="gray-button" style="width: 78px; height: 37px;"><br/></center></td>
                </tr>
                            </table>
                            </div>
                       </div>
                </div>

        </form>


    </body>

</html>
