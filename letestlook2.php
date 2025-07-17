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
<title>letlooks</title>
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
        <u>CARS IN INDIA</u>
        </h1>
                    </div>
                    <div class="about-group1">
                      <div class="about-top1">
                      <br/>
                        <form name=first class="form1">
<table>
<tr align=center><td class=inner colspan=2><img src="images/nissan.jpg" height="220" width="155" /></td></tr>
<tr class="form1" align=center><td class=inner colspan=2 ><b>Technical Characteristics of Martin DB9
Technical Characteristics of 2007 Martin DB9 (JP) produced by Astone martin (JP).

Model Specifications:</b><hr/></td></tr>
<tr><td style="width: 118px">Body Type</td><td>Drop-head coupe (cabriolet; convertible) 2 doors
</td></tr>
<tr><td style="width: 118px">Weight</td><td>1250 Kg</td></tr>
<tr><td style="width: 118px">Length</td><td>4140 mm</td></tr>
<tr><td style="width: 118px">Height</td><td>1290 mm</td></tr>
<tr><td style="width: 118px">Wheelbase</td><td>2430 mm</td></tr>
<tr><td style="width: 118px">Front Track</td><td>	1472 mm</td></tr>
<tr><td style="width: 118px">Rear Track	</td><td>1542 mm</td></tr>
<tr><td style="width: 118px">Ground Clearance</td><td>	130mm</td></tr>
<tr><td style="width: 118px">Fuel Capacity	</td><td>72ltr</td></tr>
<tr><td style="width: 118px">Engine location	</td><td>front</td></tr>
<tr><td style="width: 118px">Engine alignment	</td><td>longitudinal</td></tr>
<tr><td style="width: 118px">Drive Wheels	</td><td>Rear wheel drive</td></tr>
<tr><td style="width: 118px">Steering	</td><td>rack & pinion PAS</td></tr>
<tr><td style="width: 118px">Fuel Supply </td><td>System	SMPFI</td></tr>
<tr><td style="width: 118px">Max Power</td><td>	336HP (247 kW) @ 7000 rpm</td></tr>
<tr><td style="width: 118px">Max Torque	</td><td>366Nm @ 5200 rpm</td></tr>
<tr><td style="width: 118px">CO2 Emissions</td><td>	n/a</td></tr>
<tr><td style="width: 118px">Engine Coolant	</td><td>water</td></tr>
<tr><td style="width: 118px">Displacement</td><td>	2157 cc</td></tr>
<tr><td style="width: 118px">Bore	</td><td>83 mm</td></tr>
<tr><td style="width: 118px">Stroke	</td><td>93 mm</td></tr>
<tr><td style="width: 118px">Cam Design	</td><td>DOHC - Double Overhead Camshaft (per bank)</td></tr>
<tr><td style="width: 118px">Cylinders	</td><td>n/a</td></tr>
<tr><td style="width: 118px">Valves per cylinder</td><td>	4</td></tr>
<tr><td style="width: 118px">Total Valves	</td><td>24</td></tr>
<tr><td style="width: 118px">Compression Ratio	</td><td>11:1</td></tr>
<tr><td style="width: 118px">Aspiration	</td><td>normal</td></tr>
<tr><td style="width: 118px">Front Brakes	</td><td>VeDi</td></tr>
<tr><td style="width: 118px">Rear Brakes	</td><td>VeDi-S-ABS</td></tr>
<tr><td style="width: 118px">Standard Wheels	</td><td>8.0 x 18 / 9.0 x 18</td></tr>
<tr><td style="width: 118px">Standard Tyres	</td><td>Bridgestone Potenza RE050A P225/50 R 18 / Bridgestone Potenza RE050A P245/45 R 18</td></tr>
<tr><td style="width: 118px">Suspension Front	</td><td>I.DW.ARB.</td></tr>
<tr><td style="width: 118px">Suspension Rear	</td><td>I.MultiLi.ARB.</td></tr>
<tr><td style="width: 118px">Transmission	</td><td>7 speed automatic</td></tr>
<tr><td style="width: 118px">Number of gears	</td><td>7</td></tr>
<tr><td style="width: 118px">Acceleration 0-100 Km/h	</td><td>n/a</td></tr>
<tr><td style="width: 118px">Acceleration 80-120 Km/h	</td><td>n/a</td></tr>
<tr><td style="width: 118px">Top Speed	</td><td>n/a</td></tr>
<tr><td style="width: 118px">City	</td><td>n/a</td></tr>
<tr><td style="width: 118px">Road	</td><td>n/a</td></tr>
<tr><td style="width: 118px">Mixt	</td><td>n/a</td></tr>
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

        
        
            