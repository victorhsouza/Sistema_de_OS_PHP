<?php 
include 'login/validaLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
    include 'view/menu.php';
    ?>

    <!-- <a href="view/formCadastrarCliente.php"> Cadastrar Cliente</a> <br>
    <a href="view/listarAllCliente.php"> listar Clientes</a> <br>
    <a href="view/formCadastrarOs.php"> Cadastrar Ordem de serviço</a> <br>
    <a href="view/listarAllOs.php"> Listar Ordem de serviço</a> <br>
    <a href="view/formCadastrarFuncionario.php"> Cadastrar Funcionario</a> <br>
    <a href="view/listarAllfuncionario.php"> Lista Funcionario</a> <br>
    <a href="view/formLogin.php"> Login</a> <br><-->
    
  <a href="controller/logoffController.php"> logout</a> <br> 

    <p> <?php  echo $_SESSION['perfil'] ?></p>



</body>
</html>