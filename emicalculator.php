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
<title>Emi Calc</title>
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
.t1{
	border: 1px solid #BCC6CC;

}
.form1 {
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
   background: linear-gradient(90deg,rgba(255,215,0, 0.4) 25%, rgba(210,105,30, 0.3) 50% ,rgba(210,105,30, 0.2) 65%,rgba(255,215,255, 0.3) 75%, rgba(255,215,255, 0.4) 100%);
	-moz-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden; 
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
                     <div class="about_wrapper" style="height: 49px"><h1>
        EMI Calculator</h1>
                    </div>
                    <div class="about-group1">
                      <div class="about-top1">
                      <br/>
                        <table width=90% border=0 cellpadding=0 cellspacing=0 class="t1">
<tr><td align=center ><br/>
<form name=first class="form1" style="height: 331px">
<table class=subheading cellspacing=0 cellpadding=3>
<tr align=center><td class=inner colspan=2><br/><b>Calculate EMI:<br/></b></td></tr>
<tr><td>Loan Amount:</td><td><input name=aa type=text size=15 onkeyup=checnum(this) /></td></tr>
<tr><td>Interest Rates:</td><td><input name=bb type=text size=15 onkeyup=checnum(this) /></td></tr>
<tr><td>Term(Years):</td><td><input name=cc type=text size=15 onkeyup=checnum(this)/></td></tr>
</table>
<br/><input type=button name=ss value=calculate onclick=loan() class=ac /> <br>
<br/>
<table class=subheading cellspacing=0 cellpadding=3>
<tr align=center><td class=inner colspan=2 style="height: 32px"><b>Results:<br></b></td></tr>
<tr><td>Monthly Payment(EMI):</td><td> <input name=r1 type=text readonly /> </td></tr>
<tr><td>Monthly Average Interest:</td><td> <input name=r2 type=text readonly /></td></tr>
<tr><td>Monthly Interest:</td><td> <input name=r3 type=text readonly /><br>&nbsp;</td></tr>
</table>
</form><br/>
</td></tr>
</table>
                                          
   
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

        
        
            