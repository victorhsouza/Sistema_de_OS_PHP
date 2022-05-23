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
       $cliente_cpf = $osDTO->getCliente_cpf();
       $preco = $osDTO->getPreco();
       $datai = $osDTO->getData_i();

       // conexao com o banco
        $bd = new Conexao();
        $conexao = $bd->getInstance();

        $sql = $conexao->query("insert into ordem_de_servico value(default, '$marca', '$modelo', '$tipo', '$defeito', '$solucao','$preco','$cliente_cpf', '$datai',null); ");
        if(!$sql){
            echo $conexao->error;
        }
        return $sql;
    }

    function getAllOs(){
        $banco = new Conexao();
        $conexao = $banco->getInstance();
        $sql = $conexao->query("select o.id_os,o.marca,o.modelo,o.tipo,o.defeito,o.solucao,o.preco,o.data_i,o.data_f, c.nome from ordem_de_servico o join cliente c on o.cliente_cpf = c.cpf;");
        if(!$sql){
            echo $conexao->error;
        }
        return $sql;
    }

    function getOsById($id){
        $banco = new Conexao();
        $conexao = $banco->getInstance();

        $sql = $conexao->query("select id_os,marca,modelo,tipo, defeito,solucao,preco,data_i,data_f from ordem_de_servico where id_os='$id'");
        $final = $sql->fetch_assoc();
        if(!$final){
            echo $conexao->error;
        }
        return $final;

    }

    function alterarOs(osDTO $osDTO){
        $id = $osDTO->getId_os();
        $marca = $osDTO->getMarca();
        $modelo =$osDTO->getModelo();
        $tipo =$osDTO->getTipo();
        $defeito =$osDTO->getDefeito();
        $solucao =$osDTO->getSolucao();
        $preco = $osDTO->getPreco();
        $datai = $osDTO->getData_i();
        $dataf = $osDTO->getData_f();

        // conexao com o banco

       $conexao = new mysqli("localhost", "root", "", "vitecinformatic");
       
        $sqlUpdate = "update ordem_de_servico set marca = '$marca',modelo = '$modelo', tipo = '$tipo', defeito = '$defeito', solucao = '$solucao', preco='$preco', data_i = '$datai', data_f = '$dataf' where id_os = '$id';";

        $sql = $conexao->query($sqlUpdate);
        return $sql;
        if(!$sql){
            echo $conexao->error;
        }
        
        
    }
}