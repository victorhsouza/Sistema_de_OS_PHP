<?php 
    $perfil = $_SESSION['perfil'];

    switch($perfil){
        case 'Administrador':
            echo "<div><a href='view/formCadastrarOs.php' class='link'> Cadastrar Ordem de serviço</a></div> ";
            echo "<div><a href='view/listarAllOs.php' class='link'> Listar Ordem de serviço</a></div>";
            echo "<div> <a href='view/formCadastrarCliente.php' class='link'> Cadastrar Cliente</a></div>";
            echo "<div><a href='view/listarAllCliente.php' class='link'> listar Clientes </a></div>";
            echo "<div><a href='view/formCadastrarFuncionario.php' class='link'> Cadastrar Funcionario</a></div>";
            echo "<div><a href='view/listarAllfuncionario.php' class='link'> Lista Funcionario</a></div> ";
            break;

        case 'Funcionario':
            echo "<div><a href='view/formCadastrarOs.php' class='link'> Cadastrar Ordem de serviço</a></div>";
            echo "<div><a href='view/listarAllOs.php' class='link'> Listar Ordem de serviço</a></div>";
            break;
            echo "<div><a href='view/formCadastrarCliente.php' class='link'> Cadastrar Cliente</a></div>";
            echo "<div><a href='view/listarAllCliente.php' class='link'> listar Clientes </a></div>";
    }
?>