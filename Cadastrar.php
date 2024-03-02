<?php
  include('conexao.php');

$Nome_user = $_POST['Nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

// Verifica se o email já está cadastrado
if (verificarEmail($email)) {
    header('Location: cadastro.php?error=email_exist');
    exit;
}

// Verifica se o CPF já está cadastrado
if (verificarCPF($cpf)) {
    header('Location: cadastro.php?error=cpf_exist');
    exit;
}

$sql = "INSERT INTO funcionario (Nome, sobrenome, email, senha, cpf) VALUES ('$Nome_user', '$sobrenome', '$email', '$senha', '$cpf')"; 
$RESULT = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao) != 0){
    header("Location: login.php?success=true");	
} else {
    header('Location: cadastro.php');
}

    
?>

    