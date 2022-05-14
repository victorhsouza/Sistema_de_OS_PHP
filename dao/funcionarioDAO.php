<?php 
require_once '../dto/funcionarioDTO.php';
require_once '../dao/conexao/conexao.php';

class funcionarioDAO{

    public function salvar(funcionarioDTO $funcionarioDTO){

        $nome = $funcionarioDTO->getNome();
        $cpf = $funcionarioDTO->getCpf();
        $cargo = $funcionarioDTO->getCargo();
        $sexo = $funcionarioDTO->getSexo();
        $datanasc = $funcionarioDTO->getDatanasc();
        $usuario = $funcionarioDTO->getUsuario();
        $senha = $funcionarioDTO->getSenha();
        $perfil = $funcionarioDTO->getPerfil();
        

        //conexao com o banco
        $bd = new Conexao();
        $conexao =  $bd->getInstance();

        $stmt = $conexao->prepare("insert into usuario values(?, ?, ?)");
        $stmt->bind_param('ssi',$user,$pass,$perfil_idperfil);
        $user = $usuario;
        $pass = $senha;
        $perfil_idperfil = $perfil;
        $stmt->execute();

        $idusuario = $conexao->insert_id;

        $sql = $conexao->query("insert into funcionario value ('$cpf','$nome','$cargo','$sexo','$datanasc', $idusuario)");
        return $sql;

        if(!$sql){
            $mg =  $conexao->error;
            echo $mg;
        }
        
    }

    function setUsuario($usuario,$senha,$perfil){
        /*$usuario = $funcionarioDTO->getUsuario();
        $senha = $funcionarioDTO->getSenha();
        $perfil = $funcionarioDTO->getPerfil();*/
        $bd = new Conexao();
        $conexao =  $bd->getInstance();
        $sql = $conexao->query("insert into usuario values('$usuario', '$senha', $perfil)");
        return $sql;
        if(!$sql){
            $mg =  $conexao->error;
            echo $mg;
        }

    }

    function getAllFuncionario(){
        $bd = new Conexao();
        $conexao =  $bd->getInstance();
        $sql = $conexao->query(" select * from funcionario ");

        return $sql;
    }

    function getFuncionarioById($cpf){
        $bd = new Conexao();
        $conexao =  $bd->getInstance();
        $sql = $conexao->query(" select * from funcionario where cpf = '$cpf'");
        $assoc = $sql->fetch_assoc();

        return $assoc;
    }

    function alterarFuncionario(funcionarioDTO $funcionarioDTO){
        $nome = $funcionarioDTO->getNome();
        $cpf = $funcionarioDTO->getCpf();
        $cargo = $funcionarioDTO->getCargo();
        $sexo = $funcionarioDTO->getSexo();
        $datanasc = $funcionarioDTO->getDatanasc();

        $bd = new Conexao();
        $conexao =  $bd->getInstance();

        $sql = $conexao->query("update funcionario set nome = '$nome', cargo = '$cargo', sexo = '$sexo', datanasc = '$datanasc' where cpf = '$cpf' ;");
        return $sql; 
    }

    function excuirFuncionario($cpf){
        $bd = new Conexao();
        $conexao =  $bd->getInstance();

        $sql = $conexao->query("delete from funcionario where cpf = '$cpf'");
        return $sql; 
    }

}