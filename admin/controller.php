<?php

    include("model.php");

    class reqres
    {
        function admin()
        {
            if(isset($_REQUEST['s']))
            {
                $a=$_REQUEST['fn'];
                $b=$_REQUEST['ln'];

                $i=$_REQUEST['un'];
                $j=$_REQUEST['pwd'];
                $k= new database();
                $k->admin($a,$b,$i,$j);
            }
        }



        function login()
        {
            if(isset($_REQUEST['s']))
            {
                $a=$_REQUEST['un'];
                $a1=$_REQUEST['pw'];
                $l= new database();
                $d=$l->login($a,$a1);

                if(mysql_num_rows($d)>0)
                {
                    header("location:home.php");    
                }
                else
                {
                    echo "faild";
                }
            }
        }




        function comp()
        {
            if(isset($_REQUEST['sub']))
            {
                $a=$_REQUEST['com'];

                $a1=$_FILES['log']['name'];

                $d=$_FILES['log']['tmp_name'];
                $b="upload/".$a1;
                move_uploaded_file($d,$b);

                $s= new database();
                $s->company($a,$b);
                header("location:companies.php");
            }

        }  


        function deal()
        {
            if(isset($_REQUEST['sub']))
            {

                $b=$_REQUEST['name'];
                $c=$_REQUEST['city'];
                $d=$_REQUEST['add'];
               $e=$_REQUEST['cn'];

                $j= new database();
                $j->dealer($b,$c,$d,$e);
                header("location:dealer1.php");
            }

        }


        function award()
        {
            if(isset($_REQUEST['awd']))
            {
                $a=$_REQUEST['cnam'];
                $b=$_REQUEST['mnam'];
                $c=$_REQUEST['vnt'];

                $a1=$_FILES['img']['name'];
                $d=$_FILES['img']['tmp_name'];
                $p="upload/".$a1;
                move_uploaded_file($d,$p);

                $e=$_REQUEST['yr']; 
                $f=$_REQUEST['anam']; 
                $g=$_REQUEST['des']; 

                $k= new database();
                $k->awd($a,$b,$c,$p,$e,$f,$g);


            }
        }

        function com()
        {
            if(isset($_REQUEST['com']))
            {
                $a=$_REQUEST['uid'];
                $b=$_REQUEST['sub'];
                $c=$_REQUEST['cm'];
                $s= new database();
                $s->compl($a,$b,$c); 
            } 

        }

        function scen()
        {
            if(isset($_REQUEST['sc']))
            {
                $a=$_REQUEST['id'];
                $b=$_REQUEST['name'];
                $c=$_REQUEST['add'];
                $d=$_REQUEST['add'];
                $e=$_REQUEST['city'];

                $j= new database();
                $j->scc($a,$b,$c,$d,$e);
            }
        }


        function rvww()
        {
            if(isset($_REQUEST['rw']))
            {
                $a=$_REQUEST['id'];
                $b=$_REQUEST['name'];
                $c=$_REQUEST['mdl'];
                $d=$_REQUEST['rvw'];

                $j= new database();
                $j->rvv($a,$b,$c,$d);
            }
        }


        function user_home()
        {
            $t= new database();
            $m=$t->show();
            return $m;
        }  


        function usr()
        {
            $t= new database();
            $m=$t->shw();
            return $m;
        }                     

        function dlr()
        {
            $t= new database();
            $m=$t->dlr();
            return $m;
        } 

        function ftr()
        {
            $t= new database();
            $m=$t->ftr();
            return $m;
        }

        function used()
        {
            $t= new database();
            $m=$t->used();
            return $m;
        }                    

        function user_edit()
        {
            if(isset($_REQUEST['e']))
            {
                $k=$_REQUEST['e'];
                $a= new database();
                $e = $a->user_edit($k);
                $l=mysql_fetch_array($e);
                return $l;
            }
        }
        function user_update()
        {

            if(isset($_REQUEST['u']))
            {
                $aa=$_REQUEST['e'];
                $bb=$_REQUEST['com'];


                $pp=$_FILES['log']['name'];
                $t=$_FILES['log']['tmp_name'];
                $p="upload/".$pp;
                move_uploaded_file($t,$p);


                $lo= new database();
                if($_FILES['log']['name']=="")
                {
                    $t=$_REQUEST['e'];
                    $dk= new database();
                    $dk->user_update($bb,$aa,$p);
                }


                header("location:brands.php");

            }
            $dk= new database();
            $dk->user_update($bb,$aa,$p);


        }


        function dealer_edit()
        {
            if(isset($_REQUEST['e']))
            {
                $k=$_REQUEST['e'];
                $a= new database();
                $e = $a->dealer_edit($k);
                $l=mysql_fetch_array($e);
                return $l;
            }
        }
        function de_update()
        {

            if(isset($_REQUEST['u']))
            {
                //$a=$_REQUEST['name'];
                //$b=$_REQUEST['city'];
                //$c=$_REQUEST['addd'];
               echo $d=$_REQUEST['c'];
                $m=$_REQUEST['e'];
                
                 $b=$_REQUEST['name'];
                $c=$_REQUEST['city'];
                $d=$_REQUEST['add'];
               $e=$_REQUEST['cn'];

                $r= new database();
                $r->de_update($b,$c,$d,$e,$m); 
                header("location:managedealers.php");    


            }
        }

        function delete_brand()
        {
            if(isset($_REQUEST['d']))
            {
                $a=$_REQUEST['d'];
                $de=new database();
                $de->delete_brand($a);
            }

        }

        function delete_dealer()
        {
            if(isset($_REQUEST['d']))
            {
                $a=$_REQUEST['d'];
                $de=new database();
                $de->delete_dealer($a);
            }

        }



    }
?>
