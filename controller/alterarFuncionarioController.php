<?php 
require_once '../dao/funcionarioDAO.php';
require_once '../dto/funcionarioDTO.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$cargo = $_POST['cargo'];
$datanasc = date($_POST['datanasc']);


$funcionarioDTO = new funcionarioDTO();
$funcionarioDTO->setNome($nome);
$funcionarioDTO->setCpf($cpf);
$funcionarioDTO->setSexo($cpf);
$funcionarioDTO->setCargo($cargo);
$funcionarioDTO->setDatanasc($datanasc);

$funcionarioDAO = new funcionarioDAO();
$funcionarioDAO->alterarFuncionario($funcionarioDTO);

echo "
    <script>
        alert('Funcionario Alterado com sucesso!')
        window.location = '../view/listarAllfuncionario.php'
    </script>
";