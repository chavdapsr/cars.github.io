<?php 
        mysql_connect("localhost","root","");
        mysql_select_db("carmafia"); 

        $sel=mysql_query("select count(*) from dealers") or die(mysql_error());
        $p=mysql_fetch_array($sel);
        $sel1=mysql_query("select count(*) from features");
          $p1=mysql_fetch_array($sel1);                     
        $sel2=mysql_query("select count(*) from user ") ;
          $p2=mysql_fetch_array($sel2);                     
        $sel3=mysql_query("select count(*) from add_post")  ;
          $p3=mysql_fetch_array($sel3);                     
                                      

?>


<html>
    <head>

        <title>Admin</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">
        <!--[if IE]>
        <link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
        <![endif]-->

    	<style type="text/css">
		</style>

    </head>
    <body>

        <div>
            <?php
                include("header.php");
            ?>

        </div>

        <!-- start content-outer -->
        <div id="content-outer">
            <!-- start content -->
            <div id="content" style="height: 400px">


                <td>

                <!--  start related-activities -->
                <div id="related-activities">

                    <!--  start related-act-top -->
                    <div id="related-act-top">
                                            </div>
                    <!-- end related-act-top -->

                    <!--  start related-act-bottom -->
                    <div id="related-act-bottom">

                        <!--  start related-act-inner -->
                        <div id="related-act-inner">

                            <div class="left"></div>
                            <div class="right">
                                <h2 style="color:#BCC6CC">Total New Cars (<?php echo $p1[0];?>)</h2>


                            </div>

                            <div class="left"></div>
                            <div class="right">
                                <h2 style="color:#BCC6CC">Total Used Cars(<?php echo $p3[0];?>)</h2>


                            </div>

                            <div class="left"></div>
                            <div class="right">
                                <h2 style="color:#BCC6CC">Total Users(<?php echo $p2[0];?>)</h2>


                            </div>

                            <div class="left"></div>
                            <div class="right">
                                <h2 style="color:#BCC6CC">Dealers (<?php echo $p[0];?>)</h2>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <!-- end related-act-inner -->
                    <div class="clear"></div>

                </div>
                <!-- end related-act-bottom -->

            </div>
            <!-- end related-activities -->

                        
          </div>
        

        <div class="clear">&nbsp;</div>

        
        <!--  end content -->
        <div class="clear">&nbsp;</div>
        
        <!--  end content-outer -->



        <div class="clear">&nbsp;</div>

        <!-- start footer -->         
        <div id="footer">
            <!--  start footer-left -->
            <div id="footer-left">
                &nbsp;<span style="color:#BCC6CC">Developed by Hk & Psr | | </span> <a href="http://touchess.in"><span style="color:#D54F30;"> All rights Reserved by Touchess.com</span></a></div>
            <!--  end footer-left -->
            <div class="clear">&nbsp;</div>
        </div>
        <!-- end footer -->

    </body>
    
</html>