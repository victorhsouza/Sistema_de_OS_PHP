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
      .input{
          margin-bottom: 10px;
      }
    </style>
</head>
<body>
    <div class="container">
    <h1>Cadastro de OS</h1>
    <form action="../controller/cadastrarOsController.php" method="post">
        <div>
        <input type="text" name="marca" id="marca" placeholder="Marca do aparelho" class="input">
        </div>
        <div>
        <input type="text" name="modelo" id="modelo" placeholder="Modelo do aparelho" class="input">
        </div>

        <div>
            <select name="tipo" id="tipo" class="input">
                <option value="Celular" class="input">Celular</option>
                <option value="Desktop" class="input">Desktop</option>
                <option value="Notebook" class="input">Notebook</option>
            </select>
        </div>

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