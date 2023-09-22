<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/listfornecedor.css">
        <title>Lista de Fornecedores</title>
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

      <!-- Navbar Lateral -->
      <nav class="nav-lateral" >
                <a class="text-nav-lateral" href="index.php"><i class="bi bi-truck"></i> Home</a>
                <a class="text-nav-lateral" href="listaprodut.php"><i class="bi bi-bag-fill"></i> Produtos</a>
                <a class="text-nav-lateral" href="#"><i class="bi bi-share"></i> Indicar essa página</a>
                <a class="text-nav-lateral" href="#"><i class="bi bi-question-square"></i> Dúvidas</a>
                <a class="text-nav-lateral" href="termodeuso.php"><i class="bi bi-file-text"></i> Termos de Uso</a>
                <a class="text-nav-lateral" href="contato.php"><i class="bi bi-file-person-fill"></i> Contatos</a>
            </nav>
            <!-- /Navbar Lateral -->

<!-- Termo de Uso -->
<main class="main">
<h1 class="termo-uso">Termo De Uso</h1>
<div class="accordion accordion-flush" id="accordionFlushExample" >
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
      <h5>Termos de Uso e Política de Privacidade</h5>
      </button>
    </h2>
    <div id="flush-collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">O acesso a este site e a utilização dos serviços nele disponibilizados estão sujeitos aos termos e às condições esclarecidas a seguir e a todas as leis aplicáveis. Ao acessar e utilizar esse site, você aceita esses termos e condições, sem limitações ou condições especiais.
A disponibilização deste site é realizada ‘no estado’, estando este suscetível a instabilidades internas e externas, podendo ser descontinuado a qualquer momento.
Estes termos podem sofrer alterar de tempos em tempos. Portanto, solicitamos que os revisem periodicamente, a cada utilização do website.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
      <h5>Propriedade Intelectual</h5>
      </button>
    </h2>
    <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Este site e o seu código são protegidos pelas normas de propriedade intelectual, sendo proibida a sua extração, cópia (mesmo que parcial) ou modificação, salvo mediante autorização expressa e por escrito.
Todas as marcas registradas são propriedade dos respectivos titulares, protegidas nos termos da Lei.
O uso deste site não lhe concede qualquer licença ou garantia de uso, exceto pelo direito de uso, para fins pessoais, das ferramentas aqui disponibilizadas durante sua navegação neste site.</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
      <h5>Cookies</h5>
      </button>
    </h2>
    <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">PColetamos cookies para avaliar o funcionamento da plataforma e das nossas campanhas de marketing, bem como para facilitar as suas compras e utilização do site.</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
      <h5>Termos e Políticas de terceiros</h5>
      </button>
    </h2>
    <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Durante a utilização deste site, você poderá ser redirecionado a sites de terceiros, responsáveis pelo processamento do pagamento de suas compras. O uso destas ferramentas de terceiros está sujeito aos termos e às políticas destes terceiros, sobre os quais não possuímos ingerência. Os dados relacionados ao seu pagamento, como número de cartão de crédito, dentre outros, serão processados por estes terceiros de forma exclusiva, não ficando armazenados em nossos bancos de dados. Receberemos, contudo, a informação relacionada à aprovação de sua compra e liberação do seu pagamento.</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
      <h5>Política de proteção, segurança e compartilhamento de dados pessoais</h5>
      </button>
    </h2>
    <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Os dados pessoais são coletados e processados exclusivamente para fins de permitir a realização de transações através do nosso website, bem como para lhe encaminhar novidades e propagandas, caso assine a nosso newsletter. Dados também podem ser processados em trocas de mensagens entre nossos usuários e nossa equipe de vendas e de suporte. Por fim, os dados também serão processados com base em outras hipóteses autorizadas pela Lei Geral de Proteção de Dados, como, por exemplo, para fins de cumprimento de obrigações legais e contratuais e para fins de proteção de crédito</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>

  <div class="accordion-item ">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
      <h5>Contato</h5>
      </button>
    </h2>
    <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">O Usuário poderá, a qualquer momento, revogar seu consentimento quanto ao tratamento de seus dados pessoais. Esteja ciente de que, conforme nossa política de retenção de dados, seus dados poderão permanecer em nossos bancos de dados após tal solicitação de exclusão, desde que tal manutenção esteja de acordo com uma das hipóteses autorizadas pela Lei Geral de Proteção de Dados Pessoais.</div>
    </div>
  </div>

</div>







</main>


            <!-- Footer -->
            <footer class="footer bg-success text-white text-center">
            
                Copyright &copy; 2023 Elas Frut

                <!--  Ajustar botão pois esta ficando em cima do sobre (Rita)
                    
                <a href="#" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>  -->
            
            </footer>
            <!-- /Footer -->        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>  
    </body>
</html>