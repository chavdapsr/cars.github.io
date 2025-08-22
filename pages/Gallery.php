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
<title>letestgallery</title>
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

}
</style>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
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
        Cars Letest Gallery 
        </h1>
                    </div>                    <div class="about-group">
                      <div class="about-top">      
            
 
        <div class="header-para" style="width: 964px; height: 941px">
                <div class="categories">
                        <div class="list-categories">
                            </div>
                </div>           
                 
                <center>
				<div class="photos" style="left: 0px; top: 0px; height: 670px">
	            <div>
	                <img src="images/ca1.jpg" />
	                <div></div>
	            </div>
	            <div>
	                <img src="images/c01.jpg" />
	                <div></div>
	            </div>
	            <div>
	                <img src="images/c3.jpg" />
	                <div></div>
	            </div>
	            <div>
	                <img src="images/c4.jpg" />
	                <div></div>
	            </div>
            <div>
	                <img src="images/c5.jpg" />
	                <div></div>
	            </div>
	            <div>
	                <img src="images/c6.jpg" />
	                <div></div>
	            </div>
	             <div>
	                <img src="images/c02.jpg" />
	                <div></div>
	            </div>
                <div>
	                <img src="images/c03.jpg" />
	                <div></div>
	            </div>
                 <div>
	                <img src="images/c04.jpg" />
	                <div></div>
	            </div>
         
                  <div>
	                <img src="images/c7.jpg" />
	                <div></div>
	            </div>
	            <div>
	                <img src="images/c8.jpg" />
	                <div></div>
	            </div>
	            <div class="pair">
	                <img src="images/c9.jpg" />
	                <div></div>
	                <div></div>
	            </div>
	        </div>
           </center>
                    </div>
                <div class="clear"></div>
                </div>
        <div class="clear"><br><br>
        </div>
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

        
        
            