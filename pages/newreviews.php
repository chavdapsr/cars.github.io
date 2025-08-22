<?php 
 error_reporting(0);
 
?>


<!DOCTYPE HTML>
<html>
<head>
<title>news & reviews</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
                                                        <script type="text/javascript">
         function de(str)
            {
               var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?dd="+str,true);
                d.send();
            }

      </script>   
      <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />



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
		resize:none;
}
.ac
{
	height:30px;
	
		border-radius:5px;
	
	font-weight:bold;
		
		
}
</style>
<style>
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); 
        -ms-transform: scale(1,1); 
        -moz-transform: scale(1,1);
         -webkit-transform: scale(1,1); 
         transform: scale(1,1);
          -o-transition: all 0.2s ease-in-out; 
          -ms-transition: all 0.2s ease-in-out; 
          -moz-transition: all 0.2s ease-in-out; 
          -webkit-transition: all 0.2s ease-in-out; 
          transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999;
        -o-transform: scale(1.03,1.03); 
        -ms-transform: scale(1.03,1.03);
        -moz-transform: scale(1.03,1.03);
        -webkit-transform: scale(1.03,1.03);
        transform: scale(1.03,1.03);
    }
.photos {
        width: 945px;
	    height: 400px;
	    margin: 100px auto;
	    position:relative;
	}
	.photos > div {
	    background-color: rgba(128, 128, 128, 0.5);
	    border: 2px solid #444;
	    float: left;
	    height: 150px;
	    margin: 5px;
	    overflow: hidden;
	    position: relative;
	    width: 300px;
	    z-index: 1;
	 
	    -webkit-border-radius: 10px;
	    -moz-border-radius: 10px;
	    -ms-border-radius: 10px;
	    	    -o-border-radius: 10px;
	    border-radius: 10px;
	     
	    -webkit-transform:scale(1.0);
	    -moz-transform:scale(1.0);
	    -ms-transform:scale(1.0);
	    -o-transform:scale(1.0);
	    transform:scale(1.0);
	 
	    -webkit-transition-duration: 0.5s;
	    -moz-transition-duration: 0.5s;
	    -ms-transition-duration: 0.5s;
	    -o-transition-duration: 0.5s;
	    transition-duration: 0.5s;
	}
	.photos > div img{
	    width: 100%;
	}
	.photos > div:hover{
	    z-index: 10;
	 
	    -webkit-transform:scale(2.0);
	    -moz-transform:scale(2.0);
	    -ms-transform:scale(2.0);
	    -o-transform:scale(2.0);
	    transform:scale(2.0);
	}
	.photos > div div {
    background: url(../images/hover.gif) repeat scroll 0 0 transparent;
	    cursor: pointer;
	    height: 100%;
	    left: 0;
	    opacity: 0.5;
	    position: absolute;
	    top: 0;
	    width: 100%;
	    z-index: 15;
	 
	    -webkit-transition-duration: 0.5s;
	    -moz-transition-duration: 0.5s;
	    -ms-transition-duration: 0.5s;
	    -o-transition-duration: 0.5s;
	    transition-duration: 0.5s;
	}
	.photos > div:nth-child(1):hover div {
	    height: 0%;
	}
	 
	.photos > div:nth-child(2):hover div {
    height: 0%;
	    margin-top: 100px;
	}
	.photos > div:nth-child(3):hover div {
	    width: 0%;
	}
	.photos > div:nth-child(4):hover div {
	    margin-left: 300px;
	    width: 0%;
	}
	.photos > div:nth-child(5):hover div {
	    height: 0%;
	    margin-left: 150px;
	    margin-top: 50px;
	    width: 0%;
	}
	.photos > div:nth-child(6):hover div {
	    margin-left: 150px;
	    width: 0%;
	}
	.photos > div:nth-child(7):hover div {
	    height: 0%;
	    margin-left: 150px;
	    margin-top: 50px;
	    width: 0%;
	 
	    -webkit-transform: rotateX(360deg);
	    -moz-transform: rotate(360deg);
	    -ms-transform: rotate(360deg);
	    -o-transform: rotate(-360deg);
	    transform: rotate(-360deg);
	}
	.photos > div:nth-child(8):hover div {
	    height: 0%;
	    margin-left: 150px;
	    margin-top: 50px;
	    width: 0%;
	 
	    -webkit-transform: rotateZ(600deg);
	    -moz-transform: rotateZ(600deg);
	    -ms-transform: rotateZ(600deg);
	    -o-transform: rotateZ(600deg);
	    transform: rotateZ(600deg);
	}
	.photos > div.pair div {
	    width: 50%;
	}
	.photos > div.pair div:nth-child(odd) {
	    margin-left: 150px;
	}
	.photos > div.pair:hover div {
	    width: 0%;
	}
	.photos > div.pair:hover div:nth-child(odd) {
    margin-left: 300px;
	}
