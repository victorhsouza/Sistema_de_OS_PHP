<?php
require_once '../dao/FuncionarioDAO.php';
$cpf = $_GET['cpf'];


$funcionarioDAO  = new funcionarioDAO;
$funcionarioDAO->excuirFuncionario($cpf);

echo "<script>
    window.location ='../view/listarAllFuncionario.php'
    </script>";