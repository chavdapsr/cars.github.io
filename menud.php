<?php
    include("cnn.php");
    include("head.php"); 
     include ("controller.php");
    $ver= new reg();
    $s=$ver->s_model();
    $s1=$ver->s_model();
    $ver= new reg();

$r=$ver->show_m();
    $a=$_REQUEST['kk'];
   $s1="select * from features where fid='$a'";
    $s=mysql_query($s1);
    
?>
<form action="" method="post" enctype="multipart/form-data">
<?php while( $p=mysql_fetch_array($s))
            {
            ?>
            <div  style="height: auto; width: auto;  margin-right: 80px; margin-top: 5%; margin-left: 80px; " >
            <table  border="1 " style=" box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);" align="center";>
            <tr><td>Company Name:</td><td><?PHP echo $p[2]; ?></td></tr>
            <tr><td>Model:</td><td><?PHP echo $p[3]; ?></td></tr>
            <tr><td>Variant:</td><td><?PHP echo $p[4]; ?></td></tr>
            <tr><td colspan="2"><img src="<?PHP echo $p[6]; ?>" style="height: 20%; width: 20%; margin-left: 40%;"></td></tr>
            <tr><td>Status:</td><td><?PHP echo $p[5]; ?></td></tr>
            <tr><td>Price:</td><td><?PHP echo $p[7]; ?></td></tr>
            <tr><td>Model Type:</td><td><?PHP echo $p[8]; ?></td></tr>
            <tr><td>Color1:</td><td><?PHP echo $p[9]; ?></td></tr>
            <tr><td>Color2:</td><td><?PHP echo $p[10]; ?></td></tr>
            <tr><td>Color3:</td><td><?PHP echo $p[11]; ?></td></tr>
            <tr><td>Color4:</td><td><?PHP echo $p[12]; ?></td></tr>
            <tr><td>Color5:</td><td><?PHP echo $p[13]; ?></td></tr>
            <tr><td>Width:</td><td><?PHP echo $p[14]; ?></td></tr>
            <tr><td>Height:</td><td><?PHP echo $p[15]; ?></td></tr>
            <tr><td>Length:</td><td><?PHP echo $p[16]; ?></td></tr>
            <tr><td>Ground Clearance:</td><td><?PHP echo $p[17]; ?></td></tr>
            <tr><td>Fuel Type:</td><td><?PHP echo $p[18]; ?></td></tr>
            <tr><td>Milege City:</td><td><?PHP echo $p[19]; ?></td></tr>
            <tr><td>Milege Highway:</td> <td><?PHP echo $p[20]; ?></td></tr>
            <tr><td>Engine Dispiacement:</td><td><?PHP echo $p[21]; ?></td></tr>
            <tr><td>Fuel tank capacity:</td><td><?PHP echo $p[22]; ?></td></tr>
            <tr><td>Transmission type:</td><td><?PHP echo $p[23]; ?></td></tr>
            <tr><td>Engine discription:</td><td><?PHP echo $p[24]; ?></td></tr>
            <tr><td>Maximum torque:</td><td><?PHP echo $p[25]; ?></td></tr>
            <tr><td>Value per cylinder:</td><td><?PHP echo $p[26]; ?></td></tr>
            <tr><td>Maximum power:</td><td><?PHP echo $p[27]; ?></td></tr>
            <tr><td>Number of cylinder:</td><td><?PHP echo $p[28]; ?></td></tr>
            <tr><td>Comfort and convences:</td><td><?PHP echo $p[29]; ?></td></tr>
            <tr><td>Intrior feature:</td><td><?PHP echo $p[30]; ?></td></tr>
            <tr><td>Exterior feature:</td><td><?PHP echo $p[31]; ?></td></tr>
            <tr><td>Entertainment:</td><td><?PHP echo $p[32]; ?></td></tr>
            <tr><td>Safty features:</td><td><?PHP echo $p[33]; ?></td></tr>
            </table>
            <?PHP
            }
            ?> 
            </div>
   <div id="templatemo_footer_wrapper">

<div id="templatemo_footer">

    <div class="section_w300">
        
        <h3>Features</h3>
        
        <div class="sub_content">
            <ul class="footer_list">
                <li><a rel="" href="addp.php" target="">Sell Cars</a></li>
                <li><a rel="" href="newmenu.php" target="">Buy New Cars</a></li>
                <li><a rel="" href="sp.php" target="">Buy Used Cars</a></li>
                
               
            </ul>
        </div>
        
    </div>
    
    <div class="section_w300">
        
        <h3>Reviews</h3>
        
        <div class="sub_content">
            <ul class="footer_list">
                <li><a href="review.php">Write Your Review</a></li>
                <li><a href="review.php">See the Reviews</a></li>
               <li><a rel="" href="com.php" target="">Compare Cars</a></li>
                
            </ul>
        </div>
        
    </div>
    
     <div class="section_w300">
        
        <h3>Policies</h3>
        
        <div class="sub_content">
            <ul class="footer_list">
             <li><a rel="" href="delers.php" target="">Find Dealers In your City</a></li>               
                <li><a href="ins1.php">Insurance</a></li>
                <li><a href="ins1.php">Loan</a></li>
               
            </ul>
        </div>
        
    </div>
    
    
    
    <div class="cleaner_h40"></div>

    <center>
        Copyright © 2014 <a href="#">www.dreamcar.com</a> | 
        Designed by <a href="#" rel="nofollow" target="_parent">vipul chitte</a> | 
    
    </center>
    
</div> <!-- end of footer -->
</div>
    
    
    
    </body>
</html>