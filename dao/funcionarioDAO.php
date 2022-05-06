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

        //conexao com o banco
        $bd = new Conexao();
        $conexao =  $bd->getInstance();
        $sql = $conexao->query("insert into funcionario values ('$cpf','$nome','$cargo','$sexo','$datanasc')");

        return $sql;
        
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