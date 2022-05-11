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
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body> 
    <div class="container">
    <h1>Alterar dados do cliente</h1>
    <form action="../controller/alterarClienteController.php" method="post">
        <div>
        <input type="text" name="nome" id="nome" class="input" value="<?php echo"{$cliente['nome']}" ?>">
        </div>

        <div>
        <input type="text" name="cpf" id="cpf" class="input" value="<?php echo $cliente['cpf'] ?>">
        </div>
        
       
       <div>
        Sexo: 
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" value="M" id="m" <?php echo $cliente['sexo'] == 'M'? 'checked': '' ?> >
        <label for="f">Feminino</label>
        <input type="radio" name="sexo" value="F" id="f" <?php echo $cliente['sexo']== 'F'? 'checked': '' ?>>
       </div> 
        
      
       <div>
       Data de nascimento:
        <input type="date" name="data" id="data" value="<?php echo $cliente['datanasc'] ?>">
       </div>
        

        <div><input type="submit" value="Alterar" id="submit"></div>

    </form>
    </div>
    
</body>
</html>