<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de funcionario</title>
    <style>
      body{
            font-family: arial;
            background-image: linear-gradient(to right, blue, dodgerblue);
            color: white;
}
.container{
    background-color: rgba(0,0,0, 0.7);
    position: absolute;
    top: 10%;
    left: 32%;
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

#perfil{
    width: 100%;
    height: 30px;
    border-radius: 10px;
}
    </style>
</head>
<body>
    <div class="container">
    <h1>Cadastro de Funcionarios</h1>
    <form action="../controller/cadastrarFuncionarioController.php" method="post">
        <div>
        <input type="text" name="nome" id="nome" class="input" placeholder="Nome e Sobrenome">
        </div>
        <br>
        <div>
        <input type="text" name="cpf" id="cpf" class="input" placeholder="CPF">
        </div>
        <br>

        <div>
        <input type="text" name="cargo" id="nome" class="input" placeholder="Cargo Ocupado">
        </div>
        <br>

        <div>
        <input type="text" name="usuario" id="usuario" class="input" placeholder="Usuario">
        </div>

        <div>
        <input type="text" name="senha" id="senha" class="input" placeholder="Senha">
        </div>
        <br>

        <div>
       <select name="perfil" id="perfil">
           <option value="1"> Administrador </option>
           <option value="2"> Funcionario </option>
       </select>
        </div>
        <br>
        <div>
        Sexo:
        <label for="m">Masculino</label>
        <input type="radio" name="sexo" value="M" id="m">
        <label for="f">Feminino</label>
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

</body>
</html>