<?php
// Turn off error reporting
error_reporting(0);
?>

<?php session_start();?>
   <script type="text/javascript">
            function getv(".textbox")
            {
                //alert("hello");
                var a;
                if(window.XMLHttpRequest)
                {
                    a= new XMLHttpRequest();
                }
                a.onreadystatechange=function()
                {
                    if(a.readyState==4)
                    {
                        document.getElementById("vl").innerHTML=a.responseText;
                    }
                }
                a.open("GET","search.php?e="+str,true);
                a.send();
            }
            
    }
});

            </script>


<div class="header-bg">
    <div class="wrap"> 
        <div class="h-bg">
            <div class="total">
                <div class="header">
                    <div class="box_header_user_menu">
                        <ul class="user_menu"><li class="act first"><a href="index.php"><div class="button-t"><span>Home</span></div>
							</a></li>

							<li class=""><a href="newmenu.php"><div class="button-t"><span>Advanced Search</span></div></a></li>

<?php if(isset($_SESSION['name']))
{	?>	
					<!--<li class=""><a href="#"><div class="button-t"><span>welcome user !!!</span></div></a></li>-->


							<li class="last"><a href="logout.php"><div class="button-t"><span>logout</span></div></a></li></ul>
<?php }
else
{	
?>
					<li class=""><a href="regis.php"><div class="button-t"><span>Create an Account</span></div></a></li>

                        <!--<li class="last"><a href="#"><div class="button-t"><span>On-Road-price</span></div></a></li>-->
							<li class="last"><a href="login.php"><div class="button-t"><span>Log in</span></div></a></li>
							
<?php }?>


                    </div>
                    <div class="header-right">
                                        </div><div class="clear"></div> 
                    <div class="header-bot">
                        <div class="logo">
                            <a href="index.php"><h1 style="font-size: 50px;font-family:fantasy;"><span style="color:#BCC6CC;">Car</span><span style="color:#D54F30;">-Mafia</span></h1></a>
                        </div>
                        <div class="search">
                            <input type="text" class="se" name="s" onkeyup="getv(this.value)"  onblur="if(this.value == '') { this.value = 'Type here..'; }" onfocus="if(this.value == 'Type here..') { this.value = ''; }">
                            <button class="gray-button" ><span>Search</span></button>
          <div id="vl"  style="height:auto; width:10%; margin-top: 1%; margin-left: 88%;  background: white; z-index:1; position: fixed;">
                
                </div>
                       </div>
                    <div class="clear"></div> 
                </div>        
        </div>    
        <div class="menu">     
            <div class="top-nav"> 
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="used.php">Used Cars</a></li>
                        <li><a href="newcars.php">New Cars</a></li> 
                        <li><a href="deal.php">Dealers</a></li>
                        <li><a href="carsm.php">Cars</a></li>
                            <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="clear"></div> 
                </div>
        </div>
