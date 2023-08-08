<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>

   <link href="../public/assets/css/registrarStyle.css" rel="stylesheet">

    
</head>
<body>
    <div class="registrar-container">
        <form id="form" method="POST" name="form-registrar">
            <div class="box">
                <label for="username">Nome Usuario:</label>
                <br>
                <input class="input-text" name="username" type="text" id="username">
                <span class="span-error">error message</span>
            </div>
            <div class="box">
                <label for="email">Email: </label>
                <br>
                <input class="input-text" name="e-mail" type="email" id="email">
                <span class="span-error">error message</span>
            </div>
            <div class="box">
                <label for="pass">Senha: </label>
                <br>
                <input class="input-text" name="pass" type="password" id="pass">
                <span class="span-error">error message</span>
            </div>
            <div class="box">
                <label for="confirmPassword">Confirmar Senha: </label>
                <br>
                <input class="input-text" name="confirmPassword" type="password" id="passConfirm">
                <span class="span-error">error message</span>
            </div>
            <div>
                <input class="button-submit" type="submit" value="cadastrar-se">
            </div>

        </form>
    </div>



    <script src="../public/assets/js/registrar.js" ></script>
</body>
</html>