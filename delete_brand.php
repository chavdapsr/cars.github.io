<?php
  include("controller.php");
  $dd=new reqres();
  $dd->delete_brand();
  
  header("location:companies.php");
?>
