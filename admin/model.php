<?php   
    class database
    {
        function database()
        {
            mysql_connect("localhost","root","");
            mysql_select_db("carmafia");
        }
        function admin($a,$b,$i,$j)
        {
            echo $ins="insert into admin values('','$a','$b','$i','$j')";
            mysql_query($ins)or die (mysql_error()); 
        }

        function login($a,$a1)
        {
            $sel="select * from admin where un='$a' and pwd='$a1'";
            $s=mysql_query($sel) or die (mysql_error());
            return $s;

        }



        function company($a,$b)
        {
            echo $in="insert into company_list values('','$a','$b')";
            mysql_query($in) or die (mysql_error());

        }

        function dealer($b,$c,$d,$e)
        {

        
            $in = "insert into dealers values('','$b','$c','$d','$e')";
            mysql_query($in) or die (mysql_error());

        }


        function awd($a,$b,$c,$p,$e,$f,$g)
        {
            echo $in="insert into award values('','$a','$b','$c','$p','$e','$f','$g')";
            mysql_query($in) or die (mysql_error());
        }


        function compl($a,$b,$c)
        {
            echo $in= "insert into complains values('','$a','$b','$c')";
            mysql_query($in) or die (mysql_error());
        }

        function scc($a,$b,$c,$d,$e)
        {


            echo $in = "insert into service_center values('','$a','$b','$c','$d','$e')";
            mysql_query($in) or die (mysql_error());

        }                                             


        function rvv($a,$b,$c,$d)
        {

            echo  $in = "insert into reviews values('','$a','$b','$c','$d')";
            mysql_query($in) or die (mysql_error());

        }                                             


        function show()
        {
            $sel=mysql_query("select * from company_list") or die (mysql_error());
            return $sel;
        }

        function shw()
        {
            $sel=mysql_query("select * from user") or die (mysql_error());
            return $sel;
        }

        function dlr()
        {
            $sel=mysql_query("select * from dealers") or die (mysql_error());
            return $sel;
        }
        function ftr()
        {
            $sel=mysql_query("select * from features") or die (mysql_error());
            return $sel;
        }
        
         function used()
        {
            $sel=mysql_query("select * from add_post") or die (mysql_error());
            return $sel;
        }
        
        function user_edit($a)
        {
            $sel=mysql_query("select * from company_list where cid='$a'") or die(mysql_error());
            return $sel;
        }
        function user_update($a,$b,$c)
        {
            $u="update company_list set cname='$a',logo='$c' where cid='$b'";
            $p=mysql_query($u)  or die(mysql_error());
        }

        function dealer_edit($a)
        {
            $sel=mysql_query("select * from dealers where did='$a'") or die(mysql_error());
            return $sel;
        }
        function de_update($a,$b,$c,$d,$r)
        {

            echo  $m="update dealers set cn='$a',city='$b',addd='$c',cno='$d' where did='$r'";
            mysql_query($m) or die(mysql_error());
        }


        function delete_brand($a)
        {
            $del="delete from company_list where cid='$a'";
            mysql_query($del);
        }
        
        function delete_dealer($a)
        {
            $del="delete from dealers where did='$a'";
            mysql_query($del);
        }

    }
?>
