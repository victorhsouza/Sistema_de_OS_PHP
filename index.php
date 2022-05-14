<?php 
include 'login/validaLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitec Informatic</title>
    <link rel="stylesheet" href="css/styleIndex.css">
</head>
<body>
  <header>
    <h1>Vitec informatica</h1>
    <h2> Seja bem vindo "<?php echo $_SESSION['usuario']  ?>"</h2>
  </header>

  <main>
  <div class="container">
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
    
   

    
  </div>
  <a href="controller/logoffController.php" id="logout"> logout</a> <br>
  <a href="view/sobreNos.php" > Sobre nos</a> <br>

  </main>
  
    <footer>
      <p>Perfil: <b><?php  echo $_SESSION['perfil'] ?></b></p>
        &copy; Vitec Informatic 
        
    </footer>
    



</body>
</html>