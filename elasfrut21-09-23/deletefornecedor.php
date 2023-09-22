<?php
include "conexao.php";
$id=$_GET['id'];
$sql= "delete from tblcadfornecedor where id=".$id;

mysqli_query ($mysqli,$sql);
header ('Location:configlistafornecedor.php');