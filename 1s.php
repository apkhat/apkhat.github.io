<?php
// O código PHP pode estar em um arquivo separado ou embutido no mesmo arquivo HTML/PHP.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ícone Flutuante</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .fullscreen-overlay {
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
        .spinner-container {
            position: relative;
            width: 60px; /* Tamanho menor */
            height: 60px; /* Tamanho menor */
        }
        .spinner {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 60px; /* Tamanho menor */
            height: 60px; /* Tamanho menor */
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

    <div class="fullscreen-overlay">
        <div class="spinner-container">
            <div class="spinner"></div>
        </div>
    </div>

    <script>
        // Redireciona para 11.php após 2 segundos
        setTimeout(function() {
            window.location.href = '11.php';
        }, 2000);
    </script>

</body>
</html>
