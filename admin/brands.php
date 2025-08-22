<?php
include("controller.php");
    $c= new reqres();
    $r=$c->user_home();


  ?>
  
  
  <html>
    <head>
        <title>
            Manage Companies
        </title>
    </head>
    <body>
        <form action="" method="post">
            <table align="center"  border="5" style="height: 100%; width: 50%;">
            <caption><h1>Manage Companies</h1></caption>
                <tR>
                    
                    <th>Company</th>
                    <th>Logo</th>
                    
                    <th>action</th>
                    <th>delete</th>
                </tR>
                <?php
                while($g=mysql_fetch_array($r))
                {
                    ?>
                        <tR>
                            <td><?php echo $g[1];?></td>
                            
                            <td><img src="<?php echo $g[2];?>" height="80px" width="150px" alt=""></td>
                            <td><a href="addcars.php?e=<?php echo $g[0];?>">edit</a></td>
                            <td><a href="#">delete</a></td>
                        </tR>
                    <?php 
                }
                ?>
            </table>
        </form>
    </body>
</html>

