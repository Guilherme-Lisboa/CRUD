<?php
    include_once "../factory/conexao.php";
    $id = $_POST["cxid"];
    $consulta = "select *from tbcliente where codigo = '$id'";
    $executar = mysqli_query($conn,$consulta);
    $linha = mysqli_fetch_array($executar);
?>
    <form action="alterarcliente.php" method="POST">
        Codigo: <input type="text" name="cxcodigo" value="<?php echo $linha['codigo']; ?>"readonly> <br/>
        Nome: <input type="text" name="cxnome" value="<?php echo $linha['nome']; ?>"> <br/>
        CPF: <input type="text" name="cxcpf" value="<?php echo $linha['cpf']; ?>"> <br/>
        Email: <input type="text" name="cxemail" value="<?php echo $linha['email']; ?>"> <br/>
        Idade: <input type="text" name="cxidade" value="<?php echo $linha['idade']; ?>"> <br/>
        <button type="submit">Alterar</button>
    </form>