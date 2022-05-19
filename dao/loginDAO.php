<?php 
require_once '../dao/conexao/conexao.php';
class LoginDAO{
    
    function login($usuario,$senha){

        $bd = new Conexao();
        $conexao = $bd->getInstance();

        $sql = $conexao->query("select u.user, p.nome from usuario u inner join perfil p 
        on u.perfil_idperfil = p.idperfil
        where u.user = '$usuario' and u.pass= '$senha' ;");

        $assoc = $sql->fetch_assoc();
        return $assoc;
        
        if(!$assoc){
           $msg =  $conexao->error;
           echo $msg;
        }
            
        
        
    }
    
}