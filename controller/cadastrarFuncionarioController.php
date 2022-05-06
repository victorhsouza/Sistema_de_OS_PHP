<?php 
require_once '../dao/funcionarioDAO.php';
require_once '../dto/funcionarioDTO.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['data'];

$funcionarioDTO = new funcionarioDTO();
$nome = $funcionarioDTO->setNome($nome);
$cpf = $funcionarioDTO->setCpf($cpf);
$cargo = $funcionarioDTO->setCargo($cargo);
$sexo = $funcionarioDTO->setSexo($sexo);
$datanasc = $funcionarioDTO->setDatanasc($datanasc);

$funcionarioDAO = new funcionarioDAO();
$funcionarioDAO->salvar($funcionarioDTO);
        echo "
            <script>
                alert('Funcionario cadastrado com sucesso')
                window.location = '../view/listarAllFuncionario.php
            </script>    
        ";