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
                    $name = $_POST['name'];
                    $id_creator = $_POST['myId'];
                    $status_creation = 'Pendente';
                    $information = 'Sua solicitação de uma nova ação beneficiária foi solicitada, obrigado pela iniciativa, fique atento ao seu email, entraremos em contato para marcamos uma reunião!';
                    $email_creator = $_POST['email_creator'];

                    $new_sql = "INSERT INTO situation_creation (creator, id_creator, status_creation, information, email_creator) VALUES ('$name', '$id_creator', '$status_creation', '$information', '$email_creator')";

                    $new_stmt = $conn->query($new_sql);

                    if($new_stmt) {
                        $email = 'doefacilsite@gmail.com';
                        $subject = 'Solicitar criação de ação';

                        // Inserir no body as informações de quem está enviando
                        $body = "Título: $title\n\nDescrição curta: $short_description\n\nDescrição completa: $full_description\n\nO que pode ser doado: $donated\n\nDono da ação: $action_creator\n\nData de expiração: $expiration_date\n\nNão se esqueça de anexar aqui a imagem da ação";

                        $mailto = "https://mail.google.com/mail/?view=cm&fs=1&to=" . urlencode($email) . "&su=" . urlencode($subject) . "&body=" . urlencode($body);

                        if (header("Location: $mailto")) {
                            showAlert('Solicitação enviada');
                        } else {
                            showAlert('Erro ao enviar a solicitação');
                            redirect('../index.php');
                        }
                        
                        redirect('../index.php');
                        exit();
                    } else {
                        showAlert('Erro ao enviar a solicitação');
                        redirect('../index.php');
                    }
                } else {
                    showAlert('Erro ao enviar a solicitação');
                    redirect('../index.php');
                }
            } else {
                $name = $_POST["name"];
                $cnpj = $_POST["cnpj"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $number = $_POST["number"];
                $city = $_POST["city"];
                $state = $_POST["state"];
                $country = $_POST["country"];
                $contact_number = $_POST["contact_number"];
                $mission_objective = $_POST["mission_objective"];
                $active_time = $_POST["active_time"];
                $main_activities = $_POST["main_activities"];
                $size_entity_employees = $_POST["size_entity_employees"];
                $title = $_POST["title"];
                $short_description = $_POST["short_description"];
                $full_description = $_POST["full_description"];
                $donated = $_POST["donated"];
                $action_creator = $_POST["action_creator"];
                $expiration_date = $_POST["expiration_date"];

                $sqlPJ = "INSERT INTO beneficiary_philanthropic_entity (name, cnpj, email, address, number, city, state, country, contact_number, mission_objective, active_time, main_activities, size_entity_employees, title, short_description, full_description, donated, action_creator, expiration_date) VALUES ('$name', '$cnpj', '$email', '$address', '$number', '$city', '$state', '$country', '$contact_number', '$mission_objective', '$active_time', '$main_activities', '$size_entity_employees', '$title', '$short_description', '$full_description', '$donated', '$action_creator', '$expiration_date')";

                $stmtPJ = $conn->query($sqlPJ);

                if($stmtPJ) {
                    $name = $_POST['name'];
                    $id_creator = $_POST['myId'];
                    $status_creation = 'Pendente';
                    $information = 'Sua solicitação de uma nova ação beneficiária foi solicitada, obrigado pela iniciativa, fique atento ao seu email, entraremos em contato para marcamos uma reunião!';
                    $email_creator = $_POST['email_creator'];

                    $new_sql = "INSERT INTO situation_creation (creator, id_creator, status_creation, information, email_creator) VALUES ('$name', '$id_creator', '$status_creation', '$information', '$email_creator')";

                    $new_stmt = $conn->query($new_sql);

                    if($new_stmt) {
                        $email = 'doefacilsite@gmail.com';
                        $subject = 'Solicitar criação de ação';

                        // Inserir no body as informações de quem está enviando
                        $body = "Título: $title\n\nDescrição curta: $short_description\n\nDescrição completa: $full_description\n\nO que pode ser doado: $donated\n\nDono da ação: $action_creator\n\nData de expiração: $expiration_date\n\nNão se esqueça de anexar aqui a imagem da ação";

                        $mailto = "https://mail.google.com/mail/?view=cm&fs=1&to=" . urlencode($email) . "&su=" . urlencode($subject) . "&body=" . urlencode($body);

                        if (header("Location: $mailto")) {
                            showAlert('Solicitação enviada');
                        } else {
                            showAlert('Erro ao enviar a solicitação');
                            redirect('../index.php');
                        }
                        
                        redirect('../index.php');
                        exit();
                    } else {
                        showAlert('Erro ao enviar a solicitação');
                        redirect('../index.php');
                    }
                } else {
                    showAlert('Erro ao enviar a solicitação');
                    redirect('../index.php');
                }
            }
        }
    }

    function editSituation($conn) {

        if (isset($_POST['rowId'])) {
            $rowId = $_POST['rowId'];
                
            if (isset($_POST['status_donation_' . $rowId])) {
                $statusDonation = $_POST['status_donation_' . $rowId];
                    
                $sql = "UPDATE situation_donations SET status_donation = :statusDonation WHERE id = :rowId";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':statusDonation', $statusDonation);
                $stmt->bindParam(':rowId', $rowId);

                if ($stmt->execute()) {
                    showAlert('Situação alterada!');
                    redirect('../Views/situationDonation.php');
                } else {
                    showAlert('Erro ao alterar situação');
                    redirect('../Views/situationDonation.php');
                }
            }

            if (isset($_POST['status_creation_' . $rowId])) {
                $statusCreation = $_POST['status_creation_' . $rowId];
                    
                $sql = "UPDATE situation_creation SET status_creation = :statusCreation WHERE id = :rowId";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':statusCreation', $statusCreation);
                $stmt->bindParam(':rowId', $rowId);

                if ($stmt->execute()) {
                    showAlert('Situação alterada!');
                    redirect('../Views/situationDonation.php');
                } else {
                    showAlert('Erro ao alterar situação');
                    redirect('../Views/situationDonation.php');
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
        
        case 'editSituation':
            editSituation($conn);
            break;
    }
?>