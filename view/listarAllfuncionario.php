<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        body{
            font-family: arial;
            background-image: linear-gradient(to right, blue, dodgerblue);
       
        }

        .container{
            margin-top: 5%;
            background-color: aliceblue;
            border-radius: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
    
    <?php 
    require_once '../dao/funcionarioDAO.php';
    $funcionarios = new funcionarioDAO();
    $todos = $funcionarios->getAllFuncionario();

    ?>

    <div class="container">
    <br>
    <a href= "../index.php">Inicio</a>
    <h1>Listagem de funcionarios</h1>
    <table class="table table-striped">

        <tr>
            <td>Cpf</td>
            <td>nome</td>
            <td>Cargo</td>
            <td>sexo</td>
            <td>data</td>
            <td>alterar</td>
            <td>excluir</td>
        </tr>
        <?php 
        foreach($todos as $funcionario){
            echo "<tr>";
            echo   "<td> {$funcionario["cpf"]} </td>";
            echo   "<td> {$funcionario["nome"]} </td>";
            echo   "<td> {$funcionario["cargo"]} </td>";
            echo   "<td> {$funcionario["sexo"]} </td>";
            echo   "<td> {$funcionario["datanasc"]} </td>";
            echo   "<td> <a href = 'formAlterarFuncionario.php?cpf={$funcionario["cpf"]}'>alterar</a> </td>";
            echo   "<td> <a href= '../controller/excluirFuncionarioController.php?cpf={$funcionario["cpf"]}' onclick=' return excluir()'>excluir</a> </td>";
            echo "</tr>";
        }
        ?>
    
    </table>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        function excluir(){
            var confirmar = confirm('Tem certeza que deseja excluir o registro?')
            if(confirmar){
                return true
            }else{
                return false
            }
        }
    </script>
</body>
</html>
