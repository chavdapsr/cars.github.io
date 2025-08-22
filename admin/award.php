
<?php
   include("controller.php");
   $p= new reqres();
   $p->award();
?>
<html>
    <head>
        <title>Add New Award</title>
    </head>
    
<body>
    <form action="" method="post">
     <caption><h1 align="center">Add New Award</h1></caption>
            <table align="center" bgcolor="grey">
                <tR>
                    <td>2. company name</td>
                    <td><input type="text" size="30" name="cnam"></td>
                </tR>
                
                
                <tR>
                    <td>3. model name </td>
                    <td><input type="text" size="30" name="mnam"></td>
                </tR>
                
                 <tR>
                    <td>4. variant</td>
                    <td><input type="text" size="30" name="vnt"></td>
                </tR>
                
                 <tR>
                    <td>5. image</td>
                    <td><input type="file" size="30" name="img"></td>
                </tR>
                
                 <tR>
                    <td>6. year </td>
                    <td><input type="text" size="30" name="yr"></td>
                </tR>
                
                <tR>
                    <td>7. award name </td>
                    <td><input type="text" size="30" name="anam"></td>
                </tR>
                
                <tR>
                    <td>8. description </td>
                    <td><input type="text" size="30" name="des"></td>
                </tR>
                
                
                <tr>
                    <td colspan="2"><input type="submit" name="awd" value="submit"></td>
                
                </tr>
                
                </table>

</body>
</html>