<?php
// Turn off error reporting
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
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

textarea.ab {
                  
   
    border: 1px solid rgba(255,255,255,.6);
    font-family: 'Source Sans Pro', sans-serif;
    font-size:18px;
      background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;

    display:block;
   
    color:#fff;
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

input.email {  background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
 padding-left:45px;
}
input.tel {  background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
 padding-left:45px;
	        
}

input.message {  background: transparent;
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
     border: 1px solid rgba(255,255,255,.4);
    padding: 10.5px 21px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	text-shadow: #333333 0 1px 0;
	color: #BCC6CC;;
	 background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
   background-repeat: repeat;
	background-attachment: scroll;
	border-color:#BCC6CC;

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
    border-color:#BCC6CC;
     border: 1px solid rgba(255,255,255,.4);
    color: #fff;
	    background-repeat: repeat;
	background-attachment: scroll;
	border-color:#BCC6CC;
	
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
		margin:5px;
		font-size:15px;
		
}
.aab
{
	height:40px;
		width:225px;	
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
<style type="text/css">
.aa
{
		height:40px;
		width:220px;	
		margin:5px;
		font-size:15px;
		
}
.aab
{
	height:40px;
		width:225px;	
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
	
		border-radius:5px;
	
	font-weight:bold;
	margin:10px;
	
		
}

</style>   
</head>
<body>
<div class="header-bg" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	
		
				                     <?php include('head.php');?>
		<div class="banner-top">
			<div class="header-bottom">
				 <div class="header_bottom_right_images">
				 	<div class="about_wrapper"><h1>
       Contact Car-Mafia it will be Always connected with You 
        </h1>
         </div>
		    <div class="section group">
				<div class="col span_2_of_c">
				  <div class="contact-form" style="left: 3px; top: 0px; width: 348px;">
				  	
                      <p style="font-size:20px;font-family:fantasy;">&nbsp;</p>
					     <form method="post"  class="form1" style="height: 410px">
					    	<div>
						    	<input type="name" name="userName" type="text" class="aa" placeholder="Enter Your Name.." style="height: 40px" required="required">
						    </div>
						    <div>
						    	<input  type="email" name="userEmail" type="text" class="aa" placeholder="Enter Your email.." style="height: 40px" required="required">
						    </div>
						    <div>
						     	<input id="mob" type="tel" name="userPhone" type="tel" placeholder="Enter Your phone.." maxlength="10" class="aa" style="height: 40px" required="required">
						    </div>
						    <div>
						    	<textarea  name="addr" style="height: 76px; width: 205px;" class="ab" placeholder="Enter your Address.." required="required"></textarea>
						    </div>
						   <div>
						   		<center><a href="">
								<button class="ac" style="height: 48px">Submit</button></a></center>
						  </div>
					    </form>
				  </div>
                      


				  </div>
  				</div><div class="clear"><br></div>
			</div>
		</div>
				<div class="clear"><br><br></div>
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
    </div>
</div>

</body>
</html>

    	
    	
            