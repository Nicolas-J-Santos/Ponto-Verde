<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$cep = htmlspecialchars($_POST['cep']);
$ajuda = htmlspecialchars($_POST['ajuda']);
$justificativa = htmlspecialchars($_POST['justificativa']);

$destino = "pontoverde.ajuda@gmail.com";
$assunto = "Ponto Verde - " . $ajuda;

$corpo = "E-mail: " . $email . "\n" .
         "CEP: " . $cep . "\n" .
         "Tipo de Ajuda: " . $ajuda . "\n" .
         "Justificativa: " . $justificativa . "\n";

$head = "From: pontoverde.ajuda@gmail.com" . "\n" .
        "Reply-To: " . $email . "\n" .
        "X-Mailer: PHP/" . phpversion();

if (mail($destino, $assunto, $corpo, $head)) {
    echo "E-mail enviado com sucesso!\nMuito obrigado pela ajuda!";
} else {
    echo "Houve um problema no envio das informações.\nTente enviar novamente, por gentileza!";
}
?>