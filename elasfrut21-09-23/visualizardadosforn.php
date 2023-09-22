<?php
if(isset($_POST["user_id"])){
    include_once "conexao.php";

    $query_user = "SELECT * FROM tblcadfornecedor WHERE id = '".$_POST["user_id"] ."' LIMIT 1 "; 
   $resultado_user = mysqli_query($con,$query_user);
   $row_user = mysqli_fetch_assoc($resultado_user);
   echo $row['razaosocial'];
}

// gente, esse arquivo aqui faz o que?? nome sugestivo, porém fiquei confusa (dani)
// creio que o $con da linha 6 terá que mudar pra $mysqli, como os outros... isso a Melissa que mandou, 
//pro Pesquisar, que pelo que vi, não funfou ainda, conforme um vídeo que joguei no grupo (dani)