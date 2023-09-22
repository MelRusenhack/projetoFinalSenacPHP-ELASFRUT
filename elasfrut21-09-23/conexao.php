<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbelasfrut';

$mysqli = new mysqli ($host, $user, $pass, $db);
if ($mysqli->error) {
    die ("Falha na conexão com o Banco de Dados"); 
}

// $con = mysqli_connect($servidor,$usuario,$senha,$bd);

//antes tava assim, pra caso tenha que usar de novo, nao perder, mas acho que funfou rss<?php 

//$servidor = 'localhost';
//$usuario = 'root';
//$senha = '';
//$bd = 'dbelasfrut';

//$con = mysqli_connect($servidor,$usuario,$senha,$bd);