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

    function requestAction() {
        $title = $_POST['title'];
        $short_description = $_POST['short_description'];
        $full_description = $_POST['full_description'];
        $donated = $_POST['donated'];
        $action_creator = $_POST['action_creator'];
        $expiration_date = $_POST['expiration_date'];

        $email = 'doefacilsite@gmail.com';
        $subject = 'Solicitar criação de ação';
        //colocar os dados do rementente aqui
        $body = "Título: $title\n\nDescrição curta: $short_description\n\nDescrição completa: $full_description\n\nO que pode ser doado: $donated\n\nDono da ação: $action_creator\n\nData de expiração: $expiration_date\n\nNão se esquecça de anexar aqui a imagem da ação";

        $mailto = "https://mail.google.com/mail/?view=cm&fs=1&to=" . urlencode($email) . "&su=" . urlencode($subject) . "&body=" . urlencode($body);

        if (header("Location: $mailto")) {
            showAlert('Solicitação enviada');
        } else {
            showAlert('Erro ao enviar a solicitação');
        }
        
        redirect('../index.php');
        exit();
    }

    $action = $_REQUEST["acao"];
    switch ($action) {
        case 'insert':
            insertAction($conn);
            break;
        
        case 'request':
            requestAction($conn);
            break;
    }
?>