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
    <a href="" class="navbar-brand fs-3 ms-3 text-white"><img src="img/logo4.png" alt="" width="100" height="100" class="navbar-right">Elas Frut</a>
  
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
<!-- contato -->
<section class="contato">
    <div class="container-mapa">
        <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235144.50406666775!2d-43.74250215220186!3d-22.94533302734439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9964a129dad35b%3A0xac6a29837a61855c!2sCentro%20de%20Distribui%C3%A7%C3%A3o%20CEASA-RJ!5e0!3m2!1spt-BR!2sbr!4v1695319404343!5m2!1spt-BR!2sbr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container contato-info">
            <div class="left-box">
                <div>
                    <i class="bi bi-geo-alt"></i>
                    <p>Centro de Distribuição CEASA-RJ Av. Brasil, 19.001 - Irajá,<br> Rio de Janeiro - RJ, 21230-000</p>
                </div>
                <div>
                    <i class="bi bi-envelope"></i>
                    <p>elasFrut@gmail.com</p>
                </div>
                <div>
                <i class="bi bi-telephone"></i>
                    <p>(21) 91234-1234</p>
                    <p>(21) 91234-1234</p>
                </div>
            
            </div>
            <div class="right-box">
                <form action="enviar-msg.php" method="post">
                <input type="text" placeholder="Nome" name="nome" required>
                <input type="text" placeholder="Email" name="email" required>
                <textarea name="msg" id="" cols="30" rows="10" placeholder="Mensagem" required></textarea>
                <button type="submit" class="btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="lead">Copyright &copy; 2023 Elas Frut</p>

        </div>
    </footer>
    <!-- /Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>




