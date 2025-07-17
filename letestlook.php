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
<title>letestlooks</title>
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
#newrew .new .scale-caption h3, #newrew .new .scale-caption p {
    position: relative;
    left: -200px;
    width: 170px;
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    -ms-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
}
 
#newrew .new .scale-caption h3 {
    -webkit-transition-delay: 300ms;
    -moz-transition-delay: 300ms;
    -o-transition-delay: 300ms;
    -ms-transition-delay: 300ms;
    transition-delay: 300ms;
}
 
#newrew .new .scale-caption p {
    -webkit-transition-delay: 500ms;
    -moz-transition-delay: 500ms;
    -o-transition-delay: 500ms;
    -ms-transition-delay: 500ms;
    transition-delay: 500ms;
}
#newrew .new:hover #image-6 {
    -moz-transform: scale(1.4);
    -o-transform: scale(1.4);
    -webkit-transform: scale(1.4);
    transform: scale(1.4);
}
#newrew .new:hover .scale-caption h3,
#newrew  .new:hover .scale-caption p {
    -moz-transform: translateX(200px);
    -o-transform: translateX(200px);
    -webkit-transform: translateX(200px);
    transform: translateX(200px);
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
        <u>CARS BY CAR-MAFIA</u>
        </h1>
                    </div>
                    <div class="about-group1">
                      <div class="about-top1">
                      <br/>
                        <form name=first class="form1">
<table>
</table>

<br/>

</form>

                                          
   
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

        
        
            