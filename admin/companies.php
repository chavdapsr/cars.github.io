<?php
include("controller.php");
    $c= new reqres();
    $r=$c->user_home();


  ?>
<html>
    <head>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">
    </head>

<body>
    <div>
        <?php
            include("header.php");
        ?>
    </div>


    <div align="center" style="margin: 50px;">
    <caption><h1 style="color:#BCC6CC">Manage Companies</h1></caption>
            <br/>
        <table class="bac1" style="color:#BCC6CC" height="100%" width="50%" align="center"  border="5" >
            
            <tr>

                <th style="width: 99px">Company</th>
                <th style="width: 149px">Logo</th>

                <th style="width: 34px">action</th>
                <th style="width: 39px">delete</th>
            </tr>
            <?php
                while($g=mysql_fetch_array($r))
                {
                ?>
                <tr>
                    <td style="width: 99px"><?php echo $g[1];?></td>

                    <td style="width: 149px"><center><img src="<?php echo $g[2];?>" height="80px" width="150px" alt=""></center></td>
                    <td style="width: 34px"><a href="addcars.php?e=<?php echo $g[0];?>">edit</a></td>
                    <td style="width: 39px"><a href="delete_brand.php?d=<?php echo $g[0];?>">delete</a></td>
                       
                </tr>
                <?php 
                }
            ?>
        </table>
    </div>
    <div>
        <?php
            include("footer.php");
        ?>

    </div>

</body>

</html>
