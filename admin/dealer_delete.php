<?php
  include("controller.php");
  $dd=new reqres();
  $dd->delete_dealer();
  
  header("location:dealer1.php");
?>
