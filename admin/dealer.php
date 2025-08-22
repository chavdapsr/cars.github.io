<?php
    include("controller.php");
    $p= new reqres();
    $p->deal();

    $r=$p->dealer_edit();

    $p->de_update();
?>
<html>
    <head>
        <title>Add New Dealer</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">
    <style type="text/css">
	</style>

    </head>

    <body>
    
      <div>
            <?php
                include("header.php");
            ?>
        </div>
        <form action="" method="post" >
      
       <div class="" align="center" style="margin: 50px;"> <caption><h1 align="center" style="color:#BCC6CC">Add New Dealer</h1></caption>
        <table  class="bac" style="color:#BCC6CC; height: 36%; width: 251px;" align="center"  border="5" >  
                  <tr>


            <tr>
                <td>company name </td>
                <td><input class="bac" type="text" value="<?php echo $r[1];?>" size="30" name="name" required="required"></td>
            </tr>

            <tr>
                <td>city</td>
                <td><input class="bac" type="text" value="<?php echo $r[2];?>" size="30" name="city" required="required"></td>
            </tr>

            <tr>
                <td>address </td>
                <td><input  class="bac" type="text" value="<?php echo $r[3];?>" size="30" name="add" required="required"></td>
            </tr>

            <tr>
                <td>contact </td>
                <td><input class="bac"type="text" value="<?php echo $r[4];?>" size="30" name="cn" required="required"></td>
            </tr>


            <tr>
                <td>
                    <?php
                        if(isset($_REQUEST['e']))
                        {
                        ?>
                        <input class="bac"type="submit" name="u" value="update">
                        <?php 
                        }
                        else
                        {

                        ?>
                        <input class="bac"type="submit" name="sub" value="submit">
                        <?php 
                        }
                    ?>
                </td>
            </tr>

        </table>
        </div>
        
        <div>
            
            
        
        </div>
        </form>
           <?php
                include("footer.php");
            ?>
    </body>
</html>