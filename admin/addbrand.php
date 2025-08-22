<?php
    include("controller.php");
    $c= new reqres(); 
    $c->comp();
    $r=$c->user_edit();
    $c->user_update();



?>
<html>
    <head>
        <title>
            insert new company
        </title>
        
         <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">    
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <caption><h1 style="color:#BCC6CC" align="center">Add New Company</h1></caption>
            <table class="bac" style="color:#BCC6CC" align="center" border="5" >
                <tr>
                    <td style="margin: 10px;">Company Name</td>
                    <td><input style="margin: 10px;" type="text"  class="inp-form"  value="<?php echo $r[1];?>" size="30" name="com" required="required"></td>
                </tr>


                <tr>
                    <td style="margin: 10px;">Logo</td>


                    <td><input style="margin: 10px;" type="file" name="log" required="required">
                        <?php
                            if(isset($_REQUEST['e']))
                            {
                            ?>

                            <img src="<?php echo $r[2];?>" height="50px" width="40px" alt="">
                            <?php 
                            }
                        ?>

                    </td>
                </tr>

                <tr>

                    <td>
                        <?php
                            if(isset($_REQUEST['e']))
                            {
                            ?>
                            <input class="bac" style="margin: 10px;" type="submit" align="middle" name="u"  value="update">
                            <?php 
                            }
                            else
                            {

                            ?>
                            <input class="bac" style="margin: 10px; width: 94px; height: 28px;" type="submit" align="middle" name="sub" class="gray-button" value="submit">
                            <?php 
                            }
                        ?>
                    </td>


                </tr>

            </table>

        </form>
    </body>
</html>      
 
