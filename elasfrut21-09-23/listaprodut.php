<?php
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-Br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link rel="stylesheet" href="css/listfornecedor.css">
      <title>Lista de Produtos</title>
   </head>
   
   <style>
      /* css do pesquisa produtos */
      table, th, td{
         border: 1px solid #915AC3;
         border-collapse: collapse;
      }
      th{
         text-align: center;
         background-color: #915AC3;
         color: white;
         border: 1px solid white;
      }
      td{
         text-align: center;
      }
      .pesqui{
         height: 40px ;
         width: 400px;
         background: #683ab767;
         border: 1px solid #915AC3 ;
         border-radius: 6px;
         border-top-right-radius: 0;
         border-bottom-right-radius: 0;
         outline: none;
      }
      button{
         position: absolute;
         height: 40px;
         width: 50px;
         font-size: 20px;
         color: #ddd6d6;
         cursor: pointer;
         background-color:#915AC3;
         border-top-right-radius: 6px;
         border-bottom-right-radius: 6px;
      }
      .form-pesquisa{
          text-align: center;
          margin-top: 50px;
      }
     table{
    
         width: 50% !important; 
         margin: auto;
     }
     .row h5{
      text-align: center;
     }
   </style>

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

      <main class="main"> 

         <!-- Pesquisa  -->
        
         <form class="form-pesquisa" action="">
        
            <input class="pesqui" name="busca" placeholder="Pesquisar" type="text" >
            <button type="submit "><i class="bi bi-search"></i></button>
   
         </form><br>

          <table  >
         <tr> 
            <th>Nome</th>
            <th>Tipo</th>
            <th>Fornecedor</th>
            <th>Origem</th>
            
         </tr> 
         <?php
         if(!isset($_GET['busca'])){
         ?>
            <tr>
               <td colspan="4">Digite alguma coisa...</td>
            </tr>
            <?php
            }
            else{
               $pesquisa = $mysqli->real_escape_string($_GET['busca']);
               $sql_code = "SELECT * FROM produtos WHERE Nome LIKE '%$pesquisa%' OR tipo LIKE '%$pesquisa%' OR fornecedor LIKE '%$pesquisa%' OR origem LIKE '%$pesquisa%'"; 


               $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar " . $mysqli->error);
               
               if($sql_query->num_rows ==0){
                 ?> 
                 <tr>
                  <td colspan="4"> Produto não encontrado...</td>
                 </tr>
                 <?php
               }else {
                  while($dados =  $sql_query->fetch_assoc()){
                     ?>
                     <tr>
                        <td><?php echo $dados['Nome']?></td>
                        <td><?php echo $dados['tipo']?></td>
                        <td><?php echo $dados['fornecedor']?></td>
                        <td><?php echo $dados['origem']?></td>
                      
                     </tr>
                     <?php
                  }
               }?>
            

              <?php }?>
       </table> <br><br>

         <!-- Fim da Pesquisa -->
         
         <div class="row">
            <div class="col-3"> <!-- Col Frutas -->
               <div class="card" style="width: 15rem;">
                  <img src="img/card4.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Frutas</h5>
                            
                  </div>
               </div>
            </div><!--  /Col Frutas -->

            <!-- Col Verduras -->
            <div class="col-3"> 
               <div class="card" style="width: 16rem;">
                  <img src="img/card2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Hortaliças</h5>
                             
                  </div>
               </div>
            </div>
            <!--  /Col Verduras -->

            <!-- Col Legumes -->
            <div class="col-3"> 
               <div class="card" style="width: 16rem;">
                  <img src="img/card3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Legumes</h5>
                             
                  </div>
               </div>
            </div>
            <!--  /Col Legumes -->

            <!-- Col Orgânicos -->
            <div class="col-3"> 
               <div class="card" style="width: 15rem;">
                  <img src="img/card1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Orgânicos</h5>
                   
                  </div>
               </div>
            </div>
            <!--  /Col Orgânicos -->
         </div><!-- Fim da row -->

               
         <div class="row">
            <div class="col-3"> <!-- Col Frutas -->
               <div class="card" style="width: 15rem;">
                  <img src="img/card7.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Raizes</h5>
                            
                  </div>
               </div>
            </div><!--  /Col Frutas -->

            <!-- Col Verduras -->
            <div class="col-3"> 
               <div class="card" style="width: 16rem;">
                  <img src="img/card5.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Verduras</h5>
                             
                  </div>
               </div>
            </div>
            <!--  /Col Verduras -->

            <!-- Col Legumes -->
            <div class="col-3"> 
               <div class="card" style="width: 16rem;">
                  <img src="img/card6.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Grãos</h5>
                             
                  </div>
               </div>
            </div>
            <!--  /Col Legumes -->

            <!-- Col Orgânicos -->
            <div class="col-3"> 
               <div class="card" style="width: 15rem;">
                  <img src="img/card8.png" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Frutas Importadas</h5>
                   
                  </div>
               </div>
            </div>
            <!--  /Col Orgânicos -->
         </div><!-- Fim da row -->
    </main>

         <!-- Footer -->
         <footer class="footer ">
         
            Copyright &copy; 2023 Elas Frut

            <!-- Ajustar botão pois esta ficando em cima do sobre (Rita) -->
               
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
               <i class="bi bi-arrow-up-circle h1"></i>
            </a>  
         
         </footer><!-- /Footer -->

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   </body>
</html>