<?php
    $host = '10.125.44.38';
    $senha_banco = 'sis@123#456';
    $usuario_banco = 'usuariosistema';
    $nome_banco = 'sistema';
    $port = 3306;

    $conexao = mysqli_connect($host,$usuario_banco,$senha_banco,$nome_banco,$port);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>