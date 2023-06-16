<?php
    include('../Models/DoeFacil.php');

    function redirect($location) {
        echo "<script>window.location='{$location}'</script>";
    }

    function showAlert($message, $location) {
        echo "<script>showAlert('{$message}')</script>";
        echo "<script>redirect('{$location}')</script>";
    }

    function loginAction($conn) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            showAlert('Informe o nome de usuário e a senha', '../Views/login.php');
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
                $_SESSION['type_user'] = $usuario['type_user'];

                redirect('../index.php');
            } else {
                showAlert('Falha ao fazer login! Usuário ou senha incorretos', '../Views/login.php');
            }
        } catch(PDOException $error) {
            echo "Erro ao executar consulta: " . $error->getMessage();
        }
    }

    function registerAction($conn) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $type_user = 'User';
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($password !== $confirmPassword) {
            showAlert('As senhas não correspondem', '../Views/login.php');
            return;
        }

        $sql = "INSERT INTO login (username, email, password) VALUES (:username, :email, :password)";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            showAlert('Usuário cadastrado', '../Views/login.php');
        } catch(PDOException $error) {
            showAlert('Falha ao fazer cadastro: '. $error, '../Views/login.php');
        }
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
            
        default:
            redirect('../Views/login.php');
            break;
    }
?>
