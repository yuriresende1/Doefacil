<?php
    include("../Models/DoeFacil.php");

    function redirect($location) {
        echo "<script>window.location='{$location}'</script>";
    }

    function showAlert($message) {
        echo "<script>alert('{$message}')</script>";
    }

    function insertAction($conn) {
        if(isset($_FILES['thumbnail'])) {
            $title = $_POST['title'];
            $short_description = $_POST['short_description'];
            $full_description = $_POST['full_description'];
            $donated = $_POST['donated'];
            $action_creator = $_POST['action_creator'];
            $expiration_date = $_POST['expiration_date'];
            
            $extensao = strtolower(substr($_FILES['thumbnail']['name'], -4)); // pegando a extensão
            $new_name = $title . $extensao;
            $directory = "../assets/thumbnails/";
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $directory.$new_name);
    
            $sql = "INSERT INTO acoes (title, thumbnail, short_description, full_description, donated,  action_creator, expiration_date) VALUES ('{$title}', '{$new_name}', '{$short_description}', '{$full_description}', '{$donated}', '{$action_creator}', '{$expiration_date}')";
    
            $stmt = $conn->query($sql);
    
            if($stmt) {
                showAlert('Sucesso');
                redirect('../Views/donations.php');
            } else {
                showAlert('Erro');
                redirect('../Views/donations.php');
            }
        }
    }

    function editAction($conn) {
        $title = $_POST['title'];
        $short_description = $_POST['short_description'];
        $full_description = $_POST['full_description'];
        $donated = $_POST['donated'];
        $action_creator = $_POST['action_creator'];
        $expiration_date = $_POST['expiration_date'];

        $sql = "UPDATE acoes SET title='{$title}', short_description='{$short_description}', full_description='{$full_description}', donated='{$donated}',  action_creator='{$action_creator}', expiration_date='{$expiration_date}' WHERE id=".$_REQUEST['id']."";

        $stmt = $conn->query($sql);

        if($stmt) {
            showAlert('Sucesso');
            redirect('../Views/donations.php');
        } else {
            showAlert('Erro');
            redirect('../Views/donations.php');
        }
    }

    function deleteAction($conn) {
        $sql = "DELETE FROM acoes WHERE id=".$_REQUEST["id"];
        $stmt = $conn->query($sql);

        if ($stmt) {
            showAlert('Ação deletada');
            redirect('../Views/donations.php');
        } else {
            showAlert('Erro ao deletar ação');
            redirect('../Views/donations.php');
        }
    }

    function requestAction($conn) {
        session_start();

        if (!isset($_SESSION['username'])) {
            showAlert('É necessário estar logado para solicitar uma ação');
            redirect('../Views/login.php');
        } else {

            $tipo_pessoa = $_POST['tipoPessoa'];

            if($tipo_pessoa === 'PF') {
                $name = $_POST["name"];
                $CPF = $_POST["CPF"];
                $email = $_POST["email"];
                $contact_number = $_POST["contact_number"];
                $address = $_POST["address"];
                $number = $_POST["number"];
                $city = $_POST["city"];
                $state = $_POST["state"];
                $country = $_POST["country"];
                $birthplace = $_POST["birthplace"];
                $family_total_income = $_POST["family_total_income"];
                $donation_objective = $_POST["donation_objective"];
                $title = $_POST["title"];
                $short_description = $_POST["short_description"];
                $full_description = $_POST["full_description"];
                $donated = $_POST["donated"];
                $action_creator = $_POST["action_creator"];
                $expiration_date = $_POST["expiration_date"];

                $sql = "INSERT INTO beneficiary_natural_person (name, CPF, email, contact_number, address, number, city, state, country, birthplace, family_total_income, donation_objective, title, short_description, full_description, donated, action_creator, expiration_date) 
                VALUES ('$name', '$CPF', '$email', '$contact_number', '$address', '$number', '$city', '$state', '$country', '$birthplace', '$family_total_income', '$donation_objective', '$title', '$short_description', '$full_description', '$donated', '$action_creator', '$expiration_date')";

                $stmt = $conn->query($sql);

                if($stmt) {
                    $email = 'doefacilsite@gmail.com';
                    $subject = 'Solicitar criação de ação';

                    // Inserir no body as informações de quem está enviando
                    $body = "Título: $title\n\nDescrição curta: $short_description\n\nDescrição completa: $full_description\n\nO que pode ser doado: $donated\n\nDono da ação: $action_creator\n\nData de expiração: $expiration_date\n\nNão se esquecça de anexar aqui a imagem da ação";

                    $mailto = "https://mail.google.com/mail/?view=cm&fs=1&to=" . urlencode($email) . "&su=" . urlencode($subject) . "&body=" . urlencode($body);

                    if (header("Location: $mailto")) {
                        showAlert('Solicitação enviada');
                    } else {
                        showAlert('Erro ao enviar a solicitação');
                    }
                    
                    redirect('../index.php');
                    exit();
                } else {
                    showAlert('Erro ao enviar a solicitação');
                    redirect('../index.php');
                }
            }
        }
    }

    $action = $_REQUEST["acao"];
    switch ($action) {
        case 'insert':
            insertAction($conn);
            break;
        
        case 'request':
            requestAction($conn);
            break;
        
        case 'edit':
            editAction($conn);
            break;
        
        case 'delete':
            deleteAction($conn);
            break;
    }
?>