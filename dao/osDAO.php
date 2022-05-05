<?php 
require_once '../dto/osDTO.php';
require_once '../dao/conexao/conexao.php';
class osDAO{
    public function salvar(osDTO $osDTO){
       $marca = $osDTO->getMarca();
       $modelo = $osDTO->getModelo();
       $tipo = $osDTO->getTipo();
       $defeito = $osDTO->getDefeito();
       $solucao = $osDTO->getSolucao();
       $preco = $osDTO->getPreco();
       $datai = $osDTO->getData_i();

       // conexao com o banco
        $bd = new Conexao();
        $conexao = $bd->getInstance();

        $sql = $conexao->query("insert into ordem_de_servico value(default, '$marca', '$modelo', '$tipo', '$defeito', '$solucao','$preco', '$datai',null); ");
        if(!$sql){
            echo $conexao->error;
        }
        return $sql;
    }

    function getAllOs(){
        $banco = new Conexao();
        $conexao = $banco->getInstance();
        $sql = $conexao->query("select * from ordem_de_servico ;");
        if(!$sql){
            echo $conexao->error;
        }
        return $sql;
    }

    function getOsById($id){
        $banco = new Conexao();
        $conexao = $banco->getInstance();

        $sql = $conexao->query("select * from ordem_de_servico where id_os='$id'");
        $final = $sql->fetch_assoc();
        if(!$final){
            echo $conexao->error;
        }
        return $final;

    }

    function alterarOs(osDTO $osDTO){
        $marca = $osDTO->getMarca();
        $modelo =$osDTO->getModelo();
        $tipo =$osDTO->getTipo();
        $defeito =$osDTO->getDefeito();
        $solucao =$osDTO->getSolucao();
        $preco = $osDTO->getPreco();
        $datai = $osDTO->getData_i();
        $dataf = $osDTO->getData_f();

        // conexao com o banco

        $banco = new Conexao();
        $conexao = $banco->getInstance();

        $sql = $conexao->query("update ordem_de_servico set marca = '$marca',modelo = '$modelo', tipo = '$tipo', defeito = '$defeito', solucao = '$solucao', preco='$preco', data_i = '$datai', data_f = '$dataf'");
        if(!$sql){
            echo $conexao->error;
        }
    }
}