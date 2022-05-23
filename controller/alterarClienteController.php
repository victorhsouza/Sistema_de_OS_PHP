<?php 

require_once '../dao/clienteDAO.php';
require_once '../dto/clienteDTO.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data = date($_POST['data']);
$sexo = $_POST['sexo'];

$clienteDTO = new clienteDTO();
$clienteDTO->setCpf($cpf);
$clienteDTO->setNome($nome);
$clienteDTO->setDatanasc($data);
$clienteDTO->setSexo($sexo);

$clienteDAO = new clienteDAO();
$clienteDAO->alterarCliente($clienteDTO);

echo "
        <script>
            alert('Alterado com sucesso!')
            window.location = '../view/listarAllCliente.php'
        </script>
";