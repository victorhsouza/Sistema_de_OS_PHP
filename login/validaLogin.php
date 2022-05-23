<?php 
session_start();
if(!isset($_SESSION['usuario'])){
    echo "<script>";
     echo "window.location = 'view/formLogin.php'";
      echo  "</script>";
}
?>