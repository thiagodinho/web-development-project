<?php
    // Verifica se ocorreu um erro de email ou CPF já cadastrados
    $error = isset($_GET['error']) ? $_GET['error'] : '';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

    <title>Cadastro</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background: url(foto4.jpg) no-repeat;
        }

        .row {
            margin-top: 190px;
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
            background-color: transparent;
            backdrop-filter: blur(20px);
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background-color: white;
            border: 1px solid;
            color: black;
        }

        h1 {
            font-size: 3em;
            color: rgb(0, 0, 0);
        }

        h4 {
            color: black;
        }

        a {
            color: black;
            text-decoration: underline;
        }

        p{
            margin-top: -15px;
            font-weight: 600;
            margin-left: 150px;
            margin-bottom: -5px;
        }

    </style>
</head>
<body style="position: relative; z-index: 1;">
<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="logo3.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Cadastro</h1>
                <h4>Cadastre-se para acessar o sistema</h4>
                <form action="Cadastrar.php" method="POST">
                    <div class="form-row">
                        <div class="col-lg-6">
                            <input class="form-control my-3 p-4" type="text" name="Nome" id="Nome_user" placeholder="Nome"  >
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Sobrenome" name="sobrenome" id="sobrenome" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-6">
                            <input type="email" placeholder="E-mail" name="email" id="email" class="form-control my-3 p-4">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Senha" name="senha" id="senha" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <input type="text" id="cpf-input" placeholder="CPF" name="cpf" class="form-control my-3 p-4" maxlength="14">
                        </div>
                    </div>                    
                    <div class="form-row">
                        <div class="col-lg-12">
                            <button type="button" id="botao-cadastrar" onclick="Valida()" class="btn1 mt-3 mb-4">Cadastrar</button>
                        </div>
                    </div> 
                    <p>Já tem uma conta? <a id="tem-login" onclick='TelaLogin()' href="#">Faça login!</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>   


<script>
    var cpfInput 
    var linkCadastrar
    var cpf
    var Nome = ''
    var sobrenome = ''
    var email = ''
    var senha = ''
    //escopo de enventos

    //Limita somente números para o input do CPF
    cpfInput = document.getElementById('cpf-input');
    cpfInput.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
        cpf = this.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
        cpf = cpf.substring(0, 11); // Limita o CPF a 11 dígitos
        
        var formattedCpf = '';
        for (var i = 0; i < cpf.length; i++) {
            if (i === 3 || i === 6) {
                formattedCpf += '.';
            } else if (i === 9) {
                formattedCpf += '-';
            }
            formattedCpf += cpf.charAt(i);
        }
        
        this.value = formattedCpf;
    });

    // Função para ir para a tela de login ao clicar em "faça login"
    function TelaLogin(){ 
            window.location.href = 'login.php';
    }

    function Valida(){
        Nome = document.getElementById('Nome_user').value;
        sobrenome = document.getElementById('sobrenome').value;
        email = document.getElementById('email').value;
        senha = document.getElementById('senha').value;
        cpf = document.getElementById('cpf-input').value;

        if ((Nome != '') && (sobrenome != '') && (email != '') && (senha != '') && (cpf != '')){
            
            document.getElementById('botao-cadastrar').type = 'submit'
           // document.getElementById('botao-cadastrar').submit
        }
    }

</script>

<script>
    <?php
    // Verifica se houve um erro e exibe o pop-up correspondente
    if ($error === 'email_exist') {
        echo 'window.addEventListener("DOMContentLoaded", function() {
            alert("Não foi possível cadastrar os dados. O email informado já está cadastrado no sistema.");
        });';
    } elseif ($error === 'cpf_exist') {
        echo 'window.addEventListener("DOMContentLoaded", function() {
            alert("Não foi possível cadastrar os dados. O CPF informado já está cadastrado no sistema.");
        });';
    }
    ?>
</script>
</body>
</html>