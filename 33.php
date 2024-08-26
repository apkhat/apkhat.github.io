<?php
// O código PHP pode estar em um arquivo separado ou embutido no mesmo arquivo HTML/PHP.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso Flutuante</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .alert-box {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 400px;
        }
        .alert-box h2 {
            margin-top: 0;
        }
        .alert-box a {
            text-decoration: none; /* Remove a linha azul dos links */
        }
        .alert-box button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-credit {
            background-color: #4CAF50; /* Green */
            color: white;
        }
        .btn-pix {
            background-color: #FF5722; /* Red */
            color: white;
        }
    </style>
</head>
<body>

    <div class="overlay">
        <div class="alert-box">
            <h2>Escolha uma forma de pagamento</h2>
            <a href="cc.php">
                <button class="btn-credit">Pagar com Cartão de Crédito</button>
            </a>
            <a href="pix.php">
                <button class="btn-pix">Pagar via Pix</button>
            </a>
        </div>
    </div>

</body>
</html>
