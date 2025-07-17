<?php

    mysql_connect("localhost","root","") or die("connection not found");
    mysql_select_db("carmafia") or die(mysql_error());

    
    $sel=mysql_query("select * from features");
    if(isset($_REQUEST['j']))
    {

        //$a1=$_REQUEST['fd'];
     //   $a2=$_REQUEST['cd'];
        $x=$_REQUEST['cn'];
        $p=$_REQUEST['mod'];
        $y=$_REQUEST['mn'];
        $s=$_REQUEST['st']; 

        $i=$_FILES['i']['name'];
        $ii=$_FILES['i']['tmp_name'];
        $iii="image/".$i;
        move_uploaded_file($ii,$iii);




        $i3=$_REQUEST['i3'];



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


        $ins=mysql_query("insert into features values('','$x','$p','$y','$s','$iii','$i3','$z','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23')") or die (mysql_error());

       // echo $a2,$x,$p,$y,$s,$iii,$i3,$z,$cl,$a3,$a4,$a5,$a6,$a7,$p,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$a19,$a20,$a21,$a22,$a23;
    }                                                                                                                                               


?>
<html>
    <head>
        <title>features</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default">

    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <table  class="bac" style="color:#BCC6CC; height: 36%; width: 251px;" align="center"  border="5" >

                <caption><h1 style="color:#BCC6CC">Add Features Of Cars</h1>
				<p style="color:#BCC6CC">&nbsp;</p></caption>
                
                <tr class="bac">
                    <td class="bac"style="width: 137px">1.company name</td>
                    <td class="bac"><input class="bac" type="text"  name="cn" size="100" required="required" ></td>


                </tr>
                <tr>
                    <td style="width: 137px">2.model name</td>
                    <td><input class="bac" type="text"  name="mod" size="100" required="required" ></td>


                </tr>
                <tr>
                    <td style="width: 137px">3.variant name</td>
                    <td><input  class="bac" type="text"  name="mn" size="100" required="required" ></td>


                </tr>
                <tr>
                    <td style="width: 137px">4.status</td>
                    <td><input class="bac" type="text"  name="st" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">5.Images</td>
                    <td><input  class="bac" type="file"  name="i" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">6.price</td>
                    <td><input class="bac" type="text"  name="i3" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">7.model-type</td>
                    <td><input class="bac" type="text"  name="mt" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">8.width</td>
                    <td><input class="bac" type="text"  name="wd" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">9.Height</td>
                    <td><input class="bac" type="text"  name="hg" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">10.length</td>
                    <td><input class="bac" type="text" name="ln" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">11.Ground clearance</td>
                    <td><input  class="bac"type="text"  name="grc" size="100" required="required" ></td>


                </tr>
                <tr>
                    <td style="width: 137px">12.fuel type</td>
                    <td><input class="bac" type="text"  name="ftyp" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">13.mileage city</td>
                    <td><input class="bac" type="text"  name="milc" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">14.mileage highway</td>
                    <td><input class="bac" type="text"  name="milh" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">15.seating capasity</td>
                    <td><input class="bac" type="text"  name="seat" size="100" required="required" ></td>


                </tr>
                <tr>
                    <td style="width: 137px">16.engine displacement</td>
                    <td><input class="bac" type="text" name="eng" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">17.fuel tank capasity</td>
                    <td><input class="bac" type="text"  name="fuel" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">18.transmission type</td>
                    <td><input class="bac" type="text"  name="transm" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">19.engine description</td>
                    <td><input class="bac" type="text"  name="engdes" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">20.maximum torque</td>
                    <td><input class="bac" type="text"  name="max" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">21.valves per cylinder</td>
                    <td><input class="bac" type="text"  name="val" size="100" required="required" ></td>


                </tr>
                <tr>
                    <td style="width: 137px">22.maximum power</td>
                    <td><input class="bac" type="text" name="pow" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">23.no of cylinders</td>
                    <td><input class="bac" type="text"  name="cyl" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">24.comfort & convience</td>
                    <td><input class="bac" type="text"  name="com" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">25.interiour features</td>
                    <td><input class="bac" type="text"  name="infr" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">26.exteriour features</td>
                    <td><input class="bac" type="text"  name="exfr" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">27.entertainment</td>
                    <td><input class="bac" type="text"  name="ent" size="100" required="required" ></td>


                </tr>

                <tr>
                    <td style="width: 137px">28.safety features</td>
                    <td><input class="bac" type="text"  name="saft" size="100" required="required"></td>


                </tr>


                <tr>
                    <td colspan="2" align="right">
					<input class="bac" type="submit" name="j" value="INSERT"  style="height: 58px"></td>
                </tr>

            </table>


        </form>

    </body>

</html>
