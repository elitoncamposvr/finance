<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Finance - Entrar no Sistema</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
    <script defer src="<?php echo BASE_URL; ?>assets/fonts/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css" />
</head>

<body>
    <form method="post">
        <div class="w-96">
            <div class="title-login">
                Faça seu login para continuar
            </div>
            <?php if (isset($error) && !empty($error)) : ?>
                <div class="warning"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="field">
                <input type="text" name="email" id="email" class="w-full" placeholder="Informe seu e-mail">
            </div>
            <div class="field">
                <input type="password" name="password" id="password" class="w-full" placeholder="Sua Senha">
            </div>
            <div class="field">
                <button type="submit">Efetuar Login</button>
            </div>
            <div class="reset-password">
                <a href="#">Esqueceu sua senha?</a>
            </div>
        </div>
    </form>
</body>

</html>