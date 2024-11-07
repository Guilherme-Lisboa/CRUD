<?php
    include_once "../factory/conexao.php";
    $id = $_POST["cxid"];
    $consulta = "select *from tbcliente where codigo = '$id'";
    $executar = mysqli_query($conn,$consulta);
    $linha = mysqli_fetch_array($executar);
    echo "Codigo: ".$linha['codigo']."<br/>";
    echo "Nome: ".$linha['nome']."<br/>";
    echo "E-mail: ".$linha['email']."<br/>";
    echo "CPF: ".$linha['cpf']."<br/>";
    echo "Idade: ".$linha['idade'];
?>
<br/>
<a href="index.php"><button>Voltar</button></a>
<a href="deletecliente.php?id=<?php echo $linha['codigo']; ?>"><button>Excluir</button></a>