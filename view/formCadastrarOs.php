<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Serviço</title>
    <link rel="stylesheet" href="../css/styleForm.css">
    <style>
      body{
            font-family: arial;
            background-image: linear-gradient(to right, blue, dodgerblue);
            color: white;
}
.container{
    background-color: rgba(0,0,0, 0.7);
    position: absolute;
    top: 60%;
    left: 50%;
    padding: 30px;
    border-radius: 20px;
    color: white;
    margin-bottom: 5%;
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

#tipo{
    width: 100%;
    height: 30px;
    border-radius: 10px;
}
    </style>
</head>
<body>
    <div class="container">
    <h1>Cadastro de OS</h1>
    <form action="../controller/cadastrarOsController.php" method="post">
        <div>
        <input type="text" name="marca" id="marca" placeholder="Marca do aparelho" class="input">

        <input type="text" name="modelo" id="modelo" placeholder="Modelo do aparelho" class="input">
        </div>
        <br>

        <div>
            <select name="tipo" id="tipo">
                <option value="Celular">Celular</option>
                <option value="Desktop">Desktop</option>
                <option value="Notebook">Notebook</option>
            </select>
        </div>
        <br>
        <div>
            <textarea name="defeito" id="defeito" cols="30" rows="5" placeholder="Defeito e condiçoes do aparelho"></textarea>
        </div>

        <div>
        <textarea name="solucao" id="solucao" cols="30" rows="5" placeholder="Soluçao encontrada"></textarea>
        </div>

        <div>
        <input type="text" name="cliente_cpf" id="cliente_cpf" placeholder="CPF do cliente" class="input">
        </div>
        
        <input type="text" name="preco" id="preco" placeholder="Valor do Reparo" class="input"> 
        
       <div>
        <label>Data de entrada: </label>
        <input type="date" name="data" id="data">
       </div>
        
        <div><input type="submit" value="Cadastrar" id="submit"></div>
    </form>
    </div>
    
</body>
</html>