<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="principal">
    <h2>Cadastra</h2>
    <form action="inserirdadousuario.php" method="POST">
        <input type="email" name="cxemail" placeholder="Email" required>
        <input type="password" name="cxsenha" placeholder="Senha" required>
        <button type="submit" class="btnlogin">Criar</button>
    </form>
</div>

</body>
</html>