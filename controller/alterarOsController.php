<?php 
require_once '../dao/osDAO.php';
require_once '../dto/osDTO.php';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$defeito = $_POST['defeito'];
$solucao = $_POST['solucao'];
$preco = $_POST['preco'];
$data = $_POST['data'];
$dataf = $_POST['dataf'];

$osDTO = new osDTO();
$osDTO->setMarca($marca);
$osDTO->setModelo($modelo);
$osDTO->setTipo($tipo);
$osDTO->setDefeito($defeito);
$osDTO->setSolucao($solucao);
$osDTO->setPreco($preco);
$osDTO->setData_i($data);
$osDTO->setData_f($dataf);

$osDAO = new osDAO();
$ok = $osDAO->alterarOs($osDTO);


    echo "
           <script>
                alert('OS alterada com sucesso')
                window.location = '../view/listarAllOs.php'
           </script>
    ";
