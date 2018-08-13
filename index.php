<?php

require_once __DIR__ . '/lib_ext/autoload.php';

use notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Email de Teste</p>","ti@finziengenharia.com", "Tiago", "tgfurlan@gmail.com", "Tiago L. Furlan");

echo "<pre>";
var_dump($novoEmail);
echo "</pre>";