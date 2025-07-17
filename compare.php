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
<title>Compare cars</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
                  <style type="text/css">
                  
                  .form1 {
    margin-left:auto;
    margin-right:auto;
    
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
        Compare Cars</h1>
                    </div>
                    <div class="about-group1">
                      <div class="about-top1">
                      <br/>
                      <form action="" method="post" class="form1">    
            <div style="margin-left: 15%;">
                 <select style="font-size: 20px;  border: inset; margin: 4%; width: 25%;" id="company" onchange="gets3(this.value)">
            <option>Select Brand</option>
             <?php while( $p=mysql_fetch_array($sel))

{
?>
 <option value="<?php echo $p[0]; ?>"><?PHP echo $p[1]; ?></option>
                    <?PHP
                    }
            ?> 
            
        </select>
        </div>
         <div style="margin-left: 60%; margin-top: -8%;">
                 <select style="font-size: 20px;  border: inset; margin-top: -10%; margin: 4%;  width: 48%; "id="company" onchange="gets4(this.value)" >
            <option>Select Brand</option>
             <?php while( $p11=mysql_fetch_array($sel1))

{
?>
<option value="<?php echo $p11[0]; ?>"><?PHP echo $p11[1]; ?></option>
                    <?PHP
                    }     
                    ?> 
            
        </select>
        </div>
        <div style="margin-left: 15%;">
        <select style="font-size: 20px; border: inset; margin: 2%; margin-left: 4%;  width: 25%; "  id="sbt" name="sbt" >
            <option>Select Model</option>
            <option>--</option>
        </select>
        </div>
            
           <div style="margin-left: 60%; margin-top: -5%;">
        <select style="font-size: 20px; border: inset; margin: 2%; margin-left: 4%; width: 48%; "  id="sbt1" name="sbt1">
            <option>Select Model</option>
            <option>--</option>
        </select>
        </div>
            
            <div align="center">
            <input type="submit" name="com" value="Compare " title="Here Click and Compare Two Car." style=" width: 20%; margin-top: 3%; " class="ac">
            </div>
        
        
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

        
        
            