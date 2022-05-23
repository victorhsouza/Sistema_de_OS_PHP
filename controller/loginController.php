<?php 
session_start();
require_once '../dao/loginDAO.php';

$usuario = isset($_POST['usuario'])?$_POST['usuario']: "";
$senha = ($_POST['senha']);

$loginDAO = new LoginDAO();
$login = $loginDAO->login($usuario, $senha);


if(!empty($login)){

    $_SESSION['usuario'] = $login['user'];
    $_SESSION['perfil'] = $login['nome'];
    header("Location: ../index.php");

}else{
    $msg = "Invalido";
    echo "<script>";
    echo " window.location='../view/formLogin.php?msg={$msg}'";
    echo "</script>";  
}
