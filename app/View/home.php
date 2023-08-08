<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./public/assets/css/loginStyle.css">
    <title>Document</title>
</head>
<body>

    <div>
            <h2>Seja bem vindo a nossa plataforma <?php echo $_SESSION['user_name']?></h2>

    </div>
    
</body>
</html>