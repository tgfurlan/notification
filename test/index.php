<?php

require_once __DIR__ . '/../lib_ext/autoload.php';

use notification\Email;

$novoEmail = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587 / 465)", "from@email.com", "From Name");
$novoEmail->sendMail("Assunto de Teste", "Corpo do E-mail", "E-mail de Resposta", "Nome para Resposta", "E-mail destinatário", "Nome Destinatário");


var_dump($novoEmail);