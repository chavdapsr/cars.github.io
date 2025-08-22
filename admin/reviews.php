
<?php
   include("controller.php");
   $p= new reqres();
   $p->rvww();
?>
<html>
    <head>
        <title>Add Review</title>
    </head>
    
<body>
   <body>
<div>
        <?php
    include("header.php");
?>
</div>


<div align="center" style="margin: 50px;">
Add New Dealer
  <form action="" method="post">
     <caption><h1 align="center">Add Review</h1></caption>
            <table align="center" bgcolor="grey">
                <tR>
                    <td>2. cid</td>
                    <td><input type="text" size="30" name="id"></td>
                </tR>
                
                
                <tR>
                    <td>3. company name </td>
                    <td><input type="text" size="30" name="name"></td>
                </tR>
                
                 <tR>
                    <td>4. model</td>
                    <td><input type="text" size="30" name="mdl"></td>
                </tR>
                
                 <tR>
                    <td>5. review </td>
                    <td><input type="text" size="30" name="rvw"></td>
                </tR>
     
                
                
                <tr>
                    <td colspan="2"><input type="submit" name="rw" value="submit"></td>
                
                </tr>
                
                </table>
</form>
  </div>
  <div>
     <?php
    include("footer.php");
?>
  
  </div>

</body></body>
</html>