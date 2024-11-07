<?php
    include_once "../factory/conexao.php";
    $id = $_POST["cxcodigo"];
    $nome = $_POST["cxnome"];
    $cpf = $_POST["cxcpf"];
    $email = $_POST["cxemail"];
    $idade = $_POST["cxidade"];
    $alterar = "update tbcliente set 
            nome = '$nome',
            cpf = '$cpf',
            email = '$email',
            idade= '$idade'
            where
            codigo = '$id';
";
$executar = mysqli_query($conn,$alterar);
if($alterar)
{
    echo"Dados alterado com sucesso!!";
}
?>
<a href="../home/index.html"><button>Voltar</button></a>