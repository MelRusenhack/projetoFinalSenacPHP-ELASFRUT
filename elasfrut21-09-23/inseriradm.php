<?php

include "conexao.php";

$nomeadm      = $_POST ['nomeadm'];
$emailadm     = $_POST  ['emailadm'];
$teladm       = $_POST  ['teladm'];
$senha        = $_POST  ['senha'];


$sql = "insert into tblcadadm (nomeadm, emailadm, teladm, senha)
values ('$nomeadm','$emailadm','$teladm','$senha')";

$qry = mysqli_query ($mysqli,$sql);
if ($qry) {
    header ('location:adm.php');
} else {
    echo "<h4> Registro não encontrado </h4>";
}