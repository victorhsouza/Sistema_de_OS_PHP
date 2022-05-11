<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="../css/styleLogin.css">
</head>
<body>
    <header>
        <h1>Sistema de Ordem de Serviço</h1>
    </header>

    <main>
    <div class="container">
        <h1>Login</h1>
        <form action="../controller/loginController.php" method="post">
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
        <br>
        <input type="password" placeholder="Senha" name="senha">
        <input id="button" type ="submit" value="Login">
    </form>
    </div>
    </main>

    <footer>
        &copy; Vitec Informatic 
    </footer>


    <?php 
        if(!empty($_GET['msg'])){
            echo "<script> alert('Usuario e/ou senha invalidos') </script>";
        }

    ?>

   
</body>
</html>