<?php 
  error_reporting(0);  
  ob_start();
      include("cnn.php"); 
     $sel=mysql_query ("select * from company_list");
             $sel1=mysql_query ("select * from company_list");
                if(isset($_REQUEST['com']))
          {
              $aa1=$_REQUEST['sbt'].",".$_REQUEST['sbt1'];
              //$aa2=$_REQUEST['sbt1'];
          header("Location:comp.php?id=$aa1");
          }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>offers</title>
<script type="text/javascript">
function checnum(as)
{
var dd = as.value;
if(isNaN(dd))
{
dd = dd.substring(0,(dd.length-1));
as.value = dd;
}
} function loan() {
var a = document.first.aa.value;
var b = document.first.bb.value;
var c = document.first.cc.value;
var n = c * 12;
var r = b/(12*100);
var p = (a * r *Math.pow((1+r),n))/(Math.pow((1+r),n)-1);
var prin = Math.round(p*100)/100;
document.first.r1.value = prin;
var mon = Math.round(((n * prin) - a)*100)/100;
document.first.r2.value = mon;
var tot = Math.round((mon/n)*100)/100;
document.first.r3.value = tot;
for(var i=0;i<n;i++)
{
var z = a * r * 1;
var q = Math.round(z*100)/100;
var t = p - z;
var w = Math.round(t*100)/100;
var e = a-t;
var l = Math.round(e*100)/100;
a=e;
} } 
</script>
<style type="text/css">
.subheading
{
font-size:13px;
font-family: arial, verdana, san-serif;
color: #BCC6CC;
}
.calc{
   	height:280px;
   	width:380px;
	border-style:groove;
	 background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
	 
}
</style>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
 <style type="text/css">
 
.grid_1_of_3 {
    margin-left:auto;
    margin-right:auto;
    width: 26%;
    height: 94%;
    padding:30px;
    border: 1px solid rgba(255,255,255,.3);
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
   background: linear-gradient(90deg,rgba(255,255,255, 0.2) 25%, rgba(255,255,255, 0.2) 50% ,rgba(255,255,255, 0.3) 65%,rgba(255,255,255, 0.2) 75%, rgba(255,255,255, 0.1) 100%);
	-moz-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden; 
}

.button {
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
	 background: linear-gradient(90deg,rgba(255,255,255, 0.3) 25%, rgba(255,255,255, 0.3) 50% ,rgba(255,255,255, 0.3) 65%,rgba(255,255,255, 0.3) 75%, rgba(255,255,255, 0.3) 100%);
	   background-repeat: repeat;
	background-attachment: scroll;
}

.button:hover {
     border: 1px solid rgba(255,255,255,.4);
    text-shadow: #333333 0 1px 0;
   background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
         
    color: #fff;
 }

.button:active {
    background-position: 0% 0%;
	margin-top:1px;
    text-shadow: #333333 0 -1px 0;
     border: 1px solid rgba(255,215,0,.4);
    color: #fff;
	    background-repeat: repeat;
	background-attachment: scroll;
}
.grid_1_of_3{
	background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;

}
 
 </style>      
 <script type="text/javascript"> 
 function gets3(str)
            {
               // alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("sbt").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?gett3="+str,true);
                d.send();
            }
            function gets4(str)
            {
               // alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("sbt1").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?gett4="+str,true);
                d.send();
            }
             </script> 
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" style="color: #BCC6CC">
<div class="header-bg">
    
        <?php include('head.php');?>

        <div class="banner-top">
            <div class="header-bottom">
                 <div class="header_bottom_right_images">
                     <div class="about_wrapper"><h1>
        Offer Zone 
        </h1>
                    </div>
                    <div class="about-group1">
                      <div class="about-top1">
                      <br/>
                        

				<div class="grid_1_of_3 images_1_of_3" style="height: 96%">
									<div class="grid_1">
										<a href="single.html"><img src="images/off1.jpg" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">Honda SIEL Celebrates 5 Lakh Customers</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">Benefits/Discounts</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
													<div class="cart">
															<a href="newreviews.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>Views</span></button></a>
														</div>
														<a href="Gallery.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Pic.</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
							</div>
							
							
							<div class="grid_1_of_3 images_1_of_3" style="height: 96%">
									<div class="grid_1">
										<a href="single.html"><img src="images/off2.jpg" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">Mahindra discounts their vehicles</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">Discounts</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="newreviews.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>View</span></button></a>
														</div>
														<a href="Gallery.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Pic.</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
							</div>
									<div class="grid_1_of_3 images_1_of_3" style="height: 96%">
									<div class="grid_1">
										<a href="single.html"><img src="images/off3.jpg" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">FIAT Car- Dhanvarsha Offer </p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">Benefits</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="newreviews.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>View</span></button></a>
														</div>
														<a href="Gallery.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Pic.</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
							</div>

                                          
   
       </div>  
        <div class="clear"><br><br><br></div>
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
</div>
</div>
</div>
</body>
</html>

        
        
            