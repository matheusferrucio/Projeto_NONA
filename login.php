<?php include('config.php'); ?>
<head>
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ENDERECO_SITE; ?>css/login.css">
</head>
<body>
    <main>
        <div class="caixa"></div>
        <div class="caixa3"></div>
        <div class="caixa2"></div>
        <div class="container-form">
            <h1>Entre na sua conta</h1>
            <form class="w100 centralizar-horizontal" action="login.php" method="post">
                <div class="w100 centralizar-horizontal form-item">
                    <label for="email">E-mail:</label>
                    <input class="w100" type="email" name="email" id="email" placeholder="Digite o seu e-mail...">
                </div>
                <div class="w100 centralizar-horizontal form-item">
                    <label for="senha">Senha</label>
                    <input class="w100" type="password" name="senha" id="senha" placeholder="Digite a sua senha...">
                </div>
                <a href="<?php echo ENDERECO_SITE; ?>esquecisenha">Esqueceu a senha ?</a>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </main>
</body>