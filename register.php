<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE PRODUTO </title>

     <!-- Fonte do Google fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- CSS da aplicação --> 
<link rel="stylesheet" href="style2.css">

<!-- Script da aplicação --> 
<script src="script.js"></script>

</head>
<body>
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
                <a class="nav-link" href="register.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servidor.php">Meus produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Registrar</a>
              </li>
            </ul>
        </div>
    </nav>
</header>

<div class="principal">
    <div class="texto">
        <div class="titulo">
          <p>REI DO ESTOQUE.COM.BR</p>
          <h1>CADASTRE SEU PRODUTO!</h1> 
          <p class="information">Organize seu estoque conosco! Com os Imperadores do estoque é possível armazenar seus produtos com segurança, praticidade e com muita confiança!</p>
          <a class = "cadastreAqui" href ="#conteudo"> Cadastre agora</a>
        </div>
        <div class="redesSociais">

          <div><a href="https://gmail.google.com/"><img src="img/gmail.png" alt="" width="70" height="70"></a></div> <br><br>
          <div><a href="https://twitter.com/frecbms"><img src="img/twitter.png" alt="" width="70" height="70"></a></div> <br><br>
          <div><a href="https://www.instagram.com/ifms.cb/?hl=pt-br"><img src="img/instagram.png" alt="" width="70" height="70"></a></div> <br><br>
          <div><a href="https://www.facebook.com/ifms.cb"><img src="img/facebook.png" alt="" width="70" height="70"></a></div> <br><br>

        </div>
    </div>
</div>

<section class ="conteudo" id="conteudo">
    <div class = "imagem1"> <img src="https://image.freepik.com/vetores-gratis/conceito-de-computacao-em-nuvem_1284-4091.jpg" alt=""></div>
    <div class = "formulario" id="formulario">
        <form action="index.php" method="POST"> 
          <fieldset>
             <legend> Cadastro </legend>
             <br><br>
             <div class="inputGeral">
               <input type="text" id ="nome" name = "nome" class = "inputs" required>  
               <label class = "labels" for="nome">Nome do produto</label>
             </div>
             <br><br>
             <div class="inputGeral">
               <input type="text" id ="CNPJ" name = "cnpj" class = "inputs" required>  
               <label class = "labels" for="CNPJ">CNPJ</label>
             </div>
             <br><br>
             <div class="inputGeral">
               <input type= "number" id ="preco" name = "preco" class = "inputs" required>
               <label class = "labels" for="preco">preço</label>  
             </div>
             <br><br>
             <div class="inputGeral"> 
               <input type="text" id ="provedor" name = "provedor" class = "inputs" required>  
               <label class = "labels" for="provedor">Provedor</label>
             </div>
             <br><br>
             <div class="inputGeral"> 
               <input type="text" id ="descricao" name = "descricao" class = "inputs" required>  
               <label class = "labels" for="descricao">Descrição</label>
             </div>
             <br><br>
             <div class="text-center">
               <button class = "btn btn-primary CADASTRE"> Cadastrar </button>
             </div>
           </fieldset>
        </form>
    </div>
</section>
    
</body>
</html>