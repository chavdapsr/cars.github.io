<?php

   mysql_connect("localhost","root","") or die("connection not found");
   mysql_select_db("carmafia") or die(mysql_error());
   
   if(isset($_REQUEST['j']))
   {
   
       //$a1=$_REQUEST['fd'];
       $a2=$_REQUEST['cd'];
       $x=$_REQUEST['cn'];
       $p=$_REQUEST['mod'];
       $y=$_REQUEST['mn'];
       $s=$_REQUEST['st'];
       $z=$_REQUEST['mt'];
       $a3=$_REQUEST['wd'];
       $a4=$_REQUEST['hg'];
       $a5=$_REQUEST['ln'];
       $a6=$_REQUEST['grc'];
       $a7=$_REQUEST['ftyp'];
       $a8=$_REQUEST['milc'];
       $a9=$_REQUEST['milh'];
       $a10=$_REQUEST['seat'];
       $a11=$_REQUEST['eng'];
       $a12=$_REQUEST['fuel'];
       $a13=$_REQUEST['transm'];
       $a14=$_REQUEST['engdes'];
       $a15=$_REQUEST['max'];
       $a16=$_REQUEST['val'];
       $a17=$_REQUEST['pow'];
       $a18=$_REQUEST['cyl'];
       $a19=$_REQUEST['com'];
       $a20=$_REQUEST['infr'];
       $a21=$_REQUEST['exfr'];
       $a22=$_REQUEST['ent'];
       $a23=$_REQUEST['saft'];
       

      $ins=mysql_query("insert into features values('','$a2','$x','$p','$y','$s','$z','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23')") or die (mysql_error());
       
       echo $a2,$x,$p,$y,$s,$z,$a3,$a4,$a5,$a6,$a7,$p,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23;
   }
   
          
?>
<html>
    <head>
        <title>features</title>
        
    </head>
<body>
    <form method="post">
        <table align="center">
           
           <caption><h1>Add Features Of Cars</h1></caption>
        
            
            
            <tr>
                <td>2.cid</td>
                <td><input type="text"  name="cd" size="100"  ></td>
                
            
            </tr>
            <tr>
                <td>3.company name</td>
                <td><input type="text"  name="cn" size="100"  ></td>
                
            
            </tr>
             <tr>
                <td>4.model name</td>
                <td><input type="text"  name="mod" size="100"  ></td>
                
            
            </tr>
            <tr>
                <td>5.model name</td>
                <td><input type="text"  name="mn" size="100"  ></td>
            
            
            </tr>
            <tr>
                <td>6.status</td>
                <td><input type="text"  name="st" size="100"  ></td>
            
            
            </tr>
            <tr>
                <td>7.model type</td>
                <td><input type="text"  name="mt" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>8. width</td>
                <td><input type="text"  name="wd" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>9. Height</td>
                <td><input type="text"  name="hg" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>10. length</td>
                <td><input type="text" name="ln" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>11. Ground clearance</td>
                <td><input type="text"  name="grc" size="100" ></td>
                
            
            </tr>
            <tr>
                <td>12. fuel type</td>
                <td><input type="text"  name="ftyp" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>13. mileage city</td>
                <td><input type="text"  name="milc" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>14. mileage highway</td>
                <td><input type="text"  name="milh" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>15. seating capasity</td>
                <td><input type="text"  name="seat" size="100"  ></td>
                
            
            </tr>
            <tr>
                <td>16. engine displacement</td>
                <td><input type="text" name="eng" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>17. fuel tank capasity</td>
                <td><input type="text"  name="fuel" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>18. transmission type</td>
                <td><input type="text"  name="transm" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>19. engine description</td>
                <td><input type="text"  name="engdes" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>20. maximum torque</td>
                <td><input type="text"  name="max" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>21. valves per cylinder</td>
                <td><input type="text"  name="val" size="100"  ></td>
                
            
            </tr>
            <tr>
                <td>22. maximum power</td>
                <td><input type="text" name="pow" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>23. no of cylinders</td>
                <td><input type="text"  name="cyl" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>24. comfort & convience</td>
                <td><input type="text"  name="com" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>25. interiour features</td>
                <td><input type="text"  name="infr" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>26. exteriour features</td>
                <td><input type="text"  name="exfr" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>27. entertainment</td>
                <td><input type="text"  name="ent" size="100"  ></td>
                
            
            </tr>
            
            <tr>
                <td>28. safety features</td>
                <td><input type="text"  name="saft" size="100" ></td>
                
            
            </tr>
        
            
            <tr>
                <td colspan="2" align="right"><input type="submit" name="j" value="INSERT"></td>
            </tr>
        
        </table>
    
    
    </form>

</body>

</html>
