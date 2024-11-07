<?php
    if($_POST["cxsenha"] != "")
    {
        include_once "../factory/conexao.php";
        $email = $_POST['cxemail'];
        $senha = $_POST['cxsenha'];
        $sql = "insert into tbusuario (email,senha)
        values ('$email','$senha');";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!"; 
    }
    else
    {
        echo "Dados não cadastrado";
    }
?>
</br>
<a href="telalogin.php"><button>Voltar</button></a>