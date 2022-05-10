<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body{
            font-family: arial;
            background-image: linear-gradient(to right, gray, black);
        }
        .container{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
            text-align: center;
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
        }
        input#button{
            background-color: dodgerblue;
            border: none;
            margin-top: 15px;
            border-radius: 15px;
            color: white;
            font-size: 15px;
            width: 50%;
        }
        #button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        h1{
            text-align: center;
            font-family: arial;
            color: white;
        }

        footer{

            text-align: center;
            color: white;
            position: absolute;
            top: 80%;
            left: 44%;
        }


    </style>
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