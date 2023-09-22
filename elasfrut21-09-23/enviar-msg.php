<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$msg = addslashes($_POST['msg']);

$to = "ritaksacalixto@gmail.com";
$assunto = "Formulario de site ElasFrut";

$mensagem = "Nome:".$nome."\n"."E-mail:".$email."\n".$msg;

$cabeca = "From: ritaksacalixto@gmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($to, $assunto, $mensagem, $cabeca, "From: ritaksacalixto@gmail.com")){
    print"Mesagem foi enviada com sucesso!";

}else{
    print "Não foi possivel enviar";
}


?>