<?php
    include("./Models/DoeFacil.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoeFacil</title>
    <link rel="stylesheet" href="./assets/css/cssdoefacil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="botões">
        <nav>
            <img src="./assets/Doefacillogo.png" class="logo">
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="./Views/donations.php">Doações</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <hr class="styled-hr">
    <main>
        <h1 id="h1id1"> Quem somos nós?</h1>
        <p class="descrição">
            O DoeFacil é uma plataforma online de doação que tem como objetivo conectar
            pessoas que desejam contribuir para causas importantes com organizações que
            precisam de ajuda para realizar sua missão. O site foi projetado para tornar o
            processo de doação rápido, fácil e seguro.
            <br>
            <br>
            As doações podem ajudar a melhorar a vida de pessoas em necessidade, seja
            através de doações de alimentos, roupas, medicamentos ou bens materiais no
            geral. As doações também podem contribuir para a pesquisa e o
            desenvolvimento de curas para doenças, ajudar a proteger o meio ambiente ou
            apoiar causas políticas ou sociais importantes. As doações podem ajudar a melhorar a vida de pessoas em necessidade,
            seja através de doações de alimentos, roupas, medicamentos ou bens materiais
            no geral. As doações também podem contribuir para a pesquisa e o
            desenvolvimento de curas para doenças, ajudar a proteger o meio ambiente ou
            apoiar causas políticas ou sociais importantes.
            <br>
            <br>
            Sem um site de doação confiável, os doadores podem ter dificuldades
            para encontrar organizações confiáveis e pessoas que realmente precisam, o
            que pode levar à desconfiança e diminuir o número de doações. Diversos casos
            de perfis fakes estão aparecendo no Facebook, onde contam uma breve história
            para sensibilizar as pessoas e assim receberem doações no lugar de pessoas
            realmente necessitadas.
            <br>
            <br>
            A falta de confiabilidade e transparência muitas vezes presente nos atuais
            modelos de doação, torna difícil para os doadores determinar se uma
            organização é legítima e se suas doações realmente alcançarão as pessoas ou
            causas que precisam. Isso pode gerar desconfiança e levar os doadores a se
            absterem de fazer doações. Outro ponto a ressaltar é o processo de doação
            complexo, alguns meios de doação podem ter um processo complicado e
            demorado, envolvendo várias etapas e exigindo informações excessivas como
            código de segurança do cartão dos doadores. Isso pode desencorajar potenciais
            doadores que desejam uma experiência rápida e fácil.
            <br>
            <br>
            O DoeFacil aborda essas questões ao oferecer uma plataforma online que
            busca solucionar esses problemas. Ele proporciona um ambiente confiável, onde
            organizações autênticas são verificadas e as histórias de necessidade são
            validadas. Além disso, o processo de doação no DoeFacil é simplificado, não
            exigindo dados excessivos, tornando-o rápido e fácil para os doadores fazerem
            suas contribuições de forma segura.
            <br>
            <br>
            Os principais resultados da plataforma são a conexão entre pessoas que
            desejam contribuir para causas importantes e organizações que precisam de
            ajuda, a segurança e confiabilidade no processo de doação, e o aumento do
            número de doações.
            Faça já a sua parte e comece doando por aqui!
        </p>
        <h1 id="h1id2"> Quem você quer ajudar hoje? </h1>
        <br>
        <div class="container">
            <?php
                include("./Controllers/RecentActions.php")
            ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr class="styled-hr"> 
        <div class="comentario">
            <img src="./assets/avatar.png" style="width: 200px; height: 200px;">
            <p> Devo dizer que a sensação de ajudar o próximo é absolutamente gratificante. 
                Desde a primeira doação, sinto uma alegria genuína e uma sensação de propósito em cada contribuição.
                Ver o impacto positivo que esses recursos têm na vida das pessoas é verdadeiramente recompensador. - Sheila
                
            </p>
        </div>
        <hr class="styled-hr">  
    </main>
    <footer>
		<h3>Atendimento</h3>
		<br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg> (31) 9999-9999
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </svg> doefacil@gmail.com
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
  		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
		</svg> Segunda a Sexta de 08:00 ás 18:00
        <br>
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  		<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
		</svg>Edifício DoeFacil rua Doefacil número 4950 sala 3/4
		<br>
        <br>
        <div class="social">
            <a href=""><i class="fab fa-whatsapp"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
        </div>
        <br>
        <br>
		<p>&copy; 2023 GRUPO GLYMTECH Todos os direitos reservados.</p>
	</footer>
</body>
</html>