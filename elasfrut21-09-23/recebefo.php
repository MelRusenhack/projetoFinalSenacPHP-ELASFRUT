<?php

include "conexao.php";


$razaosocial    = $_POST ['razaosocial'];
$cnpj           = $_POST ['cnpj'];
$forndtcad      = $_POST ['forndtcad'];
$emailforn      = $_POST ['emailforn'];
$telforn        = $_POST ['telforn'];
$fotologo          = $_POST ['fotologo'];
$prod           = $_POST ['prod'];
$cepforn            = $_POST ['cepforn'];
$enderecoforn       = $_POST ['enderecoforn'];
$numero         = $_POST ['numero'];
$complforn    = $_POST ['complforn'];
$bairroforn         = $_POST ['bairroforn'];
$cidadeforn         = $_POST ['cidadeforn'];
$msociaisforn    = $_POST ['msociaisforn'];
$quemsoueu      = $_POST ['quemsoueu'];


$sql = "insert into tblcadfornecedor (razaosocial,cnpj,forndtcad,emailforn,telforn,fotologo,prod,
cepforn,enderecoforn,numero,complforn,bairroforn,cidadeforn,msociaisforn,quemsoueu)
 values ('$razaosocial','$cnpj','$forndtcad','$emailforn','$telforn','$fotologo','$prod','$cepforn',
 '$enderecoforn','$numero','$complforn','$bairroforn','$cidadeforn','$msociaisforn','$quemsoueu')";

$qry = mysqli_query ($mysqli,$sql);
if ($qry) {
    header ('location:listafornecedores.php');
    } else {
       echo "<h1> Registro não cadastrado </h1>";
    } 