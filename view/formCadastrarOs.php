<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Serviço</title>
</head>
<body>
    <h1>Cadastro de OS</h1>
    <form action="../controller/cadastrarOsController.php" method="post">
        <div>
            <label for="">Marca: </label>
        <input type="text" name="marca" id="marca">
        </div>
        <br>
        <div>
            <label for="">Modelo:</label>
        <input type="text" name="modelo" id="modelo">
        </div>
        <br>

        <div>
            <label for="">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="Celular">Celular</option>
            <option value="Desktop">Desktop</option>
            <option value="Notebook">Notebook</option>
        </select>
        </div>
        <br>

        <label for=""><p>Defeito</p></label>
        <textarea name="defeito" id="defeito" cols="30" rows="5"></textarea>

        <br>

        <label for=""><p>Soluçao</p></label>
        <textarea name="solucao" id="solucao" cols="30" rows="5" value="TEste de valor"> </textarea>
        <br>

        <label for=""><p>Valor do reparo: </p></label>
        <input type="text" name="preco" id="preco">
       
        <br>
        
        <label>Data de entrada: </label>
       <div>
        <input type="date" name="data" id="data">
       </div>

        <br>
        
        <div><input type="submit" value="Cadastrar"></div>
    </form>
</body>
</html>