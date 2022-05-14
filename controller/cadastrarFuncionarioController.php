<?php 
require_once '../dao/funcionarioDAO.php';
require_once '../dto/funcionarioDTO.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['data'];


$funcionarioDTO = new funcionarioDTO();
$nome = $funcionarioDTO->setNome($nome);
$cpf = $funcionarioDTO->setCpf($cpf);
$cargo = $funcionarioDTO->setCargo($cargo);
$usuario = $funcionarioDTO->setUsuario($usuario);
$senha = $funcionarioDTO->setSenha($senha);
$perfil = $funcionarioDTO->setPerfil($perfil);
$sexo = $funcionarioDTO->setSexo($sexo);
$datanasc = $funcionarioDTO->setDatanasc($datanasc);

$funcionarioDAO = new funcionarioDAO();
$funcionarioDAO->salvar($funcionarioDTO);
//$funcionarioDAO->setUsuario($usuario,$senha,$perfil);

        echo "
            <script>
                alert('Funcionario cadastrado com sucesso')
                window.location = '../view/listarAllFuncionario.php
            </script>    
        ";
        
        