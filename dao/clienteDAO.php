<?php 
require_once '../dao/conexao/conexao.php';
class clienteDAO{
    
    public function salvar(clienteDTO $clienteDTO){
        $nome = $clienteDTO->getNome();
        $cpf = $clienteDTO->getCpf();
        $sexo = $clienteDTO->getSexo();
        $datanasc = $clienteDTO->getDatanasc();


        //INSERINDO NO BD
        $conexao = new mysqli("localhost", "root", "", "vitecinformatic");
       $cadastro =  $conexao->query("insert into cliente value ('$cpf','$nome','$datanasc','$sexo')");
        if(!$cadastro){
          echo " <script> 
                        document.alert('CPF ja cadastrado!')
                        window.location = '../view/formCadastrarCliente.php
                </script>";
        }

        return $cadastro;
    }

 

    function getClienteById($cpf){
        $conexao = new mysqli("localhost", "root", "", "vitecinformatic");
       $get =  $conexao->query("select * from cliente where cpf = '$cpf'");
       $final = $get->fetch_assoc();
       if(!$get){
        echo  $conexao->error;
       }
        return $final;
    }

    function alterarCliente(clienteDTO $clienteDTO){
        $nome = $clienteDTO->getNome();
        $cpf = $clienteDTO->getCpf();
        $sexo = $clienteDTO->getSexo();
        $datanasc = $clienteDTO->getDatanasc();

        $conexao = new mysqli("localhost", "root", "", "vitecinformatic");
       $alterar =  $conexao->query("update cliente set nome = '$nome', datanasc= '$datanasc', sexo = '$sexo' where cpf = '$cpf';  ");
       if(!$alterar){
        echo  $conexao->error;
       }
        return $alterar;
    }

    function getAllCliente(){
        $conexao = new mysqli("localhost", "root", "", "vitecinformatic");
       $todos =  $conexao->query("select * from cliente");
       
        return $todos;
    }

    function excluirCliente($cpf){
    $conexao = new mysqli("localhost","root","","vitecinformatic");
    $excluir = $conexao->query("delete from cliente where cpf = '$cpf'");
        return $excluir;
        if(!$excluir){
            echo  $conexao->error;
           }
    }
}