.header-bottom{
	 border: 1px solid rgba(255,255,255,.4);

}
.auto-style1 {
	border-style: solid;
	border-width: 1px;
}
</style>

</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>

<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox" ></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
<body style="color: #BCC6CC" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="header-bg">
    
        <?php include('head.php');?>

        <div class="banner-top">
            <div class="header-bottom">
                 <div class="header_bottom_right_images">
				 	<div class="about_wrapper" style="width: 914px"><h1>Car-Mafia news & reviews</h1>
								</div>
				     	
		  			<div class="about-group">
		  			<div class="about-top">	
						<div class="grid images_3_of_1">
							<img src="images/newsrev.png" alt="" height="152" width="911" class="auto-style1"/>
							<br>
						</div>
						<div class="grid span_2_of_3" style="width: 93%; margin-left: 0%;" >
							<h3 style="width: 963px">n<span class="head1">ews and reviews about new 
							cars feuatures and it's price...</span></h3>
							<p style="color:#BCC6CC;">Maruti Suzuki Alto K10 comes in following 6 versions with 1 engine and 2 transmission and 2 fuel options. Click on a Alto K10 version name to know on-road price in your city, specifications and features.</p>
							<p style="color:#BCC6CC;">Tata Bolt comes in following 8 versions with 2 engine and 1 transmission and 2 fuel options. Click on a Bolt version name to know on-road price in your city, specifications and features.</p>
						</div><div class="clear"></div> 
						
					</div>
			   <p class="about-para" style="color:#BCC6CC;">Honda Amaze comes in following 15 versions with 2 engine and 2 transmission and 3 fuel options. Click on a Amaze version name to know on-road price in your city, specifications and features.</p>
						<p class="about-para" style="color:#BCC6CC;">Maruti Suzuki Ritz comes in following 9 versions with 2 engine and 2 transmission and 2 fuel options. Click on a Ritz version name to know on-road price in your city, specifications and features.</p>
						<p class="about-para" style="color:#BCC6CC;">Hyundai Elite i20 comes in following 10 versions with 2 engine and 1 transmission and 2 fuel options. Click on a Elite i20 version name to know on-road price in your city, specifications and features.&nbsp;</p><div class="clear"></div>
			   <div class="links" style="height: 40px">
		  				<ul>
		  					<li><a href="#"><img src="images/blog-icon1.png" title="date"><span style="color:#BCC6CC;">june 14, 2013</span></a></li>
		  				</ul>
		  		</div>
			  	<div class="team">
						<div class="leave-comment"><a href="#" name="comment" style="color:#BCC6CC;">Leave a Comment...</a></div>
						<div class="comments-area">
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
						    	<textarea  name="addr" style="height: 76px; width: 195px;" class="ab" placeholder="Subjects..." required="required"></textarea>
						    </div>
						   <div style="height: 85px">
						   		<a href="">
								<button class="ac" style="height: 38px">Submit</button></a>
						  </div>
					    </form>
		</div>
	</div>
	</div>
</div>
 <hr/>
                		 <br><br><br><br>
        
                </div>
        <div class="clear"><br></div>
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
    </div></div>
</div>
</body>
</html>

        
        
            