<?php

require __DIR__."/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Olá Mundo é o Meu Primeiro E-mail!",
    "<h1>Estou apenas testando!</h1>Espero que tenha dado certo!",
    "Carlos Ramos",
    "kdu001987@gmail.com"
)->send();

if(!$email->error()){
    var_dump( true);
}else{
    echo $email->error()->getMessage();
}