<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">

<style>
    .container{
        width: 40%;
    }
    body{
        background-color: blue;
    }
    .btn{
        background-color: dodgerblue;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="box-parent-login">
            <div class="well bg-white box-login">
                <h1 class="ls-login-logo">login</h1>
                <form role="form" action="../controller/loginController.php" method="post">
                    <fieldset>
         
                        <div class="form-group ls-login-user">
                            <label for="userLogin">Usuário</label>
                            <input class="form-control ls-login-bg-user input-lg" name="usuario" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário">
                        </div>
         
                        <div class="form-group ls-login-password">
                            <label for="userPassword">Senha</label>
                            <input class="form-control ls-login-bg-password input-lg" id="userPassword" name="senha" type="password" aria-label="Senha" placeholder="Senha">
                        </div>
         
                        
         
                        <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
                        
         
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    

    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>
    <?php 
        if(!empty($_GET['msg'])){
            echo "<script> alert('Usuario e/ou senha invalidos') </script>";
        }

    ?>

   
</body>
</html>