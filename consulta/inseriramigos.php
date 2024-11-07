<?php
    if($_POST["cxnome"] != ""){
        include_once "factory/conexao.php";
        $nome= $_POST["cxnome"];
        $email= $_POST["cxemail"];
        $sql = "insert into tdamigo (nome,email)
        values('$nome','$email')";
        $result= mysqli_query($conn,$sql);
        echo"Dados cadstrados com sucesso";
    } 
    else
    {
    echo" Dados nao cadastrados";
}
?>
<br/>
<a href="../home/index.html"><button>Voltar</button></a>