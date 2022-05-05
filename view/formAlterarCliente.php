<?php 
$cpf = $_GET['cpf'];
require_once '../dao/clienteDAO.php';
$clienteDAO = new clienteDAO();
$cliente = $clienteDAO->getClienteById($cpf);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body> 
    <form action="../controller/alterarClienteController.php" method="post">
        <div>
            <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo"{$cliente['nome']}" ?>">
        </div>
        <br>
        <div>
            <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $cliente['cpf'] ?>">
        </div>
        
        <p>Sexo: </p>
       <div>
           
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" value="M" id="m" <?php echo $cliente['sexo'] == 'M'? 'checked': '' ?> >
        <label for="f">Feminino</label>
        <input type="radio" name="sexo" value="F" id="f" <?php echo $cliente['sexo']== 'F'? 'checked': '' ?>>
       </div> 
        
       <p>Data de nascimento: </p>
       <div>
        <input type="date" name="data" id="data" value="<?php echo $cliente['datanasc'] ?>">
       </div>
        
        

        <div><input type="submit" value="Alterar"></div>

    </form>
</body>
</html>