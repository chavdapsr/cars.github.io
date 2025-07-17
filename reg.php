<?php
include("controller.php");
$p= new reqres();
$p-> admin();
  
?>

<html>
    <head>
        <title>admin reg</title>
        
    </head>
<body>
    <form method="post">
        <table align="center">
            <caption>admin reg</caption>
            
            <tr>
                <td>fname</td>
                <td><input type="text" name="fn"></td>
            </tr>
        
            <tr>
                <td>lname</td>
                <td><input type="text" name="ln"></td>
            </tr>
            
            <tr>
                <td>username</td>
                <td><input type="text" name="un"></td>
            </tr>
            
            <tr>
                <td>password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            
            <tr>
                
                <td><input type="submit" name="s" value="sign up"></td>
            </tr>
        
        
        </table>
    
    
    </form>

</body>
    
</html>
