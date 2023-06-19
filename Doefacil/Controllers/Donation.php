<?php
    include('../Models/DoeFacil.php');

    function insertPF($conn) {
        $namePF = $_POST['namePF'];
        $cpf = $_POST['CPF'];
        $emailPF = $_POST['emailPF'];
        $contactNumberPF = $_POST['contact_numberPF'];
        $maritalStatusPF = $_POST['marital_statusPF'];
        $addressPF = $_POST['addressPF'];
        $numberPF = $_POST['numberPF'];
        $cityPF = $_POST['cityPF'];
        $statePF = $_POST['statePF'];
        $countryPF = $_POST['countryPF'];
        $birthplacePF = $_POST['birthplacePF'];
        $notificationsPF = $_POST['notificationsPF'];
        $recurringDonorPF = $_POST['recurring_donorPF'];
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $reside = $_POST['reside'];
        $delivery = $_POST['delivery'];
        $id_benefited_action = $_POST['id_benefited_action'];	
        $myId = $_POST['myId'];

        if($delivery === 'correio') {
            $sql_donation = "INSERT INTO situation_donations (donor, id_donor, recipient, status_donation, information)  VALUES ('{$namePF}', '{$myId}', '{$id_benefited_action}', 'Pendente', 'Obrigado pela iniciativa, vá até a agencia de correios e envie para: Rua Teste, 65, Viçosa - MG')";
            $stmt_donation = $conn->query($sql_donation);
            if ($stmt_donation) {
                echo "<script>alert('Certo')</script>";
                //redirecionar para o lugar certo
            } else {
                echo "<script>alert('Erro')</script>";
            }
        } else {
            $sql_donation = "INSERT INTO situation_donations (donor, id_donor, recipient, status_donation, information)  VALUES ('{$namePF}', '{$myId}', '{$id_benefited_action}', 'Pendente', 'Obrigado pela iniciativa, Iremos verifcar suas informações de endereço e entraremos em contato no seu email sobre quando podemos ir pegar as doações')";
            $stmt_donation = $conn->query($sql_donation);
            if ($stmt_donation) {
                echo "<script>alert('Certo')</script>";
                //redirecionar para o lugar certo
            } else {
                echo "<script>alert('Erro')</script>";
            }
        }

        $sql = "INSERT INTO donator_natural_person (name, CPF,	email, contact_number, marital_status, address, number,	city, state, country, birthplace, notifications, recurring_donor, item,	quantity, reside, delivery, id_benefited_action) VALUES ('{$namePF}', '{$cpf}', '{$emailPF}', '{$contactNumberPF}', '{$maritalStatusPF}', '{$addressPF}', '{$numberPF}', '{$cityPF}', '{$statePF}', '{$countryPF}', '{$birthplacePF}', '{$notificationsPF}', '{$recurringDonorPF}', '{$item}', '{$quantity}', '{$reside}', '{$delivery}', '{$id_benefited_action}')";

        $stmt = $conn->query($sql);

        if ($stmt == true) {
            echo "<script>alert('Certo')</script>";
        } else {
            echo "<script>alert('Falha ao fazer cadastro')</script>";
        }
    }

    function insertPJ($conn) {

    }

    
    $action = $_REQUEST["acao"];
    switch ($action) {
        case 'PF':
            insertPF($conn);
            break;
        
        case 'PJ':
            insertPJ($conn);
            break;
        
    }

?>