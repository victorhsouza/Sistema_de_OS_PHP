<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
   <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body>

    <div class="container">
        <h1>Cadastro de cliente</h1>
        <form action="../controller/cadastrarClienteController.php" method="post">
            <div>
               
            <input type="text" name="nome" id="nome" class="input" placeholder="Nome e Sobrenome">
            </div>

            <div>  
            <input type="text" name="cpf" id="cpf" class="input" placeholder="CPF">
            </div>
            <br>

            <div class="sexo">
            Sexo:
            <label for="m">Masculino</label>
            <input type="radio" name="sexo" value="M" id="m">
            <label for="f">Feminino</label>
            <input type="radio" name="sexo" value="F" id="f">
           </div> 
            
           <div>
            Data de nascimento: 
            <input type="date" name="data" id="data">
           </div>
    
            <div><input type="submit" value="Cadastrar" id="submit"></div>
    
    
        </form>
    </div>
    
</body>
</html>