<?php
ob_start();
//session_start();
//error_reporting(0);
include("model.php");


  class reg  
  {
      
         function user_insert()
      {
     if(isset($_REQUEST['s']))
    {
        $a=$_REQUEST['fn'];
        $b=$_REQUEST['ln'];
        $c=$_REQUEST['add'];
        $d=$_REQUEST['pn'];
        $e=$_REQUEST['stat'];
        $f=$_REQUEST['city'];
        $g=$_REQUEST['eadd'];
        $h=$_REQUEST['cnt'];
        $i=$_REQUEST['un'];
        $j=$_REQUEST['pwd'];
              $k= new database();
              $k->user_insert($a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
          }
      }
      function user_login()
      {
          if(isset($_REQUEST['s']))
          {
              $a=$_REQUEST['un'];
              $a1=$_REQUEST['pwd'];
              $l= new database();
              $d=$l->user_login($a,$a1);
              
              if(mysql_num_rows($d)>0)
              {
                    if($_REQUEST['r'])
            {
                setcookie("un",$a,time()+3600);
                setcookie("pwd",$a1,time()+3600);
            }
           $abc= mysql_fetch_array($d);
           $_SESSION['uid']=$abc[0];
           
                  $s=$_SESSION['username']=$a;
                  $s1=$_SESSION['password']=$a1;
                  //echo $s.$s1;
              
                header("Location:index.php");  
              }
              else
              {
                  echo "faild";
              }
          }
      }
       function add_p()
      {
          if(isset($_REQUEST['p']))
          {
              $uid=$_SESSION['uid'];
              $a=$_REQUEST['tl'];
              $b=$_FILES['pho']['name'];
              $t=$_FILES['pho']['tmp_name'];
              $p="admin/upload/".$b;
              move_uploaded_file($t,$p);
              $c=$_REQUEST['brand'];
              $d=$_REQUEST['mod'];
              $e=$_REQUEST['bt'];
              $e1=$_REQUEST['co'];
              $f=$_REQUEST['y'];
              $g=$_REQUEST['k'];
              $h=$_REQUEST['con'];
              $i=$_REQUEST['tra'];
              $j=$_REQUEST['uni'];
              $k=$_REQUEST['pr'];
              
              
              $z= new database();
              $z->add_p($uid,$a,$p,$c,$d,$e,$e1,$f,$g,$h,$i,$j,$k);
          }
      }
      function show_post()
    {
        $dd= new database();
        $dd1=$dd->show_post();
        return $dd1;
    }
    function del_post()
    {
        if($_REQUEST['d'])
        {
            $j=$_REQUEST['d'];
        $dd= new database();
        $dd->del_post($j);
        }
    }
    function edit()
    {
        $j=$_REQUEST['e'];
        $dd=new database();
        $kk=$dd->edit($j);
        $jk=mysql_fetch_array($kk);
        return $jk;
        
    }
   
    function add_up()
      {
          if(isset($_REQUEST['update']))
          {
              $a=$_REQUEST['tl'];
              $b=$_FILES['pho']['name'];
              $t=$_FILES['pho']['tmp_name'];
              $p="upload/".$b;
              move_uploaded_file($t,$p);
              $c=$_REQUEST['brand'];
              $d=$_REQUEST['model'];
              $e=$_REQUEST['bt'];
              $e1=$_REQUEST['co'];
              $f=$_REQUEST['y'];
              $g=$_REQUEST['k'];
              $h=$_REQUEST['con'];
              $i=$_REQUEST['tra'];
              $j=$_REQUEST['uni'];
              $k=$_REQUEST['pr'];
              $l=$_REQUEST['cn'];      
              $m=$_REQUEST['ei'];
              $n=$_REQUEST['cnu'];
              $o=$_REQUEST['st']; 
               
               $l=$_REQUEST['e'];
              $lo= new database();
              if($_FILES['pho']['name']=="")
              {
                  $t=$_REQUEST['e'];
                  $e=new database();
                  //$k=$e->add_up($a,$p,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$x);
                  $k=$e->add_up($a,$p,$c,$d,$e,$e1,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$x);
              
                  //$o=mysql_fetch_array($k);
                //echo   $lp=$o[7];
                
                 // $e->add_up($a,$p,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o);
                  
              }
             
              
             //header("location:sp.php");
            }
      }
      function feedback()
            {
                if(isset($_REQUEST['p']))
                    {
                        
                         $a=$_REQUEST['rname'];
                        $a1=$_REQUEST['cm'];
                        $b=$_REQUEST['eid'];
                        $c=$_REQUEST['fb'];
                        $k= new database();
                        $k->review($a,$a1,$b,$c);
                    
                    }
          }
          
          function show_feedback()
          {
              $k= new database();
              $sk=$k->show_review();
              return $sk;
              
          }
          function show_com()
          {
              $c=new database();
              $cm=$c->show_comp();
              return $cm;
          }
          function s_model()
          {
             
                  $a=$_REQUEST["t"];
                  $dd=new database();
                  $p=$dd->s_model($a);
                  return $p;
                  
                  
              
          }
          
          function show_m($a)
    {
        $dd= new database();
        $dd1=$dd->show_m();
        return $dd1;
    }
            function used()
        {
            $t= new database();
            $m=$t->used();
            return $m;
        } 
     
         
          
  }
?>

