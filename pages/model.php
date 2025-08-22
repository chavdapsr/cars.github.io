<?php
    class database
    {
        function database()
        {
            mysql_connect("localhost","root","");
            mysql_select_db("dreamcar");
        }
        function user_insert($a,$b,$c,$d,$e,$f,$g,$h,$i,$j)
        {
            echo $ins="insert into user values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','active')";
            mysql_query($ins) or die(mysql_error()); 
        } 
        function user_login($a,$a1)
        {
            $sel="select * from user where uname='$a' and pwd='$a1' and status='active'";                                                         
            $s=mysql_query($sel);
            return $s;
        }
        function add_p($uid,$a,$p,$c,$d,$e,$e1,$f,$g,$h,$i,$j,$k)
        {
            $in="insert into add_post values('','$uid','$a','$p','$c','$d','$e','$e1','$f','$g','$h','$i','$j','$k')";
            mysql_query($in);
        }                                                                                       
        function edit($j)
        {
            $sel="select * from add_post where a_id='$j'";
            $kkk=mysql_query($sel) or die(mysql_error());
            return $kkk;
        }
        function show_post()
        {
            $sel=mysql_query("SELECT add_post.*,user.* FROM add_post inner join user on user.uid = add_post.uid");
            return $sel;
        }
        function del_post($j)
        {
            $sel="delete from add_post where a_id ='$j'";
            $s=mysql_query($sel) or die(mysql_error());
            header("location:sp.php");

            //echo $s;


        }
        function add_up($a,$p,$c,$d,$e,$e1,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$x)
        {
            echo $u="update add_post set add_title='$a',photo='$p',b_name='$c',model='$d',b_style='$e',color='$e1',year='$f',km_drive='$g',cond='$h',tran='$i',unique='$j',price='$k',c_name='$l',e_add='$m',c_num='$n',stat='$o' where a_id='$x'";
            mysql_query($u)or die(mysql_error());
        }

        function review($a,$a1,$b,$c)
        {


            $s="insert into feedback(uname,c_model,e_id,f_back) values('$a','$a1','$b','$c')";
            mysql_query($s) OR DIE(mysql_error());
        }

        function show_review()
        {
            $sr="select * from feedback ";
            $kk=mysql_query($sr);
            return $kk;

        }
        function show_comp()
        {
            $cm=mysql_query("select * from company_list");
            return $cm;
        }
        function s_model($a)
        {
            // echo $p1="select * from features where cid='$a'";
            $p1="SELECT features . * , company_list . * FROM features INNER JOIN company_list ON features.cid = company_list.cid where features.cid ='$a'";

            $p=mysql_query($p1) or die(mysql_error());
            return $p;
        }
        function s_model1($aa)
        {
            // echo $p1="select * from features where cid='$a'";
            //$p1="SELECT features . * , company_list . * FROM features INNER JOIN company_list ON features.cid = company_list.cid where features.cid ='$aa'";
            $p1="select * from features";

            $p=mysql_query($p1) or die(mysql_error());
            return $p;
        }

        function show_m($a)
        {
            $sel=mysql_query("select * from features where fid='$a'");
            return $sel;
        }
        function show_m1($a1s)
        {
            $sel=mysql_query("select * from features where fid='$a'");
            return $sel;
        }
        function used()
        {
            $sel=mysql_query("select * from add_post") or die (mysql_error());
            return $sel;
        }


    }

?>
