<?php
include_once('conexao.php');
if(isset($_POST['update']))
{

$id                 = $_POST['id'];
$razaosocial        = $_POST ['razaosocial'];
$cnpj               = $_POST ['cnpj'];
$forndtcad          = $_POST ['forndtcad'];
$emailforn          = $_POST ['emailforn'];
$telforn            = $_POST ['telforn'];
$fotologo           = $_POST ['fotologo'];
$prod               = $_POST ['prod'];
$cepforn            = $_POST ['cepforn'];
$enderecoforn       = $_POST ['enderecoforn'];
$numero             = $_POST ['numero'];
$complforn          = $_POST ['complforn'];
$bairroforn         = $_POST ['bairroforn'];
$cidadeforn         = $_POST ['cidadeforn'];
$msociaisforn       = $_POST ['msociaisforn'];
$quemsoueu          = $_POST ['quemsoueu'];

$sqlUpdate = "UPDATE tblcadfornecedor SET razaosocial='$razaosocial',cnpj='$cnpj',forndtcad='$forndtcad ',emailforn='$emailforn ',
telforn='$telforn',fotologo='$fotologo',prod='$prod',cepforn='$cepforn',enderecoforn='$enderecoforn',numero='$numero',complforn='$complforn ',
bairroforn='$bairroforn',cidadeforn='$cidadeforn',msociaisforn='$msociaisforn',quemsoueu='$quemsoueu' WHERE id='$id'";

$result = $mysqli->query($sqlUpdate);

}
header('Location:configlistafornecedor.php');
?>