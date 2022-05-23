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

    <style>
      body{
    font-family: arial;
    background-image: linear-gradient(to right, blue, dodgerblue);
}

div{
     
    border-radius: 15px;
    display: inline-flex;
    margin: 5px;
    text-align: center;
}

.link {
    background-color: dodgerblue;
    border-radius: 15px;
    padding: 15px;
    color: white;
    width: 120px;
}

.container{
    background-color: rgba(0,0,0, 0.7);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 30px;
    border-radius: 20px;
    color: white;
}
.link:hover{
    background-color: deepskyblue;
}

#logout{
    background-color: blue;
    color: white;
    padding: 10px;
    border-radius: 10px;
    position: absolute;
    top: 30%;
    left: 80%
}
#sobrenos{
  background-color: blue;
    color: white;
    padding: 10px;
    border-radius: 10px;
    position: absolute;
    top: 30%;
    left: 72%;
}

footer{

    text-align: center;
    color: white;
    position: absolute;
    top: 70%;
    left: 40%;
}
h2{
    color: white;
    position: absolute;
    top: 27%;
    left: 20%;
}
h1{
  text-align: center;
  color: white;
}
    </style>
    
</head>
<body>
  <header>
    <h1>Vitec informatica</h1>
    <h2> Seja bem vindo "<?php echo strtoupper($_SESSION['usuario'] )  ?>"</h2>
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
  <a href="view/sobreNos.php" id="sobrenos"> Sobre nos</a> <br>

  </main>
  
    <footer>
      <p>Perfil: <b><?php  echo $_SESSION['perfil'] ?></b></p>
        &copy; Vitec Informatic 
        
    </footer>
    



</body>
</html>