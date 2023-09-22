
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Cadastro de Fornecedoras</title>
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

        <!-- Formulário de cadastro de fornecedora-->
        <div class="container">           
            <form action="recebefo.php"  method="post">
                <h4>Cadastro de Fornecedoras</h4><hr>
                <div class="row">
                    <div class="col-6">
                        Razão Social <input type="text" name="razaosocial" class="form-control">
                    </div>
                    <div class="col-6">
                        CNPJ <input type="text" name="cnpj" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        E-mail <input type="email" name="emailforn" class="form-control">
                    </div>
                    <div class="col-3">
                        Telefone <input type="text" name="telforn" class="form-control">
                    </div>
                    <div class="col-4">
                        Endereço <input type="text" name="enderecoforn" class="form-control">
                    </div>
                    <div class="col-1">
                        Número <input type="number" name="numero" class="form-control">
                    </div>                            
                </div>
                <div class="row">
                    <div class="col-3">
                        Complemento <input type="text" name="complforn" class="form-control">
                    </div>
                    <div class="col-3">
                        CEP <input type="number" name="cepforn" class="form-control">
                    </div>
                    <div class="col-3">
                        Bairro <input type="text" name="bairroforn" class="form-control">
                    </div> 
                    <div class="col-3">
                        Estado 
                        <select  class ="form-select" name = "estado">
                            <option value="Selecionar">Selecionar</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MG">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minhas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RO">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="DF">Distrito Federal</option>
                        </select>
                    </div> 
                </div>
                <div class="row">                                
                    <div class="col-4">
                        Cidade <input type = "text" name="cidadeforn" class="form-control">
                    </div>
                    <div class="col-4">
                        Mídias Sociais <input type="text" name="msociaisforn" class="form-control">
                    </div>
                    <div class="col-4">
                        Data de Cadastro <input type="date" name="forndtcad" class="form-control">
                    </div>
                </div>                            
                <div class="row">                    
                    <div class="mt-3">
                        <label  class="form-label" ><strong>Adicionar Fotos</strong></label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <div class="mt-3"></div>

                <div class="row">
                    <div class="col-12"> 
                        <strong>Quais produtos você comercializa?</strong><input type="text" name="prod" class="form-control">
                    </div>
                </div>                                               
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Conte-nos sobre você!</strong></label>
                        <textarea class="form-control" name="quemsoueu" id="exampleFormControlTextarea1" rows="3"></textarea>                    
                    
                        <input type="submit" class="btn btn-primary mt-3" value="Cadastrar">
                    </div>                           
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>      
    </body>
</html>