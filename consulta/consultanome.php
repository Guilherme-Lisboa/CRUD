<?php
    include_once "../factory/conexao.php";
    $nome = $_POST["cxpesquisanome"];
    $consulta = "select *from tbcliente where nome = '$nome'";
    $executar = mysqli_query($conn,$consulta);
    $linha = mysqli_fetch_array($executar);
    echo "Codigo: ".$linha['codigo']."<br/>";
    echo "Nome: ".$linha['nome']."<br/>";
    echo "E-mail: ".$linha['email']."<br/>";
    echo "CPF: ".$linha['cpf']."<br/>";
    echo "Idade: ".$linha['idade'];
?>
</br>
<a href="../home/index.html"><button>Voltar</button></a>