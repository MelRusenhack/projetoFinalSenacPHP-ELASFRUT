<?php
include('conexao.php'); 

if(isset($_POST['emailadm']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['emailadm']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $emailadm = $mysqli->real_escape_string($_POST['emailadm']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM tblcadadm WHERE emailadm = '$emailadm' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows; // retornar se quantas linhas há na busca do $sql_query

        if($quantidade == 1) {
            
            $user = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $user['id']; //variável continua válida por um determinado n de tempo
            $_SESSION['nomeadm'] = $user['nomeadm'];

            header("Location: menuAdm.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

// session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>Página de Administrador</title>

        <link rel="stylesheet" href="css/styleAdm.css">
    </head>
    <!--- Cadastro --->
    <body>
        <div class="container">
            <div class="content first-content">
                    <div class="first-column">
                        <h2 class="title title-primary"><img src="./img/logo3.png" width="300px" height="300px"></h2>
                        <p class="description description-primary"><strong><h3>ElasFrut</strong></h3></p>
                        <p class="description description-primary">Uma boa alimentação também é autocuidado!</p>
                        <button id="signin" class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <div class="second-column">
                        <h2 class="title title-second">Cadastro de Administrador</h2>
                        <div class="social-midia">
                            <ul class="list-social-midia">
                                <a href="#"><img src="./img/facebook.png" width="20px" height="20px"></a>
                                <a href="#"><img class="midia" src="./img/gmail.png" width="20px" height="20px"></a>
                                <a href="#"><img class="midia" src="./img/linkedin.png" width="20px" height="20px"></a>
                            </ul>
                        </div>

                        <p class="description description-second ">Precisamos só de alguns dados para fazer seu cadastro:</p>

                        <!-- Formulário de Cadstro -->
                        <form class="form" action="inseriradm.php" method = "post">
                            <label class="label-input">
                                <i class="bi bi-person icon-modify"></i>
                                <input type="text" placeholder= " Nome " name="nomeadm">
                            </label>

                            <label class="label-input">
                                <i class="bi bi-envelope icon-modify"></i>
                                <input type="email"  placeholder=" E-mail " name="emailadm">
                            </label>

                            <label class="label-input">
                                <i class="bi bi-telephone icon-modify"></i>
                                <input type="tel"  placeholder=" Telefone " name="teladm">
                            </label>

                            <label class="label-input">
                                <i class="bi bi-eye icon-modify"></i>
                                <input type="password"  placeholder=" ****** " name="senha">
                            </label>

                            <button class="btn btn-second" input type = "submit" value = "Cadastrar" >Cadastrar</button>

                            <p class="text-center text-danger">
                                <?php 
                                    if(isset($_SESSION['loginErro'])){
                                        echo $_SESSION['loginErro'];
                                        unset ($_SESSION['loginErro']);
                                    }
                                ?>
                            </p>
                            <p class="text-center text-success">
                                <?php 
                                    if(isset($_SESSION['loginDeslogado'])){
                                        echo $_SESSION['loginDeslogado'];
                                        unset ($_SESSION['loginDeslogado']);
                                    }
                                ?>
                            </p>
                        </form>
                        <!-- Fim - Formulário de Cadstro -->
                    </div>
            </div>

            <div class="content second-content">
            <div class="first-column">
                    <h2 class="title title-primary"><img src="./img/logo3.png" width="300px" height="300px"></h2>
                    <p class="description description-primary">ElasFrut</p>
                    <p class="description description-primary">Uma boa alimentação também é autocuidado!</p>
                    <button id="signup" class="btn btn-primary">Cadastro</button>
                </div>
                <div class="second-column">
                    <h2 class="title title-second">Login de Acesso</h2>
                    <div class="social-midia">
                        <ul class="list-social-midia">
                            <a class="intem-midia"href="#"><img src="./img/facebook.png" width="20px" height="20px"></a>
                            <a href="#"><img class="midia" src="./img/gmail.png" width="20px" height="20px"></a>
                            <a href="#"><img class="midia" src="./img/linkedin.png" width="20px" height="20px"></a>
                        </ul>
                    </div>

                    <p class="description description-second">Lorem ipsum dolor sit amet</p>

                    <!-- Formulário de Login -->
                    <form class="form" action="" method="post">

                        <label class="label-input">
                            <i class="bi bi-envelope icon-modify"></i>
                            <input type="email"  placeholder=" E-mail " name="emailadm">
                        </label>

                        <label class="label-input">
                            <i class="bi bi-eye icon-modify"></i>
                            <input type="password"  placeholder="Digite sua senha" name="senha">
                        </label>

                        <a class="password" href="#">Esqueceu sua senha?</a>
                        <button class="btn btn-second">ENTRAR</button>
                    </form>
                    <!-- Fim - Formulário de Login -->
                    

                </div>
            </div>
            </div>

        </div>
        <script src="js/app.js"></script>
        
    </body>
</html>