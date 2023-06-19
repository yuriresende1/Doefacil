<?php
    include('../Models/DoeFacil.php');

    function redirect($location) {
        echo "<script>window.location='{$location}'</script>";
    }

    function showAlert($message) {
        echo "<script>alert('{$message}')</script>";
    }

    function loginAction($conn) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            showAlert('Informe o nome de usuário e a senha');
            redirect('../Views/login.php');
            return;
        }

        try {
            $stmt = $conn->prepare("SELECT * FROM login WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $usuario = $stmt->fetch();

            if ($usuario) {
                session_start();

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['username'] = $usuario['username'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['type_user'] = $usuario['type_user'];

                redirect('../index.php');
            } else {
                showAlert('Falha ao fazer login! Usuário ou senha incorretos');
                redirect('../Views/login.php');
            }
        } catch(PDOException $error) {
            echo "Erro ao executar consulta: " . $error->getMessage();
        }
    }

    function registerAction($conn) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $type_user = 'user';
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($password !== $confirmPassword) {
            showAlert('As senhas não correspondem');
            redirect('../Views/login.php');
            return;
        }

        $sql = "INSERT INTO login (username, email, password, type_user) VALUES (:username, :email, :password, :type_user)";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':type_user', $type_user);
            $stmt->execute();

            showAlert('Usuário cadastrado');
            redirect('../Views/login.php');
        } catch(PDOException $error) {
            showAlert('Falha ao fazer cadastro: '. $error);
            redirect('../Views/login.php');
        }
    }

    function logoutAction() {
        if(!isset($_SESSION)) {
            session_start();
        }

        session_destroy();
        redirect('../index.php');
    }

    if (!isset($_REQUEST["acao"])) {
        redirect('../Views/login.php');
    }

    $action = $_REQUEST["acao"];
    switch ($action) {
        case 'login':
            loginAction($conn);
            break;

        case 'register':
            registerAction($conn);
            break;
        
        case 'logout':
            logoutAction();
            break;

        default:
            redirect('../Views/login.php');
            break;
    }
?>
