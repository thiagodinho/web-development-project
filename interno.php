<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Produto</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
      }

    .container {
      max-width: 800px;
      margin: 50px auto;
      
    }
    h2 {
        font-size: 2.5em;
      text-align: center;
      margin-bottom: 30px;
    }

    h3{
      font-size: 1.2em;
      color:white;
      margin-top: 20px;
      margin-bottom: 80px;
    }

    .fixed-sidebar {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: 350px;
      background-color: black;
      padding: 20px;
      overflow-y: auto;
      text-align: center;
      font-size: 22px;
    }
    .sidebar h4 {
      margin-bottom: 20px;
    }
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    .sidebar ul li {
      margin-bottom: 10px;
    }
    .content {
      margin-left: 240px;
    }

    a{
      color: white;
      font-size: 22px;
    }

    .sidebar .logo {
  text-align:center ;
  margin-bottom: 20px;
  }

.sidebar .logo img {
  max-width: 60%;
  height: auto;
}

  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3 fixed-sidebar">
        <div class="sidebar">
            <div class="logo">
              <img src="logo4.png" alt="Logo da Empresa">
            </div>
            <h3>Olá, colaborador(a)!</h3>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Produtos</a></li>
              <li><a href="#">Pedidos</a></li>
              <li><a href="#">Clientes</a></li>
              <li><a href="#">Relatórios</a></li>
              <li><a href="#">Configurações</a></li>
              <li><a onclick='TelaLogin()' href="#">Sair</a></li>
            </ul>
          </div>       
      </div>
      <div class="col-md-9 content">
        <h2>Cadastro de Produto</h2>

        <form action="cadastrarproduto.php" method="POST">
          <div class="form-row">
            <div class="form-group col">
              <label for="marca">Marca:</label>
              <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group col">
              <label for="modelo">Modelo:</label>
              <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col">
              <label for="tamanho">Tamanho:</label>
              <input type="number" class="form-control" id="tamanho" name="tamanho" required>
            </div>
            <div class="form-group col">
              <label for="cor">Cor:</label>
              <input type="text" class="form-control" id="cor" name="cor" required>
            </div>
          </div>

          <div class="form-group">
            <label for="descricao">Descrição do Produto:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
          </div>

          <div class="form-row">
            <div class="form-group col">
              <label for="preco">Preço:</label>
              <input type="number" class="form-control" id="preco" name="valor" step="0.01" required>
            </div>
            <div class="form-group col">
              <label for="unidades">Unidades Disponíveis:</label>
              <input type="number" class="form-control" id="unidades" name="unidades" required>
            </div>
          </div>

          <button type="button" id="botao-cadastro" onclick="Valida()" class="btn btn-primary" >Cadastrar</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    var Marca = ''
    var Modelo = ''
    var Tamanho = ''
    var Cor = ''
    var Desc = ''
    var Valor = ''
    var Unidades = ''

    function TelaLogin(){ 
       window.location.href = 'login.php';
    }

function Valida(){
        Marca = document.getElementById('marca').value;
        Modelo = document.getElementById('modelo').value;
        Tamanho = document.getElementById('tamanho').value;
        Cor = document.getElementById('cor').value;
        Desc = document.getElementById('descricao').value;
        Valor = document.getElementById('preco').value;
        Unidades = document.getElementById('unidades').value;
        if ((Marca != '') && (Modelo != '') && (Tamanho != '') && (Cor != '') && (Desc != '') && (Valor != '') && (Unidades != '')){
            
            document.getElementById('botao-cadastro').type = 'submit'
           // document.getElementById('botao-cadastrar').submit
        }
    }

</script>  

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>