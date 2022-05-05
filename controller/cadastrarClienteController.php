<?php 
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$datanasc = date($_POST['data']);


$clienteDTO = new clienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setSexo($sexo);
$clienteDTO->setDatanasc($datanasc);


$clienteDAO = new clienteDAO();
$clienteDAO->salvar($clienteDTO);

    echo "<script>
            alert('Cadastro efetuado com sucesso')
            window.location='../view/listarAllCliente.php'
         </script>";
