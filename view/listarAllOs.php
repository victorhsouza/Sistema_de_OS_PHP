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
    require_once '../dao/osDAO.php';
    $os = new osDAO();
    $todos = $os->getAllOs();

    ?>
    <h1>Ordem de serviço</h1>
    <table border="1">

        <tr>
            <td>OS</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Defeito</td>
            <td>Soluçao</td>
            <td>Preço</td>
            <td>Data de entrada</td>
            <td>Data de saida</td>
            <td>alterar</td>
            <td>Finalizar OS</td>
        </tr>
        <?php 
        foreach($todos as $unidade){
            echo "<tr>";
            echo   "<td> {$unidade["id_os"]} </td>";
            echo   "<td> {$unidade["marca"]} </td>";
            echo   "<td> {$unidade["modelo"]} </td>";
            echo   "<td> {$unidade["tipo"]} </td>";
            echo   "<td> {$unidade["defeito"]} </td>";
            echo   "<td> {$unidade["solucao"]} </td>";
            echo   "<td> {$unidade["preco"]} </td>";
            echo   "<td> {$unidade["data_i"]} </td>";
            echo   "<td> {$unidade["data_f"]} </td>";
            echo   "<td> <a href = 'formAlterarOs.php?id_os={$unidade['id_os']}'>alterar</a> </td>";
            echo   "<td> <a href= '../controller/excluirClienteController.php?' onclick=' return excluir()'>Finalizar </a> </td>";
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
