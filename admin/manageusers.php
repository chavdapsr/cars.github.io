<?php
    ob_start();
    include("controller.php");
    $c= new reqres();  
    $r=$c->usr();
    if(isset($_REQUEST['ac']))
    {
        $aa = explode(",",$_REQUEST['ac']); 


        if($aa[1] == "deactive")
        {           
            mysql_query("update user set status='active' where uid='$aa[0]'")or die(mysql_error());

        }
        else
        {
            mysql_query("update user set status='deactive' where uid='$aa[0]'")or die(mysql_error()); 
        }   
        header("Location:manageusers.php");
    }




?>


<html>
    <head>
        <title>
            Manage Users
        </title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
    </head>
    <body>
        <form action="" method="post">
            <div>
                <?php
                    include("header.php");
                ?>
            </div>

            <div align="center">
                <table align="center"  border="5" style="height: 40%; width: auto;">
                    <caption><h1>Manage Users</h1></caption>
                    <tR>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Pincode</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Username</th>
                        <th>Password</th>



                        <th colspan="2">action</th>
                    </tR>
                    <?php
                        while($g=mysql_fetch_array($r))
                        {
                        ?>
                        <tR>
                            <td><?php echo $g[1];?></td>
                            <td><?php echo $g[2];?></td>
                            <td><?php echo $g[3];?></td>
                            <td><?php echo $g[4];?></td>
                            <td><?php echo $g[5];?></td>
                            <td><?php echo $g[6];?></td>
                            <td><?php echo $g[7];?></td>
                            <td><?php echo $g[8];?></td>
                            <td><?php echo $g[9];?></td>
                            <td><?php echo $g[10];?></td>
                            <td> <a href="manageusers.php?ac=<?php echo $g[0].",".$g[11];?>"><?php echo $g[11];?></a></td> 



                        </tR>
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
        </form>
    </body>
</html>

