<?php
    include('../Models/DoeFacil.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/contribuition.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/Doefacillogo.png" type="image/x-icon">
        <title>Contribuir Agora</title>
    </head>
    <body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="../assets/images/Doefacillogo.png" class="logo" alt="Logo do doefacil">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./aboutUs.php">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./donations.php">Ações beneficentes</a>
                            </li>
                            <?php
                            if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
                                echo "<li class='nav-item'><a class='nav-link' href='./createActionsAdmin.php'>Criar ação</a></li>";
                            } else {
                                echo "<li class='nav-item'><a class='nav-link' target='_blank' href='./createActions.php'>Criar ação</a></li>";
                            }
                            ?>
                        </ul>
                        <ul class="navbar-nav">
                            <div id="aDireita">
                                <li class="nav-item">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        $username = $_SESSION['username'];
                                        echo "<a class='nav-link' href='./situationDonation.php'>{$username}</a>";
                                        echo "<li class='nav-item'><a class='nav-link' href='../Controllers/Login.php?acao=logout'>Sair</a></li>";
                                    } else {
                                        echo "<a class='nav-link' href='./login.php'>Login</a>";
                                    }
                                    ?>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <hr class="styled-hr">
        <main>
            <div class="container" id="container">
                <div>
                    <?php
                        include('../Controllers/Contribuition.php');
                    ?>  
                </div>  
                <div class="form">
                    <h2>Preencha os campos abaixo</h2>
                        <ul class="nav nav-tabs">
                            <h3 class="mr-3">Escolha como quer doar: </h3>
                            <li class="nav-item">
                                <a class="nav-link active" id="pessoaFisica-tab" data-bs-toggle="tab" href="#pessoaFisica">Pessoa Física</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pessoaJuridica-tab" data-bs-toggle="tab" href="#pessoaJuridica">Pessoa Jurídica</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pessoaFisica">
                                <h3 class="mt-4">Dados Pessoais - Pessoa Física</h3>
                                <form method="post" action="../Controllers/Donation.php">
                                    <input type="hidden" name="acao" value="PF">
                                    <input type="hidden" name="id_benefited_action" value="<?php echo $_REQUEST["id"];?>">
                                    <input type="hidden" name="nameAction" value="">
                                    <script>
                                        let nameAction = document.querySelector('.titleAction').innerText
                                        document.querySelector('input[name="nameAction"]').value = nameAction;
                                    </script>
                                    <input type="hidden" name="myId" value="<?php echo $_SESSION['id']; ?>">
                                    <input type="hidden" name="email_donor" value="<?php echo $_SESSION['email']; ?>">
                                    <div class="mb-3">
                                        <label for="namePF" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" id="namePF" name="namePF" placeholder="Insira seu nome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="CPF" class="form-label">CPF:</label>
                                        <input type="text" class="form-control" id="CPF" name="CPF" placeholder="Insira seu CPF">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailPF" class="form-label">E-mail:</label>
                                        <input type="email" class="form-control" id="emailPF" name="emailPF" placeholder="Insira seu e-mail">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_numberPF" class="form-label">Telefone:</label>
                                        <input type="text" class="form-control" id="contact_numberPF" name="contact_numberPF" placeholder="Insira seu telefone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="marital_statusPF" class="form-label">Estado Civil:</label>
                                        <input type="text" class="form-control" id="marital_statusPF" name="marital_statusPF" placeholder="Insira seu estado civil">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addressPF" class="form-label">Endereço:</label>
                                        <input type="text" class="form-control" id="addressPF" name="addressPF" placeholder="Insira seu endereço">
                                    </div>
                                    <div class="mb-3">
                                        <label for="numberPF" class="form-label">Número da Residência:</label>
                                        <input type="text" class="form-control" id="numberPF" name="numberPF" placeholder="Insira o número da residência">
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="cityPF" class="form-label">Cidade:</label>
                                            <input type="text" class="form-control" id="cityPF" name="cityPF" placeholder="Insira sua cidade">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="statePF" class="form-label">Estado:</label>
                                        <input type="text" class="form-control" id="statePF" name="statePF" placeholder="Insira seu estado">
                                    </div>
                                    <div class="mb-3">
                                        <label for="countryPF" class="form-label">País de Domicílio:</label>
                                        <input type="text" class="form-control" id="countryPF" name="countryPF" placeholder="Insira seu país de domicílio">
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthplacePF" class="form-label">País de Origem:</label>
                                        <input type="text" class="form-control" id="birthplacePF" name="birthplacePF" placeholder="Insira seu país de origem">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="notificationsPF" name="notificationsPF">
                                        <label class="form-check-label" for="notificationsPF">Aceito receber notificações do site para participar de futuras campanhas de doação</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recurring_donorPF" class="form-label">O que seria necessário para você se tornar um doador recorrente:</label>
                                        <textarea class="form-control" id="recurring_donorPF" name="recurring_donorPF" placeholder="Descreva o que seria necessário para se tornar um doador recorrente"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="item">O que você quer doar para essa campanha?</label>
                                        <input type="text" class="form-control" name="item" id="item" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Informe a quantidade:</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity" required>
                                    </div>                                   
                                    <div class="form-group">
                                        <label for="reside">Reside em Viçosa?</label>
                                        <select class="form-control" name="reside" id="reside" required>
                                            <option value="sim">Sim</option>
                                            <option value="nao">Não</option>
                                        </select>
                                    </div>                                   
                                    <div class="form-group">
                                        <label for="delivery">Prefere que busquemos a doação (Em caso de residência em Viçosa) ou prefere enviar por correio?</label>
                                        <select class="form-control" name="delivery" id="delivery" required>
                                            <option value="busca">Busca</option>
                                            <option value="correio">Correio</option>
                                        </select>
                                    </div>                                 
                                    <input type="submit" class="btn btn-primary" value="Doar">
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pessoaJuridica">
                                <h3 class="mt-4">Dados Empresariais - Pessoa Jurídica</h3>
                                <form method="post" action="../Controllers/Donation.php">
                                    <input type="hidden" name="acao" value="PJ">
                                    <input type="hidden" name="id_benefited_action" value="<?php echo $_REQUEST["id"];?>">
                                    <input type="hidden" name="myId" value="<?php echo $_SESSION['id']; ?>">
                                    <input type="hidden" name="email_donor" value="<?php echo $_SESSION['email']; ?>">
                                    <input type="hidden" name="nameActionPJ" value="">
                                    <script>
                                        let nameActionPJ = document.querySelector('.titleAction').innerText
                                        document.querySelector('input[name="nameActionPJ"]').value = nameActionPJ;
                                    </script>
                                    <div class="mb-3">
                                        <label for="namePJ" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" id="namePJ" name="namePJ" placeholder="Insira o nome da empresa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cnpj" class="form-label">CNPJ:</label>
                                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Insira o CNPJ da empresa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailPJ" class="form-label">E-mail:</label>
                                        <input type="email" class="form-control" id="emailPJ" name="emailPJ" placeholder="Insira o e-mail da empresa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_numberPJ" class="form-label">Telefone:</label>
                                        <input type="text" class="form-control" id="contact_numberPJ" name="contact_numberPJ" placeholder="Insira o telefone da empresa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addressPJ" class="form-label">Endereço:</label>
                                        <input type="text" class="form-control" id="addressPJ" name="addressPJ" placeholder="Insira o endereço da empresa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="numberPJ" class="form-label">Número da Localização:</label>
                                        <input type="text" class="form-control" id="numberPJ" name="numberPJ" placeholder="Insira o número da localização">
                                    </div>
                                    <div class="mb-3">
                                        <label for="cityPJ" class="form-label">Cidade:</label>
                                        <input type="text" class="form-control" id="cityPJ" name="cityPJ" placeholder="Insira a cidade">
                                    </div>
                                    <div class="mb-3">
                                        <label for="statePJ" class="form-label">Estado:</label>
                                        <input type="text" class="form-control" id="statePJ" name="statePJ" placeholder="Insira o estado">
                                    </div>
                                    <div class="mb-3">
                                        <label for="countryPJ" class="form-label">País de Domicílio:</label>
                                        <input type="text" class="form-control" id="countryPJ" name="countryPJ" placeholder="Insira o país de domicílio">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="notificationsPJ" name="notificationsPJ">
                                        <label class="form-check-label" for="notificationsPJ">Aceito receber notificações do site para participar de futuras campanhas de doação</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recurring_donorPJ" class="form-label">O que seria necessário para a empresa se tornar um doador recorrente:</label>
                                        <textarea class="form-control" id="recurring_donorPJ" name="recurring_donorPJ" placeholder="Descreva o que seria necessário para a empresa se tornar um doador recorrente"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="item">O que você quer doar?</label>
                                        <input type="text" class="form-control" name="item" id="item" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Informe a quantidade:</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="reside">Reside em Viçosa?</label>
                                        <select class="form-control" name="reside" id="reside" required>
                                            <option value="sim">Sim</option>
                                            <option value="nao">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="delivery">Prefere que busquemos a doação (Em caso de residência em Viçosa) ou prefere enviar por correio?</label>
                                        <select class="form-control" name="delivery" id="delivery" required>
                                            <option value="busca">Busca</option>
                                            <option value="correio">Correio</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Doar">
                                </form>
                            </div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
		    feather.replace();
	    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>