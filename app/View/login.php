<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/assets/css/loginStyle.css" rel="stylesheet">
    <title>Tela Login</title>
</head>
<body>

    <div class="login-container">
        <form id="form" action="" method="POST" name="form-login">
            <div class="div-img">
                <img src="public/assets/img/usuario.png" alt="">
                <h4>Sing-up</h4>
            </div>
            <div class="box">
                <label for="email">Email</label>
                <br>
                <input class="input-text"  name="txtEmail" id="email">
                <span class="span-error">Error e-mail.</span>
            </div>
            <div class="box">
                <label for="password">Senha</label>
                <br>
                <input class="input-text" type="password" name="txtSenha" id="password">
                <span class="span-error">Error password.</span>
            </div>
            <div class="box-error">
                <span><?php echo $dados['error-login'] ?></span>
            </div>
            <div>
                <p>Não possui conta<a href="registrar-se/"> registrar-se </a></p>
                <p>Esqueceu sua senha? <a href="registrar-se/"> trocar senha </a></p>
                <input class="button-submit" type="submit">
            </div>
        
        </form>
</div>

<script src="public/assets/js/login.js" ></script>
</body>
</html>