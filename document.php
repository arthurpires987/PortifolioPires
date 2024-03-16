<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $assunto = addslashes($_POST['assunto']);

    $para = "arthur.piresantunes987@gmail.com";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Assunto: ".$assunto;

    $cabeca = "From: ".$email."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $corpo, $cabeca)) {
        echo("E-mail enviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o email, tente novamente!");
    }

?>