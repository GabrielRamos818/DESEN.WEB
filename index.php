<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Seja bem vindo!</title>

    <!-- Fonte do Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS da aplicação --> 
    <link rel="stylesheet" href="style.css">

    <!-- Script da aplicação --> 
    <script src="script.js"></script>

</head>
<body>

<!-- CABEÇALHO BOOTSTRAP-->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                <a href="/" class="navbar-brand">
                   <img src="img/logo.gif" alt="">    
            </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servidor.php">Meus produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
            </ul>
      </div>
    </nav>
</header>

<!-- DIVS PARA TÍTULO DO SITE (BEM VINDO!!) -->

<div class="bemVindo">
  <div id = "titulo">
    <h1> Seja bem vindo!! </h1>
  </div> 
</div>

<!-- DIV PARA SEPARAR O TÍTULO DO CONTEÚDO) -->

<div class="separaConteudo">  
</div>

<!-- CORPO DO SITE (CONTEÚDOS E IMAGEM) -->

  <section class = principal>
    <div class="container" id="corpo1">       
    <div class="conteudo" id="conteudo1">
      <h2> Cadastre seu produto em nosso site!!</h2>
      <p>Para adicionar seu produto aqui é facil, basta cadastrá-lo ao lado!</p>
      <img class = "logotipo"src="img/ICONE.gif" alt="">
    </div>
  </div>

  <!-- CORPO DO SITE (FORMULÁRIO DE CADASTRO) -->

  <div class="container" id="corpo2">
    <form action = "servidor.php" method = "POST">
      <fieldset>
        <legend> Cadastre seu produto </legend>
        <br><br>
        <div class="inputGeral">
          <input type="text" id ="nome" name = "nome" class = "inputs" required>  
          <label class = "labels" for="nome">Nome pessoal ou comercial</label>
        </div>
        <br><br>
        <div class="inputGeral">
          <input type="tel" id ="telefone" name = "telefone" class = "inputs" required>  
          <label class = "labels" for="telefone">Telefone</label>
        </div>
        <br><br>
        <div class="inputGeral">
          <input type="text" id ="CPF" name = "CPF" class = "inputs" required>  
          <label class = "labels" for="CPF">CPF / CNPJ</label>
        </div>
        <br><br>
        <div class="inputGeral">
          <input type="DATE" id ="data" name = "data" class = "inputs" required>  
          <label class = "labels" for="data"></label>
        </div><br><br>
        <div class="inputGeral">
          <input type="text" id ="nomeProduto" name = "nomeProduto" class = "inputs" required>
          <label class = "labels" for="nomeProduto">Descrição</label>  
        </div>
        <br><br>
        <div class="inputGeral"> 
          <input type="number" id ="quantidade" name = "quantidade" class = "inputs" required>  
          <label class = "labels" for="quantidade">Quantidade</label>
        </div><br><br>
        <div class="inputGeral">
          <input type="number" id ="preco" name = "preco" class = "inputs" required>  
          <label class = "labels" for="preco">Preço</label>
        </div>
        <br>
        <div class="text-center">
          <button class = "btn btn-primary"> Cadastrar </button>
        </div>
      </fieldset>
    
    </form>
  </div>

</section>



<!-- RODAPÉ --> 
    
</body>
</html>