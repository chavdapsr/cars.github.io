<?php
include("controller.php");
    $c= new reqres();
    $r=$c->dlr();
    $c->de_update();s


  ?>
  
<html>
    <head>
     <title>cars</title>

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
    </div>
  <div>
     <?php
    include("footer.php");
     ?>
  
  </div>

</body>
</html>