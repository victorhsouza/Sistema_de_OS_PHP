<?php 
  class Conexao{

    public function getInstance(){
        $dbHost = "Localhost";
        $dbUsername = "root";
        $dbsenha = "";
        $dbnome = "vitecinformatic";

        $conexao = new mysqli($dbHost,$dbUsername,$dbsenha,$dbnome);
        return $conexao;
        if($conexao->connect_errno){
            echo "erro";
        }else{
            echo "Conexão efetuada com sucesso!";
        }
        
    }
}




