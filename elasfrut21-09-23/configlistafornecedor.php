<?php 
    include "conexao.php";
    $sql = "select * from tblcadfornecedor";
    $qry= mysqli_query ($mysqli,$sql);    
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

        <main class="main">

            <!-- Pesquisa  -->
            <div class="btn-pesquisa">
                <input type="text" placeholder="Pesquisar">
                <a class="lupa" href="#"><i class="bi bi-search"></i></a>
            </div> 
            <!-- /Pesquisa -->

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">   
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
            
            <table class="table">
                <thead>
                    <div class="title-table">
                        <tr >
                            <th scope="col">Razão Social</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Saiba Mais </th> 
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>                            
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
                        <td><a href='editecadfo.php?id=<?php echo $id ?>' type='button' class='btn'><i class='bi bi-pencil-square'></i></a></td>
                        <td><a href='deletefornecedor.php?id=<?php echo $id ?>' type='button' class='btn'><i class='bi bi-trash3-fill'></i></a></td>
                    </tr>
                
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $linha['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title text-center" id="exampleModalLabel" ><?php echo $linha['razaosocial']?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p><strong>ID: </strong><?php echo $linha['id']?></p>
                                    <p><strong>Razão Social: </strong><?php echo $linha['razaosocial'] ?></p>
                                    <p><strong>CNPJ: </strong><?php echo $linha['cnpj']?></p>
                                    <p><strong>Data de cadastro: </strong><?php echo $linha['forndtcad']?></p>
                                    <p><strong>E-mail: </strong><?php echo $linha['emailforn']?></p>
                                    <p><strong>Telefone: </strong><?php echo $linha['telforn']?></p>
                                    <p><strong>Foto Logotipo: </strong><?php echo $linha['fotologo']?></p> <!--foi pra testar-->
                                    <p><strong>Produto: </strong><?php echo $linha['prod']?></p>
                                    <p><strong>CEP: </strong><?php echo $linha['cepforn']?></p>
                                    <p><strong> Endereço: </strong><?php echo $linha['enderecoforn']?><strong> N°: </strong><?php echo $linha['numero']?></p>
                                    <p><strong>Complemento: </strong><?php echo $linha['complforn']?></p>
                                    <p><strong>Bairro: </strong><?php echo $linha['bairroforn']?><strong> Cidade: </strong><?php echo $linha['cidadeforn']?>
                                    </p><hr>
                                    <p><strong>Mídias Sociais: </strong><br><?php echo $linha['msociaisforn']?></p> <!--foi pra testar-->
                                    <p><strong>Quem sou eu: </strong><br><?php echo $linha['quemsoueu']?></p>                                            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal -->

                    <?php }?>
                </tbody>
            </table>

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