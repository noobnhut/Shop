<?php 
  include "./admin.php";
  
  $a = new admin();
  $username ="nhut";
  $password="nhut";

  if($a->loginAdmin($username,$password)==1)
  {
     echo "xong";
  }
  else
  {
    echo"sai";
  }
?>