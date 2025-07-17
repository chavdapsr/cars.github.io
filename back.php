<?php
  error_reporting(0);  
  ob_start();
    include("cnn.php");

    if($_REQUEST['e'])
    {
        $j=$_REQUEST['e'];
        $sel=mysql_query("select * from features where variant like'$j%'");

        while($p=mysql_fetch_array($sel))
        {
        ?>
        <div style="height: 20px; width: 80%;border: groove;float: none;"><a href="galery.php"><?php echo $p[1];?></a></div>

        <?php
        }
    }

    if(isset($_REQUEST['vv']))
    {

        $k=$_REQUEST['vv'];
        //echo "helllo";

        $sel1="select * from features where price between $k";
        $sel5=mysql_query($sel1) or die(mysql_error());
        // $kkk=mysql_fetch_array($sel5);
        // print_r($kkk);
        while($j=mysql_fetch_array($sel5))
        {

        ?>
        <a  href="#?kk=<?php echo $j[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 5px; background-color: gray; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);  border-radius:5px ; ">
                <img src="<?php echo "admin/".$j[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j[4];?></a></div>
            </div></a> 
        <?php 
        }
    }
    if(isset($_REQUEST['v1']))
    {

        $k=$_REQUEST['v1'];
        //echo "helllo";

        $sel2="select * from features where fuel_type='$k'";
        $sel6=mysql_query($sel2);
        while($j1=mysql_fetch_array($sel6))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j1[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);  border-radius:5px ;">
                <img src="<?php echo $j1[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j1[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j1[4];?></a></div>
            </div></a>
        <?php 
        }
    }

    if(isset($_REQUEST['v2']))
    {

        $k=$_REQUEST['v2'];
        //echo "helllo";

        $sel3="select * from features where model_type='$k'";
        $sel7=mysql_query($sel3);
        while($j2=mysql_fetch_array($sel7))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j2[0];?>"> <div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j2[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j2[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j2[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v3']))
    {


        // $sss=mysql_query("select * from features");
        // $lp=mysql_fetch_array($sss);
        //$u=$lp[9];
        // $o=explode(",",$u);
        //$k=$_REQUEST['v3'];
        //echo "helllo";
        $o=$_REQUEST['v3'];
        $sel4="select * from features where color2='$o'";
        $sel8=mysql_query($sel4);
        //$l=mysql_fetch_array($sel8);
        //print_r($l);
        while($j3=mysql_fetch_array($sel8))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j3[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j3[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j3[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j3[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v31']))
    {


        // $sss=mysql_query("select * from features");
        //$lp=mysql_fetch_array($sss);
        //$u=$lp[9];
        //$o=explode(",",$u);
        $o1=$_REQUEST['v31'];
        //echo "helllo";

        $sel4="select * from features where color2='$o1'";
        $sel8=mysql_query($sel4);
        $l=mysql_fetch_array($sel8);
        // print_r($l);
        while($j31=mysql_fetch_array($sel8))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j31[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j31[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j31[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j31[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v32']))
    {


        // $sss=mysql_query("select * from features");
        //$lp=mysql_fetch_array($sss);
        //$u=$lp[9];
        //$o=explode(",",$u);
        $o2=$_REQUEST['v32'];
        //echo "helllo";
        // echo $o2;
        $sell="select * from features where color4='$o2'";
        $sel9=mysql_query($sell);
        $l=mysql_fetch_array($sel9);
        // print_r($l);
        while($j32=mysql_fetch_array($sel9))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j32[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j32[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j32[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j32[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v311']))
    {


        // $sss=mysql_query("select * from features");
        //$lp=mysql_fetch_array($sss);
        //$u=$lp[9];
        //$o=explode(",",$u);
        $o3=$_REQUEST['v311'];
        //echo "helllo";

        $sell="select * from features where color1='$o3'";
        $sel91=mysql_query($sell);
        $l=mysql_fetch_array($sel91);
        // print_r($l);
        while($j33=mysql_fetch_array($sel91))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j33[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j33[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j33[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j33[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v341']))
    {


        // $sss=mysql_query("select * from features");
        //$lp=mysql_fetch_array($sss);
        //$u=$lp[9];
        //$o=explode(",",$u);
        $o4=$_REQUEST['v341'];
        //echo "helllo";

        $sell0="select * from features where color5='$o4'";
        $sel92=mysql_query($sell0);
        $l=mysql_fetch_array($sel92);
        // print_r($l);
        while($j34=mysql_fetch_array($sel92))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j34[0];?>"><div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j34[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j34[2];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j34[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if($_REQUEST['w'])
    {
        $t=$_REQUEST['w'];

        $sel=mysql_query("select * from car_models where cat_id='$t'");
        while($p=mysql_fetch_array($sel))
        {
        ?>
        <option value="<?php echo $p[0];?>"><?php echo $p[1];?></option>
        <?php
        }
    }
    if(isset($_REQUEST['vv1']))
    {

        $k=$_REQUEST['vv1'];
        //echo "helllo";

        $sel1="select * from add_post where price between $k";
        $sel5=mysql_query($sel1) or die(mysql_error());
        // $kkk=mysql_fetch_array($sel5);
        // print_r($kkk);
        while($j01=mysql_fetch_array($sel5))
        {

        ?>
        <a  href="umd.php?kk=<?php echo $j01[0];?>"> <div style="height: 170px; width: 150px; border: groove; float: left; margin: 5px; background-color: gray; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);  border-radius:5px  ">
                <img src="<?php echo $j01[3];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j01[4];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j01[5];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j01[14];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v11']))
    {

        $k=$_REQUEST['v11'];
        //echo "helllo";

        $sel2="select * from add_post where cond='$k'";
        $sel6=mysql_query($sel2);
        while($j001=mysql_fetch_array($sel6))
        {

        ?>
        <a  href="umd.php?kk=<?php echo $j001[0];?>"> <div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);  border-radius:5px ;">
                <img src="<?php echo $j001[3];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j001[4];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j001[5];?></a></div>
            </div></a>
        <?php 
        }
    }

    if(isset($_REQUEST['v22']))
    {

        $k=$_REQUEST['v22'];
        //echo "helllo";

        $sel3="select * from add_post where b_style='$k'";
        $sel7=mysql_query($sel3);
        while($j002=mysql_fetch_array($sel7))
        {

        ?>
        <a  href="umd.php?kk=<?php echo $j002[0];?>"> <div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j002[3];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j002[4];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j002[5];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v33']))
    {

        $k=$_REQUEST['v33'];
        //echo "helllo";

        $sel4="select * from add_post where color='$k'";
        $sel8=mysql_query($sel4);
        while($j33=mysql_fetch_array($sel8))
        {

        ?>
        <a  href="umd.php?kk=<?php echo $j33[0];?>"> <div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j33[3];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j33[4];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j33[5];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['v331']))
    {

        $k=$_REQUEST['v331'];
        //echo "helllo";

        $sel4="select * from features where color3='$k'";
        $sel8=mysql_query($sel4);
        while($j33=mysql_fetch_array($sel8))
        {

        ?>
        <a  href="#.php?kk=<?php echo $j33[0];?>"> <div style="height: 170px; width: 150px; border: groove; float: left; margin: 10px; background-color: gray;box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:5px ;">
                <img src="<?php echo $j33[6];?>" alt="" style="height: 100px; width: 150px;">
                <div style="height: auto; width: auto; "><a href="" style="color: black; "><?php echo $j33[3];?></a></div>
                <div style="height: auto; width: auto;"><a href="" style="color: black; "><?php echo $j33[4];?></a></div>
            </div></a>
        <?php 
        }
    }
    if(isset($_REQUEST['gett']))
    {


        $k=$_REQUEST['gett'];


        $sel4="select * from add_post where b_name ='$k'";
        $sel8=mysql_query($sel4);

        while($j3=mysql_fetch_array($sel8))
        {
        ?>
        <option value="<?php echo $j3[0]; ?>"><?php echo $j3["model"]; ?></option>
        <?php



        }

    }
    if(isset($_REQUEST['gett1']))
    {


        $k1=$_REQUEST['gett1'];


        $sel41="select * from features where cid ='$k1'";
        $sel81=mysql_query($sel41);

        while($j31=mysql_fetch_array($sel81))
        {
        ?>
        <option><?php echo $j31["variant"]; ?></option>
        <?php



        }

    }
    if(isset($_REQUEST['gett2']))
    {


        $k2=$_REQUEST['gett2'];


        $sel42="select * from features where cid ='$k2'";
        $sel82=mysql_query($sel42);

        while($j32=mysql_fetch_array($sel82))
        {
        ?>
        <option><?php echo $j32["variant"]; ?></option>
        <?php



        }

    }
    if(isset($_REQUEST['gett3']))
    {


        $k2=$_REQUEST['gett3'];


        $sel42="select * from features where cid ='$k2'";
        $sel82=mysql_query($sel42);

        while($j32=mysql_fetch_array($sel82))
        {
        ?>
        <option value="<?php echo $j32[0]; ?>"><?php echo $j32["variant"]; ?></option>
        <?php



        }

    }
    if(isset($_REQUEST['gett4']))
    {


        $k2=$_REQUEST['gett4'];


        $sel42="select * from features where cid ='$k2'";
        $sel82=mysql_query($sel42);

        while($j32=mysql_fetch_array($sel82))
        {
        ?>
        <option value="<?php echo $j32[0]; ?>"><?php echo $j32["variant"]; ?></option>
        <?php



        }

    }
    /* if(isset($_REQUEST['gett4']))
    {


    $k3=$_REQUEST['gett4'];


    $sel43="select * from features where cid ='$k3'";
    $sel83=mysql_query($sel43);

    while($j33=mysql_fetch_array($sel83))
    {
    ?>

    <option><?php echo $j33["variant"]; ?></option>         
    <?php



    }

    }*/
    if(isset($_REQUEST['gett5']))
    {


        $k4=$_REQUEST['gett5'];


        $sel44="select * from features where cid ='$k5'";
        $sel84=mysql_query($sel44);

        while($j34=mysql_fetch_array($sel84))
        {
        ?>
        <option><?php echo $j34["variant"]; ?></option>
        <?php



        }

    }
    if(isset($_REQUEST['gett22']))
    {


        $k22=$_REQUEST['gett22'];


        $sel421="select * from features where cid ='$k22'";
        $sel821=mysql_query($sel421);

        while($j321=mysql_fetch_array($sel821))
        {
        ?>
        <option value="<?php echo $j321[0]; ?>"><?php echo $j321["variant"]; ?></option>
        <?php



        }

    }
    if(isset($_REQUEST['review']))
    {
        $rev=$_REQUEST['review'];

        $sel = "select * from features where fid='$rev'";
        $sel2 = mysql_query($sel);
        $sel1 = mysql_fetch_array($sel2);
    ?>
    <div style="margin-top: -40%;">


        <table width="100%" align="center" >




            <tr align="center" style="height: 30%; width: 80%;"> 
                <td colspan="2"  ><img src="<?php echo $sel1["img1"]; ?>" height="70%" width="50%" alt="" style="   box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius: 10px; margin-top: 10%;"></td></tr>
            <tr><td style="color:gray; font-size: 25px; "><b>Brand Name:</b><td><?php echo $sel1["company_name"]; ?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b>Model Type:</b></td><td><?php echo $sel1["variant"];?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b>Body Type:</b></td><td><?php echo $sel1["model_type"]; ?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b>Price:</b></td><td><?php echo $sel1["price"]; ?></td>

            </tr>
        </table>


    </div>

    <?php 


    }



    if(isset($_REQUEST['dd']))
    {
        $rev=$_REQUEST['dd'];
        $sel="select * from dealers where did='$rev'";

        $sel2 = mysql_query($sel);
        $sel1 = mysql_fetch_array($sel2);

        $sel1[0];
        $sel1[1];
        $sel1[2];
        $sel1[3];
        $sel1[4];
    ?>
    <div style= "border: groove; box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius:12px 12px 12px 12px;" >
        <table width="50%" align="center" style="margin: 5%; margin-left: 25%;">
            <tr> 
            <tr><td style="color:gray; font-size: 25px; "><b><u>Company Name</u>:</b><?php echo $sel1[1];?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b><u>City</u>:</b><?php echo $sel1[2];?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b><u>Address</u>:</b><?php echo $sel1[3];?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b><u>Contact Number</u>:</b><?php echo $sel1[4];?></td>
            </tr>
        </table>


    </div>

    <?php

    }
    if(isset($_REQUEST['re']))
    {
        $rev=$_REQUEST['re'];

        $sel = "select * from features where fid='$rev'";

        $sel2 = mysql_query($sel);
        $sel1 = mysql_fetch_array($sel2);
        //echo $sel1[3];
    ?>
    <div>


        <table width="100%" align="center" >




            <tr align="center" style="height: 30%; width: 80%;"> 
            <td colspan="2"  ><img style="border-color:#BCC6CC;" src="<?php echo $sel1["img1"]; ?>" height="70%" width="50%" alt="" style="   box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius: 10px; margin-top: 10%;"></td></tr><br/>
            <tr><td><b style="color:#BCC6CC;">Brand Name:</b><td><?php echo $sel1["company_name"]; ?></td>
            </tr>
            <tr><td><b>Model Type:</b></td><td style="color:gray; font-size: 25px;"><b><?php echo $sel1["variant"];?></b></td>
            </tr>
            <tr><td><b>Body Type:</b></td><td style="color:gray; font-size: 25px;"><b><?php echo $sel1["model_type"]; ?></b></td>
            </tr>
            <tr><td><b>Price:</b></td><td style="color:gray; font-size: 25px;"><b><?php echo $sel1["price"]; ?></b></td>
            <tr><td><b>model type:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["model_type"]; ?></b></td>
            <tr><td><b>color:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["color1"]; ?></b></td>
                  <tr><td><b>width:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["width"]; ?></b></td>
              <tr><td><b>height:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["height"]; ?></b></td>
          <tr><td><b>ground_clearance:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["ground_clearance"]; ?></b></td>
           <tr><td><b>fuel type:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["fuel_type"]; ?></b></td>
           <tr><td><b>mileage city:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["mileage_city"]; ?></b></td>
               <tr><td><b>mileage highway:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["mileage_highway"]; ?></b></td>
         <tr><td><b>seating capacity:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["seating_capasity"]; ?></b></td>
           <tr><td><b>engine displacement:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["engine_displacement"]; ?></b></td>
         <tr><td><b>fuel tank capacity:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["fuel_tank_capacity"]; ?></b></td>
          <tr><td><b>engine description:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["engine_description"]; ?></b></td>
         <tr><td><b>maximum torque:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["maximum_torque"]; ?></b></td>
            <tr><td><b>valves per cylinder:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["valves_per_cylinder"]; ?></b></td>
              <tr><td><b>maximum power:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["maximum_power"]; ?></b></td>
          <tr><td><b>no of cylinder:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["no_of_cylinders"]; ?></b></td>
           <tr><td><b>interior features:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["comfort_and_convience"]; ?></b></td>
         <tr><td><b>comfort and convience:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["interior_features"]; ?></b></td>
         <tr><td><b>exterior features:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["exterior_features"]; ?></b></td>
         <tr><td><b>safety features:</b></td style="color:gray; font-size: 25px;"><td><b><?php echo $sel1["safety_features"]; ?></b></td>
          
            </tr>
        </table>


    </div>




    <?php 
    }
    if(isset($_REQUEST['ue']))
    {
        $rev=$_REQUEST['ue'];

        $sel = "select * from add_post where a_id='$rev'";

        $sel2 = mysql_query($sel);
        $sel1 = mysql_fetch_array($sel2);
        //echo $sel1[3];
    ?>
    <div>


        <table width="100%" align="center" >




            <tr align="center" style="height: 30%; width: 80%;"> 
                <td colspan="2"  ><img src="<?php echo $sel1["photo"]; ?>" height="70%" width="50%" alt="" style="   box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); border-radius: 10px; margin-top: 10%;"></td></tr>
            <tr><td style="color:gray; font-size: 25px; "><b>Brand Name:</b><td><?php echo $sel1["b_name"]; ?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b>Model Type:</b></td><td><?php echo $sel1["model"];?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b>Body Type:</b></td><td><?php echo $sel1["b_style"]; ?></td>
            </tr>
            <tr><td style="color:gray; font-size: 25px;"><b>Price:</b></td><td><?php echo $sel1["price"]; ?></td>

            </tr>
        </table>


    </div>

    <?php

    }
    if(isset($_REQUEST['getins']))
    {
        $a=$_REQUEST['getins'];
        $dd= mysql_query("select * from inscom where cid='$a'");
        $dd1=mysql_fetch_array($dd);




        echo $dd1[3]; 
    }     
?>
