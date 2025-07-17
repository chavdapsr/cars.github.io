
<?php
   include("controller.php");
   $p= new reqres();
   $p->deal();
?>
<html>
    <head>
        <title>Add New Dealer</title>
    </head>
    
<body>
    <form action="" method="post">
     <caption><h1 align="center">Add New Dealer</h1></caption>
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
                    <td>4. city</td>
                    <td><input type="text" size="30" name="city"></td>
                </tR>
                
                 <tR>
                    <td>5. address </td>
                    <td><input type="text" size="30" name="add"></td>
                </tR>
                
                 <tR>
                    <td>6. contact </td>
                    <td><input type="text" size="30" name="con"></td>
                </tR>
                
                
                <tr>
                    <td colspan="2"><input type="submit" name="ok" value="submit"></td>
                
                </tr>
                
                </table>
            </form>
     </body>
</html>