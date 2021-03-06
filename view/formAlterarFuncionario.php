<?php 
$cpf = $_GET['cpf'];
require_once '../dao/funcionarioDAO.php';
$funcionarioDAO = new funcionarioDAO;
$funcionario = $funcionarioDAO->getFuncionarioById($cpf);

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
    <h1>Alterar dados do Funcionario</h1>
    <form action="../controller/alterarFuncionarioController.php" method="post">
        <div>
        <input type="text" name="nome" id="nome" class="input" value="<?php echo $funcionario['nome'] ?>">
        </div>
        <br>
        <div>
        <input type="text" name="cpf" id="cpf" class="input" value="<?php echo $funcionario['cpf'] ?>">
        </div>

        <div>
        <input type="text" name="cargo" id="cargo" class="input" value="<?php echo $funcionario['cargo']?>">
        </div>
        <br>
        
        <div>
           <p>Sexo: </p>
           
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" value="M" id="m" <?php echo $funcionario['sexo'] == 'M'? 'checked': '' ?> >
        <label for="f">Feminino</label>
        <input type="radio" name="sexo" value="F" id="f" <?php echo $funcionario ['sexo']== 'F'? 'checked': '' ?>>
       </div> 
        
       
       <div>
        Data de nascimento:
        <input type="date" name="data" id="data" value="<?php echo $funcionario['datanasc'] ?>">
       </div>
        <br>

        <div><input type="submit" value="Alterar" id="submit"></div>

    </form>
    </div>


</body>
</html>