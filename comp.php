<?php 
  error_reporting(0);  
  ob_start();

                             include("cnn.php");
    if(isset($_REQUEST['id']))
    {
        $aa=$_REQUEST['id']; 
       $aa1 = explode(",",$aa);

      
      $sel1 = mysql_query("select * from features where fid='$aa1[0]'");   
      $sel2=mysql_fetch_array($sel1);
       $sel2[0];
      $se1 = mysql_query("select * from features where fid='$aa1[1]'");  
       $se2=mysql_fetch_array($se1);
        $se2[0];    
    }
    
?>

<!DOCTYPE HTML>
<html>
<head>
<title>comp</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<style type="text/css">
form,table {
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


</style>
                 
</head>
<body style="color: #BCC6CC" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="header-bg">
    
        <?php include('head.php');?>

        <div class="banner-top">
            <div class="header-bottom">
                 <div class="header_bottom_right_images">
                     <div class="about_wrapper"><h1>
        <u>CARS IN INDIA</u>
        </h1>
                    </div>
                    <div class="about-group">
                      <div class="about-top">
                    <div style="height: auto; width: auto;">
            <form action="" method="post" style="margin-left: 10%;  height: auto; width: auto; margin-top: 3%; " class="form1" >
                <div align="center" class="drp1"><h1><b><u>How To Different Both See Here...</u></b></h1></div>
                <br/>
                <div >
                <h2 style="margin-left: 25%;  " >Car 1 Information</h2></div> <div style="margin-left: 50%; margin-top: -2%;"><h2 style="margin-left: 25%;  ">Car 2 Information</h2></div>
                <div style="">
					<img src="<?php echo $se2["img1"]; ?>" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); height: 20%; margin-top: 3%; margin-left: 25%; margin-right: 20px; margin-top: 20px; margin-bottom: 20px;" width="162">
                 <img src="<?php echo $sel2["img1"]; ?>" alt="<?php echo $sel2["img1"]; ?>" style=" box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);  height: 20%; width: 20%; margin: 20px;"></div>
                <div class="form1"><table  style=" box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border:#BCC6CC;" align="center";>
            <tr><td>Company Name:</td><td><?PHP echo $se2[2]; ?></td><td><?PHP echo $sel2[2]; ?></td>  </tr>
            <tr><td>Model:</td><td><?PHP echo $se2[3]; ?></td><td><?PHP echo $sel2[3]; ?></td></tr>
            <tr><td>Variant:</td><td><?PHP echo $se2[4]; ?></td><td><?PHP echo $sel2[4]; ?></td></tr>
         
            <tr><td>Status:</td><td><?PHP echo $se2[5]; ?></td><td><?PHP echo $sel2[5]; ?></td></tr>
            <tr><td>Price:</td><td><?PHP echo $se2[7]; ?></td><td><?PHP echo $sel2[7]; ?></td></tr>
            <tr><td>Model Type:</td><td><?PHP echo $se2[8]; ?></td><td><?PHP echo $sel2[8]; ?></td></tr>
            <tr><td>Color1:</td><td><?PHP echo $se2[9]; ?></td><td><?PHP echo $sel2[9]; ?></td></tr>
            <tr><td>Color2:</td><td><?PHP echo $se2[10]; ?></td><td><?PHP echo $sel2[10]; ?></td></tr>
            <tr><td>Color3:</td><td><?PHP echo $se2[11]; ?></td><td><?PHP echo $sel2[11]; ?></td></tr>
            <tr><td>Color4:</td><td><?PHP echo $se2[12]; ?></td><td><?PHP echo $sel2[12]; ?></td></tr>
            <tr><td>Color5:</td><td><?PHP echo $se2[13]; ?></td><td><?PHP echo $sel2[13]; ?></td></tr>
            <tr><td>Width:</td><td><?PHP echo $se2[14]; ?></td><td><?PHP echo $sel2[14]; ?></td></tr>
            <tr><td>Height:</td><td><?PHP echo $se2[15]; ?></td><td><?PHP echo $sel2[15]; ?></td></tr>
            <tr><td>Length:</td><td><?PHP echo $se2[16]; ?></td><td><?PHP echo $sel2[16]; ?></td></tr>
            <tr><td>Ground Clearance:</td><td><?PHP echo $se2[17]; ?></td><td><?PHP echo $sel2[17]; ?></td></tr>
            <tr><td>Fuel Type:</td><td><?PHP echo $se2[18]; ?></td><td><?PHP echo $sel2[18]; ?></td></tr>
            <tr><td>Milege City:</td><td><?PHP echo $se2[19]; ?></td><td><?PHP echo $sel2[19]; ?></td></tr>
            <tr><td>Milege Highway:</td> <td><?PHP echo $se2[20]; ?></td><td><?PHP echo $sel2[20]; ?></td></tr>
            <tr><td>Engine Dispiacement:</td><td><?PHP echo $se2[21]; ?></td><td><?PHP echo $sel2[21]; ?></td></tr>
            <tr><td>Fuel tank capacity:</td><td><?PHP echo $se2[22]; ?></td><td><?PHP echo $sel2[22]; ?></td></tr>
            <tr><td>Transmission type:</td><td><?PHP echo $se2[23]; ?></td><td><?PHP echo $sel2[23]; ?></td></tr>
            <tr><td>Engine discription:</td><td><?PHP echo $se2[24]; ?></td><td><?PHP echo $sel2[24]; ?></td></tr>
            <tr><td>Maximum torque:</td><td><?PHP echo $se2[25]; ?></td><td><?PHP echo $sel2[25]; ?></td></tr>
            <tr><td>Value per cylinder:</td><td><?PHP echo $se2[26]; ?></td><td><?PHP echo $sel2[26]; ?></td></tr>
            <tr><td>Maximum power:</td><td><?PHP echo $se2[27]; ?></td><td><?PHP echo $sel2[27]; ?></td></tr>
            <tr><td>Number of cylinder:</td><td><?PHP echo $se2[28]; ?></td><td><?PHP echo $sel2[28]; ?></td></tr>
            <tr><td>Comfort and convences:</td><td><?PHP echo $se2[29]; ?></td><td><?PHP echo $sel2[29]; ?></td></tr>
            <tr><td>Intrior feature:</td><td><?PHP echo $se2[30]; ?></td><td><?PHP echo $sel2[30]; ?></td></tr>
            <tr><td>Exterior feature:</td><td><?PHP echo $se2[31]; ?></td><td><?PHP echo $sel2[31]; ?></td></tr>
            <tr><td>Entertainment:</td><td><?PHP echo $se2[32]; ?></td><td><?PHP echo $sel2[32]; ?></td></tr>
            <tr><td>Safty features:</td><td><?PHP echo $se2[33]; ?></td><td><?PHP echo $sel2[33]; ?></td></tr>
            </table>
            
                           </div>

             </form>
   
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
</div>
</div>
</div>
</div>
</body>
</html>

        
        
            