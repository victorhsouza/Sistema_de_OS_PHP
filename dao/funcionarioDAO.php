<?php 
require_once '../dto/funcionarioDTO.php';
require_once '../dao/conexao/conexao.php';

class funcionarioDAO{

    public function salvar(funcionarioDTO $funcionarioDTO){
        try {
                $nome = $funcionarioDTO->getNome();
                $cpf = $funcionarioDTO->getCpf();
                $cargo = $funcionarioDTO->getCargo();
                $sexo = $funcionarioDTO->getSexo();
                $datanasc = $funcionarioDTO->getDatanasc();
                $usuario = $funcionarioDTO->getUsuario();
                $senha = $funcionarioDTO->getSenha();
                $perfil = $funcionarioDTO->getPerfil();
                
                $bd = new Conexao();
                $conexao =  $bd->getInstance();
                
                $sqli = $conexao->prepare("insert into usuario (user,pass,perfil_idperfil) values (?,?,?)");
                $sqli->bind_param('ssi', $usuario,$senha,$perfil);
                $sqli->execute();
                
                $idusuario = $conexao->insert_id;
                
                

                $sqli2 = $conexao->prepare("insert into funcionario value (?,?,?,?,?,?)");
                $sqli2->bind_param('ssssii',$cpf,$nome,$cargo,$sexo,$datanasc,$idusuario);
                $final= $sqli2->execute();
                return $final;

                if(!$final){
                    echo " <script> 
                                  document.alert('CPF ja cadastrado!')
                                  window.location = '../view/formCadastrarFuncionario.php'
                          </script>";
                  }
        
     
        } catch (mysqli_sql_exception $e) {
            $error = $e->getMessage();
            echo $error;
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
        $sql = $conexao->query("select * from funcionario where cpf = '$cpf'");
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