<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $faturamento = $_POST['faturamento'];
    $segmento = $_POST['segmento'];

    $to = "contato.4digitalsales@gmail.com";
    $subject = "Novo Contato do Site";
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Empresa: $empresa\n";
    $message .= "Faturamento: $faturamento\n";
    $message .= "Segmento: $segmento\n";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
