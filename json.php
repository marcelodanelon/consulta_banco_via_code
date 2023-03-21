
<?php
    include_once 'conexao.php';

    $sql = 'select * from clientes;';
    $resul = mysqli_query($conexao,$sql);
    $clientes = array();
    while($consulta=mysqli_fetch_assoc($resul)){
        // $id = $consulta['id'];
        // $codigo = $consulta['codigo'];
        // $nome = $consulta['nome'];
        // $email = $consulta['email'];
        // $empresa = $consulta['empresa'];
        // $cidade = $consulta['cidade'];
        // $phone = $consulta['phone'];
            
        // print_r($consulta);
        // echo "<br>";
        $clientes[] = $consulta;
    }

    $json_enconde = json_encode($clientes);
    
    print_r($json_enconde);

    mysqli_close($conexao);
?>