<?php
    include ("cnn.php"); 
   if($_REQUEST['e'])
  {
      $j=$_REQUEST['e'];
      echo $j;
      $sel=mysql_query("select * from company_list  where cname like'%$j%'");
      while($l=mysql_fetch_array($sel))
      {
          ?>
            <div style="height: auto; width: auto; float: none; z-index:10;">
                <a href="galery.php"><?php echo $l["cname"];?></a>
            </div>
          <?php
      }
  
      
  }
  ?>
