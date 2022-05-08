<?php 
$id = $_GET['id_os'];
require_once '../dao/osDAO.php';
$osDAO = new osDAO();
$os = $osDAO->getOsById($id);
print_r($os);

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
<h1>Alterar OS</h1>
    <form action="../controller/alterarOsController.php" method="POST">
        <label> Numero da OS: </label>
        <input type="hidden" name="id" value= "<?php echo $id  ?> read-only" > 

        <div>
            <label for="">Marca: </label>
        <input type="text" name="marca" id="marca" value = "<?php echo $os['marca']  ?>">
        </div>
        <br>
        <div>
            <label for="">Modelo:</label>
        <input type="text" name="modelo" id="modelo" value = "<?php echo $os['modelo']  ?>">
        </div>
        <br>

        <div>
            <label for="">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="Celular" <?php echo $os['tipo'] == 'Celular' ? 'selected' : '' ?>>Celular</option>
            <option value="Desktop" <?php echo $os['tipo'] == 'Desktop' ? 'selected' : '' ?>>Desktop</option>
            <option value="Notebook" <?php echo $os['tipo'] == 'Notebook' ? 'selected' : '' ?>>Notebook</option>
        </select>
        </div>
        <br>

        <label for=""><p>Defeito</p></label>
        <textarea name="defeito" id="defeito" cols="30" rows="5"><?php echo $os['defeito'] ?></textarea>

        <br>

        <label for=""><p>Soluçao</p></label>
        <textarea name="solucao" id="solucao" cols="30" rows="5"><?php echo $os['solucao'] ?></textarea>
        <br>

        <label for=""><p>Valor do reparo: </p></label>
        <input type="text" name="preco" id="preco" value = "<?php echo $os['preco']  ?>">
       
        <br>
        
        <label>Data de entrada: </label>
       <div>
        <input type="date" name="data" id="data" value = "<?php echo $os['data_i']  ?>">
       </div>

        <br>

        <label>Data de saida: </label>
       <div>
        <input type="date" name="dataf" id="dataf" value ="<?php echo $os['data_f'] ?>">
       </div>

        <br>
        
        <div><input type="submit" value="Alterar"></div>
    </form>
</body>
</html>