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
    require_once '../dao/osDAO.php';
    require_once '../js/funcaoDAta.php';
    $os = new osDAO();
    $todos = $os->getAllOs();

    ?>
    <div class="container">
        <br>
    <a href= "../index.php">Inicio</a>
    <h1>Ordem de serviço</h1>
    <table class="table table-striped">

        <tr>
            <td>OS</td>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Defeito</td>
            <td>Soluçao</td>
            <td>Preço</td>
            <td>Cliente</td>
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
            echo   "<td> {$unidade["nome"]} </td>";
            echo   "<td> {$unidade["data_i"]} </td>";
            echo   "<td> {$unidade["data_f"]} </td>";
            echo   "<td> <a href = 'formAlterarOs.php?id_os={$unidade['id_os']}'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-clipboard2-plus' viewBox='0 0 16 16'>
                <path d='M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z'/>
                <path d='M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z'/>
                <path d='M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z'/>
              </svg></a> </td>";
            echo   "<td> <a href= '../controller/excluirClienteController.php?id_os={$unidade["id_os"]}' onclick=' return excluir()'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
          </svg></a> </td>";
            echo "</tr>";
        }
        ?>
    </div>
    
    
    </table>
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
