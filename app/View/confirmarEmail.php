<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Confirmação de E-mail</title>
</head>
<body>


    <div>
        <article>
            <section>
                <p>Olá <?php echo $_SESSION['user_name']?></p>
                <p>Para proseguir e necessario confirmar o seu e-mail</p>
                <p>um e-mail foi enviado para sua conta</p>
            </section>
        </article>
    </div>
    
</body>
</html>