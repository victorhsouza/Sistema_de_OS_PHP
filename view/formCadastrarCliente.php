<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">

    <style>
        
body{
    font-family: arial;
    background-image: linear-gradient(to right, blue, dodgerblue);
    color: white;
}
.container{
    background-color: rgba(0,0,0, 0.7);
    position: absolute;
    top: 20%;
    left: 35%;
    padding: 30px;
    border-radius: 20px;
    color: white;
}
.input{
    margin-top: 20px;
    width: 100%;
    padding: 15px;
    box-sizing: border-box;
    border-radius: 5px;
    height: 30px;
}

#submit{
    width: 100%;
    padding: 10px;
    border: none;
    background-color: dodgerblue;
    cursor: pointer;
    color: white;
    border-radius: 20px;
}

#submit:hover{
    background-color: deepskyblue;
}

label{
    margin-top: 20px;
    color: color;
}
h1{
    text-align: center;
}
.sexo{
    color: white;
}
    </style>
  
  
</head>
<body>

    <div class="container ">
        <h1>Cadastro de cliente</h1>
        <form action="../controller/cadastrarClienteController.php" method="post">


            <div>
            <input type="text" name="nome" id="nome" class=" input form-control" placeholder="Nome e Sobrenome" required>
            </div>
            <br>
            <div>  
            <input type="text" name="cpf" id="cpf" class="input form-control cpf-mask" placeholder="CPF" required>
            </div>
            <br>

            <div class="sexo">
            Sexo:
            <label for="m" style="color:white"> Masculino </label>
            <input type="radio" name="sexo" value="M" id="m">
            <label for="f" style="color:white"> Feminino </label>
            <input type="radio" name="sexo" value="F" id="f">
           </div> 
            <br>
           <div>
            Data de nascimento: 
            <input type="date" name="data" id="data">
           </div>
           <br>
    
            <div><input type="submit" value="Cadastrar" id="submit"></div>

    
        </form>
    </div>

    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>   
</body>
</html>