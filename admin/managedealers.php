<?php
include("controller.php");
    $c= new reqres();
    $r=$c->dlr();
    $c->de_update();


  ?>
  
  
  <html>
    <head>
        <title>
            Manage Dealers
        </title>
        
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

        <form action="" method="post">
            <table  class="bac" style="color:#BCC6CC; height: 36%; width: 251px;" align="center"  border="5" >            <caption><h1>Manage Dealers</h1> <br/>
            <h3><a href="dealer.php">Add New Dealer</a> </h3></caption>
                
                <tR>
                    <th>Company Name</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>action</th>
                    <th >delete</th>
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
                            
                            <td><a href="dealer.php?e=<?php echo $g[0];?>">edit</a></td>
                            <td><a href="dealer_delete.php?d=<?php echo $g[0];?>">delete</a></td>
                        </tR>
                    <?php 
                }
                ?>
            </table>
        </form>
        <div>
     <?php
       include("footer.php");
    ?>
  </div>

    </body>
</html>

