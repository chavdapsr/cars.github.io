<?php
include("controller.php");
    $c= new reqres();
    $r=$c->ftr();


  ?>
  
  
  <html>
    <head>
        <title>
            Manage Features
        </title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">  
        <?php
    
         $s=mysql_query("select count(*) from user");
    $m=mysql_fetch_array($s);
    $tr=$m[0];
    $pp=3;
    $pn=1;
    $tp=$tr/$pp;
    if($_REQUEST['pn'])
    {
        $pn=$_REQUEST['pn'];
    }

    if($tr%$pp>0)
    {
        $tp++;
    }
    $from=(($pn-1)*$pp)+1;
    $to=($pn*$pp);

    for($i=1;$i<=$tp;$i++)
    {
    ?>
    	<p></p>
    <tr>
        <td><a href="managefeatures.php?pn=<?php echo $i;?>"><?php echo $i;?></a></td>
    </tr>
    <?php 
    }

    $sl=mysql_query("select * from user where uid between $from and $to");
?>
    </head>
    <body>
        <form action="" method="post">
             <center><h1 style="color:#BCC6CC">Manage Features Of Car</h1></center>
             
            <table class="bac" style="color:#BCC6CC; width: 100%; height: 34%;" align="center"  border="5">
              <tr>
                    <th>Caompany ID</th>
                    <th>Company Name</th>
                    <th>Model</th>
                    <th>Variant</th>
                    <th>Status</th>
                    <th style="width: 150px">Image</th>
                    <th style="width: 21px">Price</th>
                    <th style="width: 26px">Model Type</th>
                    <th style="width: 25px">Colors</th>
                    <th style="width: 22px">Width</th>
                    <th style="width: 26px">Height</th>
                    <th style="width: 25px">Length</th>
                    <th>Ground Clearance</th>
                    <th>Fuel Type</th>
                    <th>Mileage City</th>
                    <th>Mileage Highway</th>
                   
                    </tr>
                <?php
                while($g=mysql_fetch_array($r))
                {
                    ?>
                        <tr>
                            <td><?php echo $g[1];?></td>
                            <td><?php echo $g[2];?></td>
                            <td><?php echo $g[3];?></td>
                            <td><?php echo $g[4];?></td>
                            <td><?php echo $g[5];?></td>
                            <td style="width: 150px"><center><img src="<?php echo $g[6];?>" height="150px" width="250px" alt=""></center></td>
                            <td style="width: 21px"><?php echo $g[7];?></td>
                            <td style="width: 26px"><?php echo $g[8];?></td>
                            <td style="width: 25px"><?php echo $g[9];?></td>
                            <td style="width: 22px"><?php echo $g[10];?></td>
                            <td style="width: 26px"><?php echo $g[11];?></td>
                            <td style="width: 25px"><?php echo $g[12];?></td>
                            <td><?php echo $g[13];?></td>
                            <td><?php echo $g[14];?></td>
                            <td><?php echo $g[15];?></td>
                            <td><?php echo $g[16];?></td>
                            
                            
                            <td style="width: 33px"><a href="addbrand.php?e=<?php echo $g[0];?>">edit</a></td>
                        </tr>
                        
                    <?php 
                }
                ?>
                 <tr>
                    <td><a href="managefeatures.php?pn=<?php echo $i=$pn-1;?>">Back</a>
                    <a href="managefeatures.php?pn=<?php echo $i=$pn+1;?>">next</a></td>
                </tr>
            </table>
            
        </form>
        
    </body>
</html>

