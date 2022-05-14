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
$nome = $funcionarioDTO->setNome($nome);
$cpf = $funcionarioDTO->setCpf($cpf);
$cargo = $funcionarioDTO->setCargo($cargo);
$usuario = $funcionarioDTO->setUsuario($usuario);
$senha = $funcionarioDTO->setSenha($senha);
$perfil = $funcionarioDTO->setPerfil($perfil);
$sexo = $funcionarioDTO->setSexo($sexo);
$datanasc = $funcionarioDTO->setDatanasc($datanasc);

$funcionarioDAO = new funcionarioDAO();
$salvar = $funcionarioDAO->salvar($funcionarioDTO);
$user = $funcionarioDAO->setUsuario($funcionarioDTO);
        if($salvar && $user){
            echo "
            <script>
                alert('Funcionario cadastrado com sucesso')
                window.location = '../view/listarAllFuncionario.php
            </script>    
        ";
        }else{
            echo "Deu bom nao";
            $bd = new Conexao();
            $conexao = $bd->getInstance();
            if(!isset($conexao->connect_errno)){
                return $conexao->error;
            }
        }
        
        
        