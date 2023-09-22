<?php 
include('conexao.php');
$sql = "select * from tblcadfornecedor";
$qry = mysqli_query($mysqli,$sql);

?>
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
    <link rel="icon" href="img/logo4.png">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark py-3">
        <div class="container">
            <img src="img/logo4.png" alt="" width="50" height="50" class="navbar-right">
            <a href="index.php" class="navbar-brand mx-3">Elas Frut</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="listafornecedores.php" class="nav-link">Fornecedores</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php #facaparte" class="nav-link">Faça Parte</a>
                    </li>

                    <li class="nav-item">
                        <a href="#noticias" class="nav-link">Notícias</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php #quemsomos" class="nav-link">Quem Somos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->

    <!-- Navbar Lateral -->
    <nav class="nav-lateral" >
        <a class="text-nav-lateral" href="listaprodut.php"><i class="bi bi-bag-fill"></i> Produtos</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-truck"></i> Fornecedores</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-share"></i> Indicar essa pagina</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-question-square"></i> Duvidas</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-file-text"></i> Termos de Uso</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-file-person-fill"></i> Contatos</a>
    </nav>
<!-- /Navbar Lateral -->

<main class="main">

    <form action="">
        <div class="btn-pesquisa">
            <input name="busca" type="text" placeholder="Pesquisar" class="pesqui">
            <button type="submit " class="lupa"><i class="bi bi-search"></i></button>
        </div> 
    </form>
    
    <table class="table">
        <thead>
       <!--     <div class="title-table">
            <tr >
                <th scope="col">Razão Social</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cidade</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Telefone</th>
               
            </tr>
            </div>  -->
            <?php
                if(!isset($_GET['busca'])) { 
            ?>
            <!-- <tr>
                <td>Digite Algo Para Pesquisar...</td>
            </tr> -->

            <?php 
                } else { 
                    $pesquisa = $mysqli->real_escape_string($_GET['busca']);
                    $sql_code = "SELECT * FROM tblcadfornecedor WHERE razaosocial LIKE '%$pesquisa%' OR prod LIKE '%$pesquisa%' OR cidadeforn LIKE '%$pesquisa%'";
                   
                    $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar!". $mysqli->error);

                    if($sql_query->num_rows ==0) { 
            ?>
            <!-- <tr>
                <td colspan="5">Nenhum resultado encontrado...</td>
            </tr> -->
            <?php 
                    }else{
                        while($dados = $sql_query->fetch_assoc()){
                            ?>
                                <tr>


                                    <td><?php echo $dados['razaosocial']?></td>
                                    <td><?php echo $dados['prod']?></td>
                                    <td><?php echo $dados['cidadeforn']?></td>
                                    <td><?php echo $dados['cnpj']?></td>
                                    <td><?php echo $dados['telforn']?></td>
                                    <td><button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $dados['id']?>"><i class="bi bi-plus-square"></i></button></td>
                                </tr>
                            <?php
                        }
                    } ?>
            <?php  } ?>
        </thead>

     </table>


     <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">   
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
    </nav>

      <!-- Inicio modalModal -->

    <table class="table"><!-- Inicio Table -->
      <thead>
        <div class="title-table">
          <tr >
            <th scope="col">Razão Social</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cidade</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Telefone</th>  
          </tr>
        </div>

      </thead>

        <tbody>
         <?php
          while($linha = mysqli_fetch_array($qry)){
          ?>

            <tr>
                <?php  $id = $linha['id'];?>
                <td><?php echo $linha['razaosocial'] ?></td>
                <td><?php echo $linha['prod'] ?></td>
                <td><?php echo $linha['cidadeforn']?></td>
                <td><?php echo $linha['cnpj']?></td>
                <td><?php echo $linha['telforn']?></td>
                <td><button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $linha['id']?>"><i class="bi bi-plus-square"></i></button></td>
            </tr>

        <div class="modal fade " id="exampleModal<?php echo $linha['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="modal-title text-center" id="exampleModalLabel" ><?php echo $linha['razaosocial']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <div class="modal-body">
              <p><strong>ID: </strong><?php echo $linha['id']?></p>
              <p><strong>Razão Social : </strong><?php echo $linha['razaosocial'] ?></p>
              <p><strong>CNPJ : </strong><?php echo $linha['cnpj']?></p>
              <p><strong>Fornecedor : </strong><?php echo $linha['forndtcad']?></p>
              <p><strong>E-mail : </strong><?php echo $linha['emailforn']?></p>
              <p><strong>Telefone : </strong><?php echo $linha['telforn']?></p>
              <p><strong>Produto : </strong><?php echo $linha['prod']?></p>
              <p><strong>CEP : </strong><?php echo $linha['cepforn']?></p>
              <p><strong> Endereço : </strong><?php echo $linha['enderecoforn']?><strong> N° : </strong><?php echo $linha['numero']?></p>
              <p><strong>Complemento : </strong><?php echo $linha['complforn']?></p>
              <p><strong>Bairro : </strong><?php echo $linha['bairroforn']?><strong> Cidade : </strong><?php echo $linha['cidadeforn']?>
              </p><hr>
              <p><strong>Quem sou eu : </strong><br><?php echo $linha['quemsoueu']?></p>
              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
          </div>
        </div><!-- Fim Modal -->

        <?php } ?>

        </tbody>
    </table><!-- Fim Table -->

        </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="lead">Copyright &copy; 2023 Elas Frut</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
            
        </div>
    </footer>
    <!-- /Footer -->
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
  
</body>

</html>