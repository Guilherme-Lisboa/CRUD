<?php
    if($_POST["cxcpf"] != "")
    {
        include_once "../factory/conexao.php";
        $nome = $_POST['cxnome'];
        $cpf = $_POST['cxcpf'];
        $email = $_POST['cxemail'];
        $idade = $_POST['cxidade'];
        $sql = "insert into tbcliente (nome,cpf,email,idade)
        values ('$nome','$cpf','$email','$idade');";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!"; 
    }
    else
    {
        echo "Dados não cadastrado";
    }
?>
</br>
<a href="../home/index.html"><button>Voltar</button></a>