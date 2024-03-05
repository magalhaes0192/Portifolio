<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $emailcorp = addslashes($_POST['email-corp']);
    $msg = addslashes($_POST['msg']);

    $para = "magalhaes01234@gmail.com";
    $assunto = "Entrar em contato";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$phone."\n"."E-mail corporativo: ".$emailcorp."\n"."Mensagem: ".$msg;

    $cabeca = "From: magalhaes01234@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!");
    }else {
        echo("Houve um erro ao enviar o email!");
    }