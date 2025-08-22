<?php 
 error_reporting(0);
 include("cnn.php"); 
$s=mysql_query ("select * from dealers");
 
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Dealer</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
                                                        <script type="text/javascript">
         function de(str)
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
                d.open("GET","back.php?dd="+str,true);
                d.send();
            }

      </script>   
      <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); 
        -ms-transform: scale(1,1); 
        -moz-transform: scale(1,1);
         -webkit-transform: scale(1,1); 
         transform: scale(1,1);
          -o-transition: all 0.2s ease-in-out; 
          -ms-transition: all 0.2s ease-in-out; 
          -moz-transition: all 0.2s ease-in-out; 
          -webkit-transition: all 0.2s ease-in-out; 
          transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999;
        -o-transform: scale(1.03,1.03); 
        -ms-transform: scale(1.03,1.03);
        -moz-transform: scale(1.03,1.03);
        -webkit-transform: scale(1.03,1.03);
        transform: scale(1.03,1.03);
    }
.photos {
        width: 945px;
	    height: 400px;
	    margin: 100px auto;
	    position:relative;
	}
	.photos > div {
	    background-color: rgba(128, 128, 128, 0.5);
	    border: 2px solid #444;
	    float: left;
	    height: 150px;
	    margin: 5px;
	    overflow: hidden;
	    position: relative;
	    width: 300px;
	    z-index: 1;
	 
	    -webkit-border-radius: 10px;
	    -moz-border-radius: 10px;
	    -ms-border-radius: 10px;
	    	    -o-border-radius: 10px;
	    border-radius: 10px;
	     
	    -webkit-transform:scale(1.0);
	    -moz-transform:scale(1.0);
	    -ms-transform:scale(1.0);
	    -o-transform:scale(1.0);
	    transform:scale(1.0);
	 
	    -webkit-transition-duration: 0.5s;
	    -moz-transition-duration: 0.5s;
	    -ms-transition-duration: 0.5s;
	    -o-transition-duration: 0.5s;
	    transition-duration: 0.5s;
	}
	.photos > div img{
	    width: 100%;
	}
	.photos > div:hover{
	    z-index: 10;
	 
	    -webkit-transform:scale(2.0);
	    -moz-transform:scale(2.0);
	    -ms-transform:scale(2.0);
	    -o-transform:scale(2.0);
	    transform:scale(2.0);
	}
	.photos > div div {
    background: url(../images/hover.gif) repeat scroll 0 0 transparent;
	    cursor: pointer;
	    height: 100%;
	    left: 0;
	    opacity: 0.5;
	    position: absolute;
	    top: 0;
	    width: 100%;
	    z-index: 15;
	 
	    -webkit-transition-duration: 0.5s;
	    -moz-transition-duration: 0.5s;
	    -ms-transition-duration: 0.5s;
	    -o-transition-duration: 0.5s;
	    transition-duration: 0.5s;
	}
	.photos > div:nth-child(1):hover div {
	    height: 0%;
	}
	 
	.photos > div:nth-child(2):hover div {
    height: 0%;
	    margin-top: 100px;
	}
	.photos > div:nth-child(3):hover div {
	    width: 0%;
	}
	.photos > div:nth-child(4):hover div {
	    margin-left: 300px;
	    width: 0%;
	}
	.photos > div:nth-child(5):hover div {
	    height: 0%;
	    margin-left: 150px;
	    margin-top: 50px;
	    width: 0%;
	}
	.photos > div:nth-child(6):hover div {
	    margin-left: 150px;
	    width: 0%;
	}
	.photos > div:nth-child(7):hover div {
	    height: 0%;
	    margin-left: 150px;
	    margin-top: 50px;
	    width: 0%;
	 
	    -webkit-transform: rotateX(360deg);
	    -moz-transform: rotate(360deg);
	    -ms-transform: rotate(360deg);
	    -o-transform: rotate(-360deg);
	    transform: rotate(-360deg);
	}
	.photos > div:nth-child(8):hover div {
	    height: 0%;
	    margin-left: 150px;
	    margin-top: 50px;
	    width: 0%;
	 
	    -webkit-transform: rotateZ(600deg);
	    -moz-transform: rotateZ(600deg);
	    -ms-transform: rotateZ(600deg);
	    -o-transform: rotateZ(600deg);
	    transform: rotateZ(600deg);
	}
	.photos > div.pair div {
	    width: 50%;
	}
	.photos > div.pair div:nth-child(odd) {
	    margin-left: 150px;
	}
	.photos > div.pair:hover div {
	    width: 0%;
	}
	.photos > div.pair:hover div:nth-child(odd) {
    margin-left: 300px;
	}

</style>

</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox" ></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
<body style="color: #BCC6CC; oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="header-bg" style="height: 1332px">
    
        <?php include('head.php');?>

        <div class="banner-top">
            <div class="header-bottom">
                 <div class="header_bottom_right_images" style="height: 648px">
                     <div class="about_wrapper"><h1>
        Cars Dealers By Brand Types 
        </h1>
                    </div>
                    <div class="about-group">
                      <div class="about-top">    
  
  
  
  
    <div>
            <div align="center" class="drp1" style="margin-top:5%; color: #BCC6CC; ">
            <h1 style="font-size:20px;font-family:fantasy;"><span style="color:#BCC6CC;">Find a </span><span style="color:#D54F30;"> Dealers</span></h1></div>
    
        	<br><br>
 
        <select id="sbt" style="float: left; height: 5%; width: 25%; font-size: 20px;padding:0;margin: 5%; border: inset;  margin-top: -3%; margin-left: 40%;" onchange="de(this.value)" >
            <option>Select Brand</option>
           <?php while( $p=mysql_fetch_array($s))
            {
            ?>
            <option value="<?php echo $p[0];?>"><?PHP echo $p[1]; ?></option>
            <?PHP
            }
            ?>         
        </select><br>&nbsp;</div>
            <div  id="vll" style="height:auto; width: auto;margin: 10%; ">
            </div>
            
 <div  id="vll" style="height:auto; width: auto; margin-top: 10%; ">
 </div>
    </div>
                        <div class="grid images_3_of_1">                                                                                                                                                                                                             
                        </div><div class="clear"></div> 
                    </div>
           </div> <hr/>
                		 <br><br><br><br>
        
                </div>
        <div class="clear"><br></div>
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
    </div></div>
</div>
</body>
</html>

        
        
            