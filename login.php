<?php
    // Verificar se há mensagens de erro na URL
    $erro = $_GET['erro'] ?? '';

    // Função para exibir a mensagem de erro genérica
    function exibirMensagemErro($erro) {
        if (!empty($erro)) {
            echo '<p class="text-danger">Dados incorretos. Por favor, tente novamente.</p>';
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background: url(foto4.jpg) no-repeat;
        }
        
        .row{
            margin-top: 190px;
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
            background-color: transparent;
            backdrop-filter: blur(20px);
        }

        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover{
            background-color: white;
            border: 1px solid;
            color: black;
        }

        h1{
            font-size: 3em;
            color: rgb(0, 0, 0);
        }

        h4{
            color: black;
        }

        a{
            color: black;
            text-decoration: underline;
        }

    </style>
  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="logo3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Bem-vindo!</h1>
                    <h4>Entre na sua conta</h4>
                    <form action="validacaologin.php" method="POST">
                        <div class="form-row">
                        <div class="col-lg-7">
                            <?php exibirMensagemErro($erro); ?>
                            <input type="email" placeholder="E-mail" name="email" class="form-control my-3 p-4" required>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="*********" name="senha" class="form-control  my-3 p-4" required>
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" id="botao-entrar" class="btn1 mt-3 mb-4">Entrar</button>
                            </div>
                        </div>
                        <a href="#">Esqueci a senha</a>
                        <p>Não tem uma conta? <a onclick='TelaCadastro()' href="#">Cadastre-se</a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script>
        function TelaCadastro(){ 
       window.location.href = 'cadastro.php';
    }
    </script>

    
</body>
</html>