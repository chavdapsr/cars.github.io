<?php
// Turn off error reporting
error_reporting(0);
?>

<?php
       session_start();
include("cnn.php");
$e=mysql_query("select * from city") or die(mysql_error());

if(isset($_REQUEST['submit']))
{
	
	$eid=$_REQUEST['eid'];
	$pass=$_REQUEST['pass'];
	$res=mysql_query("select * from user where email='$eid' and pwd='$pass'") or die(mysql_error());
	
	if(mysql_num_rows($res)>0)
	{
		
		   $_SESSION['name']=$eid;
		header("location:index.php");
			
	}
	else
	{
		?>
        <script type="text/javascript">
        	alert("invalid credential");
			
        </script>
        <?php
	}
	
		
}


?>


<!DOCTYPE HTML>
<html>
<head>
<title>login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   
<!--slider-->
<script src="js/jquery.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/superfish.js"></script>

<style type="text/css">
body{
	}

form {
    margin-left:auto;
    margin-right:auto;
    width: 343px;
    height: 640px;
    padding:30px;
    border: 1px solid rgba(255,255,255,.3);
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
  background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
-moz-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden; 
}

textarea {
             width: 276px;
    height: 110px;
    border: 1px solid rgba(255,255,255,.6);
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display:block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
    color:#fff;
   background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;

    overflow:hidden;
}

input {
   	   background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;

    border: 1px solid rgba(255,255,255,.4);
   
    color:#fff;
   
}

input[type=submit] {
    cursor:pointer;
}
 
input.name {
        background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
    padding-left:45px;
}

input.email { background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
padding-left:45px;
}
input.tel { background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
 padding-left:45px;
	        
}

input.message { background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
padding-left:45px;
}

::-webkit-input-placeholder {
	  color: #fff;
}

:-moz-placeholder{ 
    color: #fff; 
}

::-moz-placeholder {
    color: #fff;
}

:-ms-input-placeholder {  
	  color: #fff; 
}

input:focus, textarea:focus { 
	  background-color: rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 5px 1px rgba(256*256*256,.5);
    -webkit-box-shadow: 0 0 5px 1px rgba(256*256*256,.5);
    box-shadow: 0 0 5px 1px rgba(256*256*256,.5);
	  overflow: hidden; 
}

.ac {
	  background-position: 0% 0%;
	width: 138px;
	  height: 44px;
	  -moz-border-radius: 4px;
	  -webkit-border-radius: 4px;
	  border-radius: 4px;
	  float:right;
     border: 1px solid rgba(255,215,0,.4);
    padding: 10.5px 21px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	text-shadow: #333333 0 1px 0;
	color: #C0C0C0;
	 background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
    background-repeat: repeat;
	background-attachment: scroll;
}

.ac:hover {
     border: 1px solid rgba(255,255,255,.4);
    text-shadow: #333333 0 1px 0;
   background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
          
    color: #fff;
 }

.ac:active {
    background-position: 0% 0%;
	margin-top:1px;
    text-shadow: #333333 0 -1px 0;
     border: 1px solid rgba(255,215,0,.4);
    color: #fff;
	
    background-repeat: repeat;
	background-attachment: scroll;
}

label.error
{
	color:red;
	position:absolute;
	margin-left:10px;
	margin-top:15px;
}

.aa
{
		height:40px;
		width:320px;	
		margin:5px;
		font-size:15px;
		
}
.ab
{
	width:220px;
	margin-left:5px;
	resize:none;
}
.ac
{
	height:30px;
	
	border-color:#BCC6CC;
	border-radius:5px;
	
	font-weight:bold;
	margin:10px;
	
		
}


</style>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<?php include('head.php');?>

		<div class="banner-top">
			<div class="header-bottom">
				 <div class="header_bottom_right_images">
				     	<div id="slideshow" style="left: 0px; top: 41px; height: 50px; width: 94%;">
                        <div class="about_wrapper"><h1>
         Log In
        </h1>
                    </div> </div><br/><br/>
                                  <br/>

                            <form method="post" class="form1" style="height: 339px; width: 436px;">
					
	                        
                            <table style="margin-top:100px;">
                            
                        	<tr>
                            	<td><input type="email" name="eid" placeholder="Enter Your Email id" class="aa" required="required"></td>
                            </tr>
                            <tr>
                            	<td><input type="password" name="pass" placeholder="Please Enter Your Password" class="aa" required="required"> </td>
                            </tr>
                            <tr>
                            	<td align="center" colspan="2">
								<input type="submit" name="submit" value="Log In" class="ac" style="height: 40px"></td>
                            </tr>
                          	
                             </table>
                        	
                            
                            </form>
							 	</div>
		  			<div class="content-wrapper">		  
						
						<br><br><br>		  
						
						</div>                                             
						</div>
				</div>
		 
		<div class="clear"></div>
		<div class="footer-bg" style="width: 848px; height: 85px;">
      <div class="auto-style3" style="width: 105%; height: 117px;"> 
 
        <div class="f-bg">
            <div class="total">
                <div class="footer">
                    
                            <a href="" class="auto-style2">
							<h1 style="font-family:fantasy; width: 648px;" class="auto-style4">
							<span style="color:#BCC6CC;" class=""><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
				</strong>  </span>
							<span style="color:#BCC6CC;" class="auto-style6">
							<strong>Developed by Hk & Psr ||  
				</strong>  </span>
				<span style="color:#D54F30;" class=""> 
							<strong class="auto-style6">All rights Reserved by Touchess.com</strong></span></h1>
                    
                            <a href="index.php">
							<h1 style="font-size: 50px;font-family:fantasy; width: 233px; float:right" class="auto-style5"><span style="color:#BCC6CC;">Car</span><span style="color:#D54F30;">-Mafia</span></h1>
        					</a>
           </div>    
   
        </div>
      </div> 
     </div>
    </div>
        </body>
</html>

    	
    	
            