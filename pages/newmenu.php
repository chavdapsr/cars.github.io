<?php 
  error_reporting(0);  
  ob_start();
      include("cnn.php");  
  $sel=mysql_query ("select * from company_list");          
?>

<!DOCTYPE HTML>
<html>
<head>
<title>advanced search</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<style type="text/css">
.div#1{
		border-style:groove;
		border-color:#BCC6CC;
}

</style>
         <script type="text/javascript">
          function revi(str)
            {
               var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?re="+str,true);
                d.send();
            }

         
            function he(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?vv="+str,true);
                d.send();
            }
             function he1(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v1="+str,true);
                d.send();
            }
              function he2(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v2="+str,true);
                d.send();
            }
             function he3(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v3="+str,true);
                d.send();
            }
            function he31(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v311="+str,true);
                d.send();
            }
             function he32(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v32="+str,true);
                d.send();
            }
              function he33(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v331="+str,true);
                d.send();
            }
             function he34(str)
            {
                //alert(str);
                var d;
                if(window.XMLHttpRequest)
                {
                    d= new XMLHttpRequest();
                    
                }
                d.onreadystatechange=function()
                {
                    if(d.readyState==4)
                    {
                        document.getElementById("vll").innerHTML=d.responseText;
                    }
                }
                d.open("GET","back.php?v341="+str,true);
                d.send();
            }
        
              function gets1(str)
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
                d.open("GET","back.php?gett22="+str,true);
                d.send();
            }
            
          
        </script>   
</head>
<body style="color: #BCC6CC" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="header-bg">
    
        <?php include('head.php');?>

      
        <div class="banner-top">
            <div class="header-bottom">
                 <div class="header_bottom_right_images">
                     <div class="about_wrapper"><h1>
        Advanced search By Brand and Model Name
                </h1>
                    </div>
                    <div class="about-group">
                      <div class="about-top">    
                                              <div class="drp1">
        
        
        <select style="float: left; height: 23%; width: 30%; font-size: 20px; padding:0;margin: 5%; border: inset;" id="company" onchange="gets1(this.value)">
            <option>Select Brand</option>
            <?php while( $p=mysql_fetch_array($sel))
            {
            ?>
            <option value="<?php echo $p[0]; ?>"><?PHP echo $p[1]; ?></option>
            <?PHP
            }
            ?> 
            
 </select>
 
    <select style="float: left; height: 25%; width: 30%; font-size: 20px;padding:0;margin: 5%; border: inset; " id="sbt" onchange="revi(this.value)" >
            <option>Select Model</option>
            <option>--</option>
        </select><br><br>
        </div>
             
 <div  id="vll" style="height:auto; width: auto; margin-top: 10%; ">
 </div>
                                    
        
    
                        
    </div>
                        <br><br>
        
    
                        
                        <div class="grid images_3_of_1" style="width: 50%">                                                                                                                                                                                                             
                        </div><div class="clear"></div> 
                    </div>
           </div>
        </div>
        <hr/>
    
        <div class="header-para" style="width: 26%">
                <div class="categories">
                        <div class="list-categories">
                            </div>
                </div>
              
                <div class="about_wrapper1">
                    <h1 ><span style="color:#BCC6CC;">Advanced </span><span style="color:#D54F30;">Search</span></h1> </div>
                                   <div class="d1">
        <div class="d11">
        <hr/>
           <caption style=""><h2 style="text-color: #cccccc ">By Price</h2><hr/><p>
			&nbsp;</p></caption>
           <table>
           <tr><td><input type="radio"  name="g" value="500000 and 800000" onclick="he(this.value); ">500000-800000</td></tr> 
             <tr><td> <input type="radio" value="810000 and 1000000" onclick="he(this.value);" name="g">810000-1000000</td></tr>
             <tr><td><input type="radio" value="1100000 and 3000000" onclick="he(this.value);" name="g">1100000-3000000</td></tr>
             <tr><td><input type="radio" value="31000000 and 50000000" onclick="he(this.value);" name="g">31000000-50000000</td></tr>
            </table>
            <p>&nbsp;</p>
            <hr/>
             <caption><h2 style="text-color: #cccccc ">By Fuel Type</h2><hr/><p>
			&nbsp;</p></caption>
             <table>
                <tr><td><input type="radio" value="Diesel" name="g" onclick="he1(this.value);" title="Select Diesel Type Car Click Here" >Diesel</td></tr> 
                 <tr><td> <input type="radio" value="Patrol" name="g" onclick="he1(this.value);" title="Select Patrol Type Car Click Here">Petrol</td></tr>
             </table>
             <p>&nbsp;</p>
             <hr/>
              <caption><h2 style="text-color: #cccccc ">By Color</h2><hr/><p>&nbsp;</p></caption>
             <table>
                <tr><td><input type="radio" value="Gray" name="g"  onclick="he3(this.value);" title="Select Grey Car Click Here">Gray</td></tr> 
                 <tr><td> <input type="radio" value="White" name="g" onclick="he31(this.value);" title="Select White Car Click Here">White</td></tr>
                 <tr><td><input type="radio" value="Black" name="g" onclick="he32(this.value);" title="Select Red Car Click Here">Black</td></tr> 
                 <tr><td> <input type="radio" value="Silver" name="g" onclick="he33(this.value);" title="Select Black Car Click Here">Silver</td></tr>
                  <tr><td> <input type="radio" value="Other" name="g" onclick="he34(this.value);" title="Select Silver Car Click Here">Other</td></tr>
             </table>
             <p>&nbsp;</p>
           <hr/>
            <caption><h2 style="text-color: #cccccc ">By Body type</h2><hr/><p>&nbsp;</p></caption>
             <table>
                <tr><td><input type="radio" value="Hatchback" name="g" title="Select Hatchback Body Type" onclick="he2(this.value);">Hatchback</td></tr> 
                 <tr><td> <input type="radio" value="Sedan" name="g" title="Select Sedan Body Type" onclick="he2(this.value);">Sedan</td></tr>
                 <tr><td><input type="radio" value="Suv" name="g" title="Select Suv Body Type" onclick="he2(this.value);">Suv</td></tr> 
                 <tr><td><input type="radio" value="Muv" name="g" title="Select Muv Body Type" onclick="he2(this.value);">Muv</td></tr> 
                  <tr><td><input type="radio" value="Super Luxury" name="g" title="Select Super-luxury Body Type" onclick="he2(this.value);">Super-Luxury</td></tr> 
             </table>
           
                
             <p>&nbsp;</p>
        </div>
    </div>
   
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
</body>
</html>

        
        
            