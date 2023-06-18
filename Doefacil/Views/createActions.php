<?php
    include('../Models/DoeFacil.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/contribuition.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Contribuir Agora</title>
    </head>
    <body>
        <header>
            <div class="botões">
                <nav>
                    <ul>
                        <li><a href="../index.php">Início</a></li>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="./donations.php">Ações Beneficentes</a></li>
                        <li><a href="#">Criar Ação</a></li>
                        <?php
                            if (session_start()){
                                if (isset($_SESSION['username'])) {
                                    $username = $_SESSION['username'];
                                    echo "<li><a href='./profile.php'>{$username}</a></li>";
                                    echo "<li><a href='../Controllers/Login.php?acao=logout'>Logout</a></li>";
                                } else {
                                    echo "<li><a href='./Views/login.php'>Login</a></li>";
                                }
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <hr class="styled-hr">
        <main>
            <div class="container">
                <h2>entenda como funciona</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum exercitationem ipsa voluptatibus eligendi soluta numquam dolores ut accusantium enim culpa error totam odio libero consequatur nobis voluptatum, molestias atque modi. EXPLICAÇÃO DE COMO FUNCIONA PARA PEDIR PARA CRIAR UMA AÇÃO</p>
                <div class="container1">
                    <h2>Cadastrar nova ação</h2>
                    <form action="../Controllers/AdminActions.php" method="post" enctype="multipart/form-data">
                        <?php if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
                            echo "<input type='hidden' name='acao' value='insert'>";
                        } else {
                            echo "<input type='hidden' name='acao' value='request'>";
                        }
                        ?>
                        <label for="title">Título da ação:</label>
                        <input required type="text" name="title" id="title">
                        <br>
                        <label for="thumbnail">Imagem da ação:</label>
                        <input required type="file" name="thumbnail" id="thumbnail">
                        <br>
                        <label for="short_description">Breve descrição:</label>
                        <textarea required name="short_description" id="short_description" cols="30" rows="10" maxlength="154"></textarea>
                        <br>
                        <label for="full_description">Descrição completa:</label>
                        <textarea required name="full_description" id="full_description" cols="30" rows="10" maxlength="500"></textarea>
                        <br>
                        <label for="donated">O que pode ser doado:</label>
                        <textarea required name="donated" id="donated" cols="30" rows="10" maxlength="500"></textarea>
                        <br>
                        <label for="action_creator">Dono da ação:</label>
                        <input required type="text" name="action_creator" id="action_creator">
                        <br>
                        <label for="expiration_date">Data de expiração:</label>
                        <input required type="date" name="expiration_date" id="expiration_date">
                        <br>
                        <input type="submit" value="Cadastrar">
                    </form>
                </div>
            </div>        
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
            </svg> doefacilsite@gmail.com
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

