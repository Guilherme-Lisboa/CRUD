<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="principal">
    <h2>Login</h2>
    <form action="open.php" method="POST">
        <input type="email" name="cxemail" placeholder="Email" required>
        <input type="password" name="cxsenha" placeholder="Senha" required>
        <button type="submit" class="btnlogin">Entrar</button>
    </form>
    <a href="criarconta.php"><button class="btncriar">Criar conta</button></a>
</div>

</body>
</html>