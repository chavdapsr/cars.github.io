<?php

?>
<?php
    
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
<html>
    <head>
        <title>comd</title>
         <link rel="stylesheet" type="text/css" href="new.css">
    </head>
    <body style="color: #BCC6CC" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <?php include('head.php');?>
        <div style="height: auto; width: auto;">
            <form action="" method="post" style="margin-left: 10%;  height: auto; width: auto; margin-top: 3%;  " >
                <div align="center" class="drp1"><h1><b><u>How To Different Both 
					Cars</u></b></h1></div>
                <div >
                <h2 style="margin-left: 25%;  " >Car 1 Information</h2></div> <div style="margin-left: 50%; margin-top: -2%;"><h2>Car 2 Information</h2></div>
                <div style=""><img src="<?php echo $se2["img1"]; ?>" style="box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); height: 20%; width: 20%; margin-top: 3%; margin: 20px; margin-left: 25%;">
                 <img src="<?php echo $sel2["img1"]; ?>" alt="<?php echo $sel2["img1"]; ?>" style=" box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);  height: 20%; width: 20%; margin: 20px;"></div>
                <div><table  border="1 " style=" box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);" align="center";>
            <tr><td>Company Name:</td><td><?PHP echo $se2[2]; ?></td><td><?PHP echo $sel2[2]; ?></td>  </tr>
            <tr><td>Model:</td><td><?PHP echo $se2[3]; ?></td><td><?PHP echo $sel2[3]; ?></td></tr>
            <tr><td>Variant:</td><td><?PHP echo $se2[4]; ?></td><td><?PHP echo $sel2[4]; ?></td></tr>
            <tr><td></td><td ><img src="<?PHP echo $se2[6]; ?>" style="height: 20%; width: 20%; margin-left: 40%;"></td><td ><img src="<?PHP echo $sel2[6]; ?>" style="height: 20%; width: 20%; margin-left: 40%;"></td></tr>
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
        <div id="templatemo_footer_wrapper">

         

            </div> 
        </div>    
        </body>
</html>
