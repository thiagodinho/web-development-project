<?php
// Estabelecer conexão com o banco de dados
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "sorosneakers";

$conn = mysqli_connect($server, $usuario, $senha, $banco);

// Verificar se a conexão foi estabelecida corretamente
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Receber os dados do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM funcionario WHERE EMAIL = '$email'";
$result = mysqli_query($conn, $sql);

// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result) == 1) {
    // Credencial de email encontrada, verificar a senha
    $row = mysqli_fetch_assoc($result);
    $senhaArmazenada = $row['SENHA'];

    // Comparar a senha fornecida com a senha armazenada
    if ($senha == $senhaArmazenada) {
        // Credenciais corretas, redirecionar para a página principal, por exemplo
        header("Location: interno.php");
        exit();
    } else {
        // Senha incorreta, redirecionar para a página de login com mensagem de erro
        header("Location: login.php?erro=senha");
        exit();
    }
} else {
    // Email não encontrado, redirecionar para a página de login com mensagem de erro
    header("Location: login.php?erro=email");
    exit();
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>


