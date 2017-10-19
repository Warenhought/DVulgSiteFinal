<!DOCTYPE html>

<html lang="en">

  <head>

    <title>Home DVulg</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link href="css/round-about.css" rel="stylesheet">


  </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">DVulg</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
    <div class="jumbotron">
        <div align="center">
            <img class="rounded-circle" src="http://www.cursou.com.br/wp-content/uploads/2015/05/Curso-de-Estrat%C3%A9gia-de-Neg%C3%B3cios-200x200.jpg" alt="">
        </div>
        <h1 class="display-4" align="center">Bem Vindo</h1>
    </div>
    
    <br/><br/>
    <div class="row" >
     <div class="container">
      <div class="clearfix visible-xs"></div>
        <h1 class="display-4" >Portfólio</h1>
        <h5 class="lead" >Frase aleatório, não preste muita atenção.</h5>
        <hr class="my-4">
     </div>
    </div>
     <div class="container" align="center">
      <div class="row" >
        <div class="col-lg-3 portfolio-item">    
          <div class="card h-100">
              <img class="card-img-top" src="imagem/resized_318x180/projeto1.jpg">
                <div class="card-body">
                  <h4 class="card-title">Primeiro Projeto</h4>
                  <p class="card-text">"Comece de onde você está. Use o que você tiver. Faça o que você puder".</p>
                  <a href="#" class="btn btn-primary">+ Detalhes</a>
                </div>
          </div>
        </div>
          
       <div class="col-lg-3 portfolio-item">
            <div class="card h-100" >
                <img class="card-img-top" src="imagem/resized_318x180/projeto2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Segundo Projeto</h4>
                  <p class="card-text">"A distância entre a insanidade e a genialidade é medida pelo sucesso."</p>
                  <a href="#" class="btn btn-primary" >+ Detalhes</a>
                </div>
            </div>
        </div>
          
        <div class="col-lg-3 portfolio-item">  
            <div class="card h-100">
                <img class="card-img-top" src="imagem/resized_318x180/projeto3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Terceiro Projeto</h4>
                  <p class="card-text">"Se você está atravessando um inferno, continue atravessando".</p>
                  <a href="#" class="btn btn-primary">+ Detalhes</a>
                </div>
           </div> 
        </div>
          
        <div class="col-lg-3 portfolio-item">  
            <div class="card h-100">
                <img class="card-img-top" src="imagem/resized_318x180/projeto4.jpg" alt="Card image cap" >
                <div class="card-body">
                  <h4 class="card-title">Quarto Projeto</h4>
                  <p class="card-text">"O ponto de partida de qualquer conquista é o desejo".</p>
                  <a href="#" class="btn btn-primary">+ Detalhes</a>
                </div>
           </div> 
        </div>
   </div>  
    <div class="container" align="left"> 
    
        <h1 class="display-4">Orçamento</h1>
        <h5 class="lead">Ficou interessado em meus serviços? Solicite um orçamento, é grátis!</h5>
        <hr class="my-4">
        
        <div class="col-sm-10" >
            <p >Nome <sub style="vertical-align: super" class="text-danger">*</sub></p>
            <input type="text" name="nome" class="form-control"/>
        </div><br/>
        
        <div class="col-sm-10" >
            <p >Email <sub style="vertical-align: super" class="text-danger">*</sub></p>
            <input type="text" name="email" class="form-control"/>
        </div><br/>
        
        <div class="col-sm-10" >
            <p >Informação/Mensagem <sub style="vertical-align: super" class="text-danger">*</sub></p>
            <textarea type="text" name="mensagem" class="form-control"> </textarea><br/>
        </div>
        
         <p><input type="checkbox" name="pressa" value="pressa"> Tem pressa no projeto?</p>
         <a href="#" class="btn btn-primary">Enviar</a>
    </div>
  </div>
  <br/>
  <br/>  

  <footer class="py-1 bg-dark ">
   <nav class="navbar navbar-expand-md" >
        <div class="container-fluid">
          <p class="m-0 text-left text-white">Copyright &copy; 2017</p>
          <p class="m-0 text-right text-white">Desenvolvimento DVulg</p>

        </div>
    </nav>
  </footer>
   

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
