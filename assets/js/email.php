<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$mensagem = addcslashes($_POST['message'])

$to ='matheusbrasil122@gmail.com'
$subject = 'Contato Portfólio'
$body = "Nome: ".$name. "\n"
        "EMail: ".$email."\n"
        "Messagem: ".$message;

$header = "From:matheusbrasil122@gmail.com"."\r\n"."Reply-To:".$email

}

?>