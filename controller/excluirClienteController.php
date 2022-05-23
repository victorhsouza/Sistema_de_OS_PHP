<?php
require_once '../dao/clienteDAO.php';
$cpf = $_GET['cpf'];


$clienteDAO  = new clienteDAO();
$clienteDAO->excluirCliente($cpf);

echo "<script>
    window.location ='../view/listarAllCliente.php'
    </script>";