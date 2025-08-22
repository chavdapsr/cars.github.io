<?php 
  error_reporting(0);  
  ob_start();
      include("cnn.php");  
  $sel=mysql_query ("select * from company_list");          
?>

<!DOCTYPE HTML>
<html>
<head>
<title>New Cars</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<style type="text/css">
.div#1{
		border-style:groove;
		border-color:#BCC6CC;
}
.button{
	background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;
    
}
.button:hover{
	background: transparent;
    -ms-filter: "progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff)"; 
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#77ffffff, endColorstr=#77ffffff); 
    zoom: 1;

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
<body style="color: #BCC6CC;  h oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="header-bg">
    
        <?php include('head.php');?>

      
        <div class="banner-top">
            <div class="header-bottom">
        </div>
        <hr/>
    <div style="height: 740px; width: 95%%">
    
    <div class="content-wrapper">		  
						<div class="content-top">
							 <div class="text"> 	
								<div class="grid_1_of_3 images_1_of_3">
									<div class="grid_1">
										<a href="single.html"><img src="images/skodayeti.png" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">Skoda yeti</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">2022000-2134000 lac</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="emicalculator.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>EMI</span></button></a>
														</div>
														<a href="videos.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Videos</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
							</div>
									<div class="grid_1_of_3 images_1_of_3">
										  <div class="grid_1">
										<a href="single.html"><img src="images/bmwx5.png" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">BMW x5</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">6890000-7090000 lac</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="emicalculator.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>EMI</span></button></a>
														</div>
														<a href="videos.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Videos</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
									</div>
									<div class="grid_1_of_3 images_1_of_3">
										  <div class="grid_1">
										<a href="single.html"><img src="images/auid.png" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">Audi a3</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">2420000-3421000 lac</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="emicalculator.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>EMI</span></button></a>
														</div>
														<a href="videos.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Videos</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
									</div><div class="clear"></div>
								</div>
								</div>
								</div>
								<div class="content-wrapper">		  
						<div class="content-top">
							 <div class="text" style="height: 420px"> 	
								<div class="grid_1_of_3 images_1_of_3">
									<div class="grid_1">
										<a href="single.html"><img src="images/figo01.png" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">ford fiat</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">400000-621000 lac</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="emicalculator.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>EMI</span></button></a>
														</div>
														<a href="videos.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Videos</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
							</div>
									<div class="grid_1_of_3 images_1_of_3" style="height: 373px">
										  <div class="grid_1">
										<a href="single.html"><img src="images/k10.png" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">Chevrolet spark</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">300000-411000 lac</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="emicalculator.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>EMI</span></button></a>
														</div>
														<a href="videos.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Videos</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
									</div>
									<div class="grid_1_of_3 images_1_of_3">
										  <div class="grid_1">
										<a href="single.html"><img src="images/spark.png" title="continue reading" alt=""></a>
											<div class="grid_desc">
												<p class="title">alto k10</p>
												
													 <div class="price" style="height: 19px;">
													 	 <span class="reducedfrom" style="color:#BCC6CC;">314000-395000 lac</span>
								        				<span class="actual"></span>
													</div>
													<div class="cart-button">
														<div class="cart">
															<a href="emicalculator.php" style="color:#BCC6CC;"><button class="ac" style="width:100px"><span>EMI</span></button></a>
														</div>
														<a href="videos.php" style="color:#BCC6CC;"><button class="ac" style="width:80px"><span>Videos</span></button></a>
													<div class="clear"></div>
												</div>
											</div>
								</div><div class="clear"></div>
									</div><div class="clear"></div>
								</div>

						</div>
						</div>
						</div>
						
    
    </div>
        <div class="header-para" style="width: 26%">
                 
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

</body>
</html>

        
        
            