<?php 
    $perfil = $_SESSION['perfil'];

    switch($perfil){
        case 'Administrador':
            echo "<a href='view/formCadastrarCliente.php'> Cadastrar Cliente</a> <br>";
            echo "<a href='view/listarAllCliente.php'> listar Clientes </a> <br>";
            echo "<a href='view/formCadastrarFuncionario.php'> Cadastrar Funcionario</a> <br>";
            echo "<a href='view/listarAllfuncionario.php'> Lista Funcionario</a> <br>";
            break;

        case 'Funcionario':
            echo "<a href='view/formCadastrarOs.php'> Cadastrar Ordem de serviço</a> <br>";

            echo "<a href='view/listarAllOs.php'> Listar Ordem de serviço</a> <br>";
            break;
    }
?>