<?php
//Esse arquivo inicia a sessão 


<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"adm.php\">Entrar</a></p>");
}


?>

?>