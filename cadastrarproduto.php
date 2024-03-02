<?php
    include("conexao.php");
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $unidades = $_POST['unidades'];

    $sql = "INSERT INTO produto (marca, modelo, tamanho, cor, descricao, valor, unidades)
            VALUES ('$marca', '$modelo', '$tamanho', '$cor', '$descricao', '$valor', '$unidades')"; 
    
    $result = mysqli_query($conexao, $sql);

    if ($result) {
        // Produto cadastrado com sucesso
        echo "<script>alert('Produto cadastrado com sucesso!'); window.location.href = 'interno.php';</script>";
    } else {
        // Erro no cadastro do produto
        echo "<script>alert('Erro no cadastro do produto. Por favor, tente novamente.'); window.location.href = 'interno.php';</script>";
    } 
?>

