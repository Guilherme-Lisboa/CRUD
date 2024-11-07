<?php
    include_once "../factory/conexao.php";
    $cod = $_GET["id"];
    $excluir = "delete from tbcliente where codigo = '$cod'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
        echo "Cliente exluido!";
    }
    else{
            echo "Erro, ao excluir <br>";
    }
    ?>
    <br>
    <a href="../home/index.html"><button>Voltar</button></a>