<?php 
session_start();
session_destroy();
    echo "<script>";
    echo " window.location='../view/formLogin.php'";
    echo "</script>";  
?>