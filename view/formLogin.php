<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/loginController.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
        <label for="">Senha</label>
        <input type="password" name="senha">

        <input type ="submit" value="Login">

  <?php 
        if(!empty($_GET['msg'])){
            echo "<script> alert('Usuario e/ou senha invalidos') </script>";
        }

    ?>
    </form>
</body>
</html>