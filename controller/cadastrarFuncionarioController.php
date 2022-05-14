<?php 
require_once '../dao/funcionarioDAO.php';
require_once '../dto/funcionarioDTO.php';
require_once '../dao/conexao/conexao.php';


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$perfil = $_POST['perfil'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['data'];

echo "$usuario <br>"; 
echo "$senha <br>";
echo "$perfil <br>";


 $funcionarioDTO = new funcionarioDTO();
 $funcionarioDTO->setNome($nome);
 $funcionarioDTO->setCpf($cpf);
 $funcionarioDTO->setCargo($cargo);
 $funcionarioDTO->setUsuario($usuario);
 $funcionarioDTO->setSenha($senha);
 $funcionarioDTO->setPerfil($perfil);
 $funcionarioDTO->setSexo($sexo);
 $funcionarioDTO->setDatanasc($datanasc);

$funcionarioDAO = new funcionarioDAO();
$funcionarioDAO->salvar($funcionarioDTO);

    echo "<script> alert('Funcionario cadastrado com sucesso1') 
                    window.location='../view/listarAllfuncionario.php'
    </script>";
        
        
        
        