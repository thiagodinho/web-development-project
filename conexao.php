<?php
    $server = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sorosneakers";

    $conexao = mysqli_connect($server, $usuario, $senha, $banco);
   
        if ($conexao)
        {
            echo "Conexão OK";
        }
        else
        {
            echo "Conexão errada";
        }

         // Verifica se o email já está cadastrado
    function verificarEmail($email) {
        global $conexao;
        $query = "SELECT COUNT(*) as total FROM funcionario WHERE email = '$email'";
        $result = mysqli_query($conexao, $query);
        $row = mysqli_fetch_assoc($result);
        return $row['total'] > 0;
}

// Verifica se o CPF já está cadastrado
    function verificarCPF($cpf) {
        global $conexao;
        $query = "SELECT COUNT(*) as total FROM funcionario WHERE cpf = '$cpf'";
        $result = mysqli_query($conexao, $query);
        $row = mysqli_fetch_assoc($result);
        return $row['total'] > 0;
}

?>