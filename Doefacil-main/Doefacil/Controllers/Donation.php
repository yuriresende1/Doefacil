<?php
    include('../Models/DoeFacil.php');

    function redirect($location) {
        echo "<script>window.location='{$location}'</script>";
    }

    function showAlert($message) {
        echo "<script>alert('{$message}')</script>";
    }

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
        $email_donor = $_POST['email_donor'];
        $nameAction = $_POST['nameAction'];

        $sql = "INSERT INTO donator_natural_person (name, CPF,	email, contact_number, marital_status, address, number,	city, state, country, birthplace, notifications, recurring_donor, item,	quantity, reside, delivery, id_benefited_action) VALUES ('{$namePF}', '{$cpf}', '{$emailPF}', '{$contactNumberPF}', '{$maritalStatusPF}', '{$addressPF}', '{$numberPF}', '{$cityPF}', '{$statePF}', '{$countryPF}', '{$birthplacePF}', '{$notificationsPF}', '{$recurringDonorPF}', '{$item}', '{$quantity}', '{$reside}', '{$delivery}', '{$id_benefited_action}')";

        $stmt = $conn->query($sql);

        if ($stmt == true) {
            if($delivery === 'correio') {
                $sql_donation = "INSERT INTO situation_donations (donor, id_donor, recipient, status_donation, information, email_donor)  VALUES ('{$namePF}', '{$myId}', '{$nameAction}', 'Pendente', 'Obrigado pela iniciativa, vá até a agencia de correios e envie para: Rua Teste, 65, Viçosa - MG', '{$email_donor}')";
    
                $stmt_donation = $conn->query($sql_donation);
    
                if ($stmt_donation) {
                    showAlert('Sucesso!, siga as instruções de envio');
                    redirect('../Views/situationDonation.php');
                } else {
                    showAlert('Erro!');
                    redirect('../Views/contribuition.php');
                }
            } else {
                $sql_donation = "INSERT INTO situation_donations (donor, id_donor, recipient, status_donation, information, email_donor)  VALUES ('{$namePF}', '{$myId}', '{$nameAction}', 'Pendente', 'Obrigado pela iniciativa, Iremos verifcar suas informações de endereço e entraremos em contato no seu email sobre quando podemos ir pegar as doações', '{$email_donor}')";
    
                $stmt_donation = $conn->query($sql_donation);
    
                if ($stmt_donation) {
                    showAlert('Sucesso!, fique atento no email para mais instruções');
                    redirect('../Views/situationDonation.php');
                } else {
                    showAlert('Erro!');
                    redirect('../Views/contribuition.php');
                }
            }
        } else {
            echo "<script>alert('Erro!')</script>";
        }
    }

    function insertPJ($conn) {
        $namePJ = $_POST['namePJ'];
        $cnpJ = $_POST['cnpj'];
        $emailPJ = $_POST['emailPJ'];
        $contactNumberPJ = $_POST['contact_numberPJ'];
        $addressPJ = $_POST['addressPJ'];
        $numberPJ = $_POST['numberPJ'];
        $cityPJ = $_POST['cityPJ'];
        $statePJ = $_POST['statePJ'];
        $countryPJ = $_POST['countryPJ'];
        $notificationsPJ = $_POST['notificationsPJ'];
        $recurringDonorPJ = $_POST['recurring_donorPJ'];
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $reside = $_POST['reside'];
        $delivery = $_POST['delivery'];
        $id_benefited_action = $_POST['id_benefited_action'];	
        $myId = $_POST['myId'];
        $email_donor = $_POST['email_donor'];
        $nameActionPJ = $_POST['nameActionPJ'];

        $sql = "INSERT INTO donator_legal_person (name, cnpj, email, contact_number, address, number, city, state, country, notifications, recurring_donor, item, quantity, reside, delivery, id_benefited_action) VALUES ('{$namePJ}', '{$cnpJ}', '{$emailPJ}', '{$contactNumberPJ}', '{$addressPJ}', '{$numberPJ}', '{$cityPJ}', '{$statePJ}', '{$countryPJ}', '{$notificationsPJ}', '{$recurringDonorPJ}', '{$item}', '{$quantity}', '{$reside}', '{$delivery}', '{$id_benefited_action}')";

        $stmt = $conn->query($sql);

        if ($stmt == true) {
            if($delivery === 'correio') {
                $sql_donation = "INSERT INTO situation_donations (donor, id_donor, recipient, status_donation, information, email_donor)  VALUES ('{$namePJ}', '{$myId}', '{$nameActionPJ}', 'Pendente', 'Obrigado pela iniciativa, vá até a agencia de correios e envie para: Rua Teste, 65, Viçosa - MG, assim que as doações forem efetivadas atualizaremos a situação', '{$email_donor}')";
    
                $stmt_donation = $conn->query($sql_donation);
    
                if ($stmt_donation) {
                    showAlert('Sucesso!, siga as instruções de envio');
                    redirect('../Views/situationDonation.php');
                } else {
                    showAlert('Erro!');
                    redirect('../Views/contribuition.php');
                }
            } else {
                $sql_donation = "INSERT INTO situation_donations (donor, id_donor, recipient, status_donation, information, email_donor)  VALUES ('{$namePJ}', '{$myId}', '{$nameActionPJ}', 'Pendente', 'Obrigado pela iniciativa, Iremos verifcar suas informações de endereço e entraremos em contato no seu email sobre quando podemos ir pegar as doações, assim que as doações forem efetivadas atualizaremos a situação', '{$email_donor}')";
    
                $stmt_donation = $conn->query($sql_donation);
    
                if ($stmt_donation) {
                    showAlert('Sucesso!, fique atento no email para mais instruções');
                    redirect('../Views/situationDonation.php');
                } else {
                    showAlert('Erro!');
                    redirect('../Views/contribuition.php');
                }
            }
        }
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