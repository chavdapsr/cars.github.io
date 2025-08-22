
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
<title>news & reviews</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
                  <style type="text/css">
                  .
                  .divi{
	font-size:small;
	text-decoration:none;
}
.news1{
	border: 1px solid rgba(255,255,255,.3);
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
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="header-bg">
    
        <?php include('head.php');?>

        <div class="banner-top">
            <div class="header-bottom">
                 <div class="header_bottom_right_images">
                     <div class="about_wrapper"><h1>
        News & reviews</h1>
                    </div>
                    <div class="about-group1">
                      <div class="about-top1">
                      <br/>
                      <div class="news1" style="width: 909px; height: 358px;">
										<a href="index.php"><h1 style="font-size: 35px;font-family:fantasy;"><span style="color:#BCC6CC;">news </span><span style="color:#D54F30;">& reviews</span></h1></a><hr/>
                      					
                                          <div class="divi">
                                           <br /><br />
                                            <marquee onmouseover='this.stop();' onmouseout='this.start();' direction="up" height="180"  scrollamount="3" >
                                             <a style="color:" href="newreviews.php"><h1 style="font-size: 30px;font-family:fantasy;"><span style="color:#BCC6CC;">Car</span> <span style="color:#D54F30;">-Mafia</span></h1>
                                             </a>
                                           <br /><hr/>

                                            <h1 style="font-size: 20px;"><span style="color:#D54F30;">Maruti Suzuki Alto K10 Price by Versions<br/>
                                               </span> <span style="color:#BCC6CC;">Maruti Suzuki Alto K10 comes in following 6 versions with 1 engine and 2 transmission and 2 fuel options. Click on a Alto K10 version name to know on-road price in your city, specifications and features.</span></h1>
					                             <a style="color:" href="newreviews.php">[Read more...]</a>
			
                                              <br /><hr/><br />
 
                                               <h1 style="font-size: 20px;"><span style="color:#D54F30;">Tata Bolt Price by Versions<br/>
                                                   </span> <span style="color:#BCC6CC;">Tata Bolt comes in following 8 versions with 2 engine and 1 transmission and 2 fuel options. Click on a Bolt version name to know on-road price in your city, specifications and features.</span></h1>
                                                     <a style="color:" href="newreviews.php">[Read more...]</a>

                                                    <br/><hr/>

                                                <h1 style="font-size: 20px;"><span style="color:#D54F30;">Honda Amaze Price by Versions<br/>
                                                    </span> <span style="color:#BCC6CC;">Honda Amaze comes in following 15 versions with 2 engine and 2 transmission and 3 fuel options. Click on a Amaze version name to know on-road price in your city, specifications and features.</span></h1>
                                                       <a style="color:" href="newreviews.php">[Read more...]</a>

                                                 <br /><hr/><br />

                                                 <h1 style="font-size: 20px;"><span style="color:#D54F30;">Maruti Suzuki Ritz Price by Versions<br/>
                                                   </span> <span style="color:#BCC6CC;">Maruti Suzuki Ritz comes in following 9 versions with 2 engine and 2 transmission and 2 fuel options. Click on a Ritz version name to know on-road price in your city, specifications and features.</span></h1>
                                                     <a style="color:#" href="newreviews.php" >[Read more...]</a>
                                                   <br /><hr/><br />

                                            <h1 style="font-size: 20px;"><span style="color:#D54F30;">Hyundai Elite i20 Price by Versions<br/>
                                                 </span> <span style="color:#BCC6CC;">Hyundai Elite i20 comes in following 10 versions with 2 engine and 1 transmission and 2 fuel options. Click on a Elite i20 version name to know on-road price in your city, specifications and features.</span></h1>
                                                   <a style="color:" href="newreviews.php" >[Read more...]</a>

                                            <br /><br /><hr/></marquee>
                  </div>
     </div>                                            
   
    </div>  <br/> <br/><br/> <br/>

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

        
 