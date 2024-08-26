<html lang="pt-BR">
 <head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Pagamento via Pix</title> 
  <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 50px;
        }
        .qr-container {
            border: 2px solid #000;
            padding: 20px;
            margin-bottom: 20px;
        }
        .instructions {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
        }
    </style> 
  <script>
        function copyPixKey() {
            var pixKey = "00020126460014br.gov.bcb.pix0124silviacunhax60@gmail.com5204000053039865802BR5913Pagamentos IP6015Kit de 11 frasc62070503***63049CC4";
            navigator.clipboard.writeText(pixKey).then(function() {
                alert('Chave Pix copiada com sucesso!');
            }, function() {
                alert('Falha ao copiar a chave Pix.');
            });
        }
    </script> 
 </head> 
 <body> 
  <div class="container"> 
   <h2>Escaneie o QR Code para finalizar o pagamento</h2> 
   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQkAAAEJAQMAAAC9pkAnAAAABlBMVEX///8AAABVwtN+AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAC1klEQVRoge2ZS47CQAxEHbHIMkfITcjFRgoSF4Ob5AhZ9gLhqSo3EcMJaiR6gejwRhp3+1N2Ir7ru/7tmjLzGT/zeIsf7k/bmHmJtuB5M0QuEefpKi7yFmvGsv/MccZvjsg1G7cx7KetYbvxz4BMuRkjbcjHDA63QIuaM4IPmsB1zTH3NW0R+gu8pAmO6TGnHP3TpVwQRiO8hGa9f3wGrAlSCw4y7Osmi8Y7/SU+lwciE4AE3RtWPJhLHjh7hqQfEqeECWvlZ7hKKOFto7KeIQJjloRZwx6zXAXwujGDvNzbDRnyQi+BbbQjE/4ipwk/pJIH/vuhMlwVEcB0JEMks5e7V4ken3ym+/BD6N6MwbagTuMqFJynbMvbHRkhR6IYyJ0l37ClhjuMdkIUfjBmkbKEjyN5nCg1jmh0QkIxGBSVPRrp2XrmiJQkxoknjJG8pIE5yko/hB0G81re+9njPlisn4CbH8JeI5maKYX0Tf6SapIMkezy8lwaUyXwVGoz/BDU5KbScc8uL1+q/nHckRPCoEPCU4bDN7UZTHNKgnYIvsk3QmkuKTRR+LY//uKFUAWFwg8l8IrgxDbfNKYTUv6ibHHNEvQ6e2pMQ4TtJjybrVvNeGZ1+U1l2w8pqbaqrS9jUheQ6u7sEBa+oISgACrxfmOaq37fDqGO6Mb05CFRVLMqQwSF+Z76lfKNkwlmvWqbDZHg2a8lgLRlTclQv2+I9HlJcLIjV4FFnEfwFgwRWtRjcG7o8jmUqMbuzwW4IAg6NnH1jDNVDlLoQ/kWjTbI9LIj92DFZolGHyq1aYh0ju8rXjUvpNemQ1Y4IfW2ZZWYqLE6z166cwtD5KLptKSadHt/H/CuMZ0QqfXKG6FirQF7L9ueCJ89q+vQ2ctp8pChbgiLyIJoVEdftt3ehytGyKW/WTnXvAQq41nt0qd7eyCMRnLsj6K/belCs/kh3/Vd/3L9AkyyRQ+G2mwyAAAAAElFTkSuQmCC"> 
   <p><strong>Valor Total: R$ 130,00</strong></p> 
   <p><strong>Chave Pix:</strong></p> 
   <p>00020126460014br.gov.bcb.pix0124silviacunhax60@gmail.com5204000053039865802BR5913Pagamentos IP6015Kit de 11 frasc62070503***63049CC4</p> 
   <button onclick="copyPixKey()">Copiar Chave Pix</button> 
   <div class="instructions"> 
    <h3>Instruções para pagamento</h3> 
    <p>1. Abra o aplicativo do seu banco.</p> 
    <p>2. Procure pela opção de pagamento via Pix.</p> 
    <p>3. Escolha a opção "Ler QR Code" e escaneie o código acima.</p> 
    <p>4. Confirme os dados e finalize o pagamento.</p> 
    <p>5. Caso prefira, copie a chave Pix e cole na opção de pagamento Pix do seu banco.</p> 
   </div> 
  </div> 
 </body>
</html>