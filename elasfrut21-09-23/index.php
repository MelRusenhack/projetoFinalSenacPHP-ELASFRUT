<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Elas Frut</title>
</head>

<body>
 <!-- navbar -->
  <nav class="navbar navbar-expand-md ">
    <a href="index.php" class="navbar-brand fs-3 ms-3 text-white"><img src="img/logo4.png" alt="" width="100" height="100" class="navbar-right">Elas Frut</a>
  
    <button class="navbar-toggler me-3 text-white" type="buttom" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <i class="bi bi-list bx-md "></i>
    </button>
<div class="container container-navbar">
    <div class="collapse navbar-collapse " id="navmenu">
    
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="listafornecedores.php" class="nav-link mx-3 text-white fs-5">Fornecedoras</a>
                    </li>

                    <li class="nav-item">
                        <a href="#facaparte" class="nav-link mx-3 text-white fs-5">Faça Parte</a>
                    </li>

                    <li class="nav-item">
                        <a href="listaprodut.php" class="nav-link mx-3 text-white fs-5">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a href="#noticias" class="nav-link mx-4 text-white fs-5">Notícias</a>
                    </li>

                </ul>
        </div>
    </div>
</nav>
 <!-- /navbar -->

<main>
 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner2.avif" class="d-block w-100" height="400" alt="...">
        <div class="carousel-caption d-none d-md-black">
            <h2>Quer anuciar?</h2>
            <p>Conte conosco, temos mais de 30 mil fornecedores anunciando.</p>
            <a href="#" class="main-btn">Ver fornecedoras</a>
        </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner3.webp" class="d-block w-100" height="400" alt="...">
      <div class="carousel-caption d-none d-md-black">
            <h2>Quer anuciar?</h2>
            <p>Conte conosco, temos mais de 30 mil fornecedores anunciando.</p>
            <a href="#" class="main-btn">Ver fornecedoras</a>
        </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner5.jpg" class="d-block w-100" height="400" alt="...">
      <div class="carousel-caption d-none d-md-black">
            <h2>Quer anuciar?</h2>
            <p>Conte conosco, temos mais de 30 mil fornecedores anunciando.</p>
            <a href="#" class="main-btn">Ver fornecedoras</a>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</main>

    <!-- Faça parte -->
    <section class="faca-mais" id="facaparte" >
        <div class="container">
            <div class="faca-mais-text">
               <h3>Faça parte da nossa lista de fornecedoras</h3>
               <p> Seja também uma de nossas fornecedoras e apareça para 
                milhares de compradores por dia, na maior vitrine de hortifruti 
                do Brasil. </p>
                <a href="cadfo.php" class="btn animate-btn">Faça Parte</a>
            </div>
            <div class="faca-mais-img">
                <img  src="img/img-index.png" alt="">
            </div>
       </div>
    </section>
     <!-- /Faça parte -->

      <!-- Quem somos nós -->
    <section class="sobre-nos" id="facaparte">
        <div class="container">
            <div class="sobre-img">
                <img src="img/imgindex/tomates.jpg" alt="" height="400" >
            </div>
            <div class="sobre-texto">
               <h3>Quem somos</h3>
               <p>ElasFrut é um site desenvolvido por mulheres que pretende ligar produtoras/fornecedoras do setor agrícola, especialmente de produtos de hortifruti, a compradores.  A ideia é construir uma listagem com as principais informações sobre o empreendimento como nome da empresa, contato, produtos ofertados, entre outros, de modo que o comprador possa pesquisar pela sua área geográfica o que lhe interessa.  
            Elas ampliam sua cartela de clientes e ganham mais visibilidade de mercado ao passo que seus compradores possam escolher o que melhor lhe cabe, e fomentar o empreendimento feminino, em uma mesma plataforma.    
            </p>
               
            </div>
            
       </div>
    </section>
     <!-- /Quem somos nós -->

    <!-- Contacte-nos -->
    <section class="bg text-light p-4">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-2 mb-md-0">Mande Uma Mensagem</h3>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Escreva sua mensagem" aria-label="mensagem">
                    <button class="btn bg-success" type="button">Enviar</button>
                </div>

            </div>
        </div>
    </section>
    <!-- /Contacte-nos -->

<!-- Boxes -->
<section class= "p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md">
                    <div class="card bg-success text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                Fornecedoras
                            </h3>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora dolores, sequi praesentium fugit quibusdam.
                            </p>
                            <a href="#" class="btn btn-info">Saiba mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-success text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                Produtos 
                            </h3>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora dolores, sequi praesentium fugit quibusdam.
                            </p>
                            <a href="#" class="btn btn-info">Saiba mais</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-success text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                Faça Parte
                            </h3>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora dolores, sequi praesentium fugit quibusdam.
                            </p>
                            <a href="#" class="btn btn-info">Saiba mais</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Boxes -->

    <!-- Footer -->
    <footer class="p-5 bg-success text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2023 Elas Frut</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
            
        </div>
    </footer>
    <!-- /Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




