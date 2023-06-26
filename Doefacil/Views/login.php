<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/login.css">
        <link rel="shortcut icon" href="../assets/images/Doefacillogo.png" type="image/x-icon">
        <title>Faça seu login</title>
    </head>
    <body>
        <div class="container">
            <div class="card" id="login-form">
                <img src="../assets/images/Doefacillogo.png" alt="Logo">
                <h2 class="card-title">Faça o login</h2>
                <form action="../Controllers/Login.php" method="post">
                    <input type="hidden" name="acao" value="login">
                    <div class="form-group">
                        <label for="username">Usuário:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn-primary">Entrar</button>
                </form>
                <hr>
                <h5 class="card-title">Ainda não possui uma conta?</h5>
                <button id="signup-button" class="btn-secondary">Cadastrar</button>
                <a href="../index.php" class="backToIndex"><button class="btn-primary">Voltar a página inicial</button></a>
            </div>
            <div class="card form-card" id="signup-form">
                <img src="../assets/images/Doefacillogo.png" alt="Imagem de Cadastro">
                <h2 class="card-title">Faça seu cadastro</h2>
                <form action="../Controllers/Login.php" method="post">
                    <input type="hidden" name="acao" value="register">
                    <div class="form-group">
                        <label for="username">Usuário:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirmar Senha:</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <button type="submit" class="btn-primary">Cadastrar</button>
                    <button id="login-button" class="btn-secondary">Voltar ao login</button>
                </form>
            </div>
        </div>
        <script src="../js/toggleLogin.js"></script>
    </body>
</html>