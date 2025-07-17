
<?php
   include("controller.php");
   $p= new reqres();
   $p->com();
?>
<html>
    <head>
        <title>Add Complain</title>
    </head>
    
<body>
    <form action="" method="post">
     <caption><h1 align="center">Add Complain</h1></caption>
            <table align="center" bgcolor="grey">
                <tR>
                    <td>2. uid</td>
                    <td><input type="text" size="30" name="uid"></td>
                </tR>
                
                
                <tR>
                    <td>3. subject </td>
                    <td><input type="text" size="30" name="sub"></td>
                </tR>
                
                 <tR>
                    <td>4. complain</td>
                    <td><input type="text" size="30" name="cm"></td>
                </tR>
                
                              
                
                <tr>
                    <td colspan="2"><input type="submit" name="com" value="submit"></td>
                
                </tr>
                
                </table>

</body>
</html>