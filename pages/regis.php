<?php
// Turn off error reporting
error_reporting(0);
?>
<?php
include("cnn.php");
$e=mysql_query("select * from city") or die(mysql_error());

if(isset($_REQUEST['ins']))
{
	$nm=$_REQUEST['nm'];
	$add=$_REQUEST['addr'];
	$ct=$_REQUEST['city'];
	$mo=$_REQUEST['mob'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	
	mysql_query("insert into user_reg values('','$nm','$add','$ct','$mo','$email','$pass','active')") or die(mysql_error());
	
	
		
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>register</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>   
<!--slider-->
<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/jqv.js"></script>
<script type="text/javascript">
	
		$(document).ready(function() {
         $("#val").validate({
			 rules:
			 {
				nm:
				{
					required:true,
				},
				addr:
				{
						required:true,
				},
				city:
				{
						required:true,
				},
				mob:
				{
						required:true,
				},
				email:
				{
							required:true,
							email:true,
				},
				pass:
				{
						required:true,
						
				},
				cpass:
				{
						required:true,
						equalTo:'#pp',
				},
				 
			 },
			 messages:
			 {
				 nm:
				{
					required:"please Enter The Name",
				},
				addr:
				{
						required:"Enter The Address",
				},
				city:
				{
						required:"Select The city",
				},
				mob:
				{
						required:"Enter The Mobile No.",
				},
				email:
				{
							required:"please Enter The Email",
							email:"Enter Correct Email id",
				},
				pass:
				{
						required:"Enter The Password",
		
				},
				cpass:
				{
						required:"Enter Confirm password",
						equalTo:"Password Not match",
				},
				 
			 },
			 
			});
		    
        });






</script>

<style type="text/css">

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

textarea.ab {
            
   
    border: 1px solid rgba(255,255,255,.6);
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;

    display:block;
   background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;

    color:#fff;
    
}

input {
     
    	background-color:white;
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
input.tel {background: transparent;
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

</style>
<style type="text/css">
.aa
{
		height:40px;
		width:220px;	
		
		font-size:15px;
		
}

.aab
{
	height:40px;
		width:225px;	
		background-color: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
    

		font-size:15px;
	
}
.ab
{
	width:220px;
	
	
}
.ac
{
	height:30px;
	
	border-color:#BCC6CC;
	border-radius:5px;
	
	font-weight:bold;
	
	
		
}


.auto-style1 {
	width: 100%;
	float: none;
	margin-right: 0px;
}


</style>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<?php include('head.php');?>

		<div class="banner-top">
			<div class="header-bottom">
				 <div class="auto-style1">
				     	<div id="slider">
						<!--	<ul class="slides">
						    	<li><a href="details.html"><canvas ></canvas><img src="images/banner4.jpg" alt="Marsa Alam underawter close up" ></a></li>
						        <li><a href="details.html"><canvas></canvas><img src="images/banner2.jpg" alt="Turrimetta Beach - Dawn" ></a></li>
						        <li><a href="details.html"><canvas></canvas><img src="images/banner3.jpg" alt="Power Station" ></a></li>
						        <li><a href="details.html"><canvas></canvas><img src="images/banner1.jpg" alt="Colors of Nature" ></a></li>
						    </ul> 
						    <span class="arrow previous"></span>
						    <span class="arrow next"></span> -->
				  	</div>
		  			<div class="content-wrapper">		  
						<div class="content-top">
							  	 <div class="about_wrapper"><h1>
        Create an Accounts
        </h1>
                    </div><br>
								</div>
                                                                  
							 <div class="text" style="margin-top:-10px; width: 398px; height: 530px;" > 	
								
                        <form method="post" id="val" class="form1" style="height: 503px; width: 376px;">
                       
                        <table style="float:none; height: 453px;">
                        	<tr>
                            	<td><input type="text" name="nm"  placeholder="Enter Your Name.." class="aa" required="required"></td>
                            </tr>
                            <tr>
                            	<td>
								<textarea class="ab" name="addr" style="height: 57px; width: 215px;" placeholder="Enter your Address.." required="required"></textarea></td>
                            </tr>
                            <tr>
                            	<td>
								<select class="aab" name="city" style="width: 220px; color:white;" placeholder="select city" selected="selected" required="required">
                                	  	<option value="" selected="select your city" >select your city...</option>
                                	  	<option>ahmedabad</option>
                                	<option>jamnagar</option>
                                    <option>gandhinagar</option>
                                    <option>vadodara</option>

                                <?php while($ee=mysql_fetch_array($e)) { ?>
                               		
                                	<option><?php echo $ee[2]; ?></option>                               	

                                	select city</select>
                                    <?php } ?>
                                    </td>
                            </tr>
                            <tr>
                            	<td><input type="tel" name="mob" placeholder="Enter Your Mobile no.." maxlength="10" class="aa" required="required"></td>
                            </tr>
                            
                            <tr>
                            	<td><input type="email" name="email" placeholder="Enter Your Email id.." class="aa" required="required"></td>
                            </tr>
                        	<tr>
                            	<td><input type="password" name="pass" placeholder="Enter Your Password.." class="aa" required="required"></td>
                            </tr>
                        	<tr>
                            	<td><input type="password" name="cpass" id="pp"  placeholder="Enter Your Confirm Password.." class="aa" required="required"><br/></td>
                            </tr>
                        	<tr>
                            	<td align="center" style="height: 50px">
								<input type="submit"  name="ins" value="Sign Up" class="ac" style="width: 157px; height: 41px;"></td>
                            </tr>
                        	
                        </table>
                        	
                            
                            </form>
							</div>                                             
						</div>
				      </div>
		             </div> 		
                    </div>
                   <br/>
                   <br/>

                <br/>


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

    	
    	
            