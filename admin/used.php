<?php
include("controller.php");
    $c= new reqres();
    $r=$c->used();
    $c->user_update();



  ?>
  
<html>
    <head>
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">
    </head>
</html>
<body>
<div>
        <?php
    include("header.php");
?>
</div>


<div align="center" style="margin: 50px;">

  <form action="" method="post" enctype="multipart/form-data">
  <caption><h1 style="color:#BCC6CC">Used Cars</h1> </caption>
            <table class="bac" style="color:#BCC6CC; height: 22%;" align="center"  border="5" width="60%">
            
                
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Brand Name</th>
                    <th>Model</th>
                    <th>Body Style</th>
                    
                    <th>Colour</th>
                    <th>Year</th>
                    <th>Kilometers Driven</th>
                    <th>Condition</th>
                    <th>Transmission</th>
                    <th>Description</th>
                    <th>Price</th>
                    
                   
                    
                    
                    
                    
                </tr>
                <?php
                while($g=mysql_fetch_array($r))
                {
                    ?>
                        <tr>
                            <td><?php echo $g[1];?></td>
                               <td><img src="<?php echo $g[2];?>" height="80px" width="150px" alt=""></td>
                            <td><?php echo $g[3];?></td>
                            <td><?php echo $g[4];?></td>
                            <td><?php echo $g[5];?></td>
                            <td><?php echo $g[6];?></td>
                            <td><?php echo $g[7];?></td>
                            <td><?php echo $g[8];?></td>
                            <td><?php echo $g[9];?></td>
                            <td><?php echo $g[10];?></td>
                            <td><?php echo $g[11];?></td>
                            <td><?php echo $g[12];?></td>
                            
                            
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