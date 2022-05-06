<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de funcionario</title>
</head>
<body>
    <form action="../controller/cadastrarFuncionarioController.php" method="post">
        <div>
            <label for="">Nome:</label>
        <input type="text" name="nome" id="nome">
        </div>
        <br>
        <div>
            <label for="">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        </div>
        <br>

        <div>
            <label for="">Cargo:</label>
        <input type="text" name="cargo" id="nome">
        </div>
        <br>
        <div>
        Sexo:
       
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" value="M" id="m">
        <label for="f">Feminino</label>
        <input type="radio" name="sexo" value="F" id="f">
       </div> 
        
       <p>Data de nascimento: </p>
       <div>
        <input type="date" name="data" id="data">
       </div>
        <div><input type="submit" value="Cadastrar"></div>


    </form>
</body>
</html>