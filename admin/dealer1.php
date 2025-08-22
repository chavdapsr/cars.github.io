<?php
include("controller.php");
    $c= new reqres();
    $r=$c->dlr();
    $c->de_update();s


  ?>
  
<html>
    <head>
     <title> Dealer</title>

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


<div align="center" style="margin: 50px;">
Add New Dealer
  <form  action="" method="post" style="height: 965px">
  <caption><h1 style="color:#BCC6CC">Manage Dealers</h1> </caption>
            <br>
            <table  class="bac" style="color:#BCC6CC; height: 36%;" align="center"  border="5" width="60%;" >
            
            <h3><a href="dealer.php">Add New Dealer</a> </h3>
                
                <tr>
                    <th style="height: 40px">Company Name</th>
                    <th style="height: 40px">City</th>
                    <th style="height: 40px">Address</th>
                    <th style="height: 40px">Contact No</th>                    
                    <th style="height: 40px">action</th>
                    <th style="height: 40px" >delete</th>
                </tr>
                <?php
                while($g=mysql_fetch_array($r))
                {
                    ?>
                        <tr>
                            <td style="height: 85px"><?php echo $g[1];?></td>
                            <td style="height: 85px"><?php echo $g[2];?></td>
                            <td style="height: 85px"><?php echo $g[3];?></td>
                            <td style="height: 85px"><?php echo $g[4];?></td>
                            
                            <td style="height: 85px"><a href="dealer.php?e=<?php echo $g[0];?>">edit</a></td>
                            <td style="height: 85px"><a href="dealer_delete.php?d=<?php echo $g[0];?>">delete</a></td>
                        </tr>
                    <?php 
                }
                ?>
            </table>
        </form>
  </div>
  <div>
     <?php
    include("footer.php");
     ?>
  
  </div>

</body>
</html>