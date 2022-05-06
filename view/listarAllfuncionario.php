<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <a href= "../index.php">Inicio</a>
    <?php 
    require_once '../dao/funcionarioDAO.php';
    $funcionarios = new funcionarioDAO();
    $todos = $funcionarios->getAllFuncionario();

    ?>
    <h1>Listagem de funcionarios</h1>
    <table border="1">

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
