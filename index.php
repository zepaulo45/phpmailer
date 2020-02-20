<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();
$email->add(
    "Olá mundo, teste de email",
    "<h1>Olá teste de envio de email</h1><p>Esse é um teste de envio pelo PHPMailer</p><p>Envio com Anexo tambem configurado!</p>",
    "TI Maritucs",
    "ze45ster@gmail.com"
)->attach(
    "img/doc.jpg",
    "Boleto"
)->attach(
    "img/anexo.png",
    "Nota Fiscal")->send("Ti Maritucs","ti@maritucs.com.br");

if (!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
}