<?php 

require_once '../dao/osDAO.php';
require_once '../dto/osDTO.php';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$defeito = $_POST['defeito'];
$solucao = $_POST['solucao'];
$preco = $_POST['preco'];
$datai = $_POST['data'];

$osDTO = new osDTO();
$osDTO->setMarca($marca);
$osDTO->setModelo($modelo);
$osDTO->setTipo($tipo);
$osDTO->setDefeito($defeito);
$osDTO->setSolucao($solucao);
$osDTO->setPreco($preco);
$osDTO->setData_i($datai);

$osDAO = new osDAO();
$ok = $osDAO->salvar($osDTO);
if($ok){
    echo "
        <script>
            alert('Ordem de serviço cadastrada com sucesso')
            window.location = '../view/listarAllOs.php'
        </script>
";

}
