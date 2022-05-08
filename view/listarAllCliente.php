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
    require_once '../dao/clienteDAO.php';
    $clientes = new clienteDAO();
    $todos = $clientes->getAllCliente();

    ?>
    <h1>Clientes</h1>
    <table border="1">

        <tr>
            <td>Cpf</td>
            <td>nome</td>
            <td>sexo</td>
            <td>data</td>
            <td>alterar</td>
            <td>excluir</td>
        </tr>
        <?php 
        foreach($todos as $cliente){
            echo "<tr>";
            echo   "<td> {$cliente["cpf"]} </td>";
            echo   "<td> {$cliente["nome"]} </td>";
            echo   "<td> {$cliente["sexo"]} </td>";
            echo   "<td> {$cliente ["datanasc"]} </td>";
            echo   "<td> <a href = 'formAlterarCliente.php?cpf={$cliente["cpf"]}'>alterar</a> </td>";
            echo   "<td> <a href= '../controller/excluirClienteController.php?cpf={$cliente["cpf"]}' onclick=' return excluir()'>excluir</a> </td>";
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
