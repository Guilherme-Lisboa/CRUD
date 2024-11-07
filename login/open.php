<?php
    include_once "../factory/conexao.php";
    $user = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];
    $sql = "select *from tbusuario where email = '$user'
    and senha = '$senha' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        echo "
        <script>
            alert('Seja bem Vindo!');
            window.location.href = '../home/index.html';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
            alert('Usuario e senha errado');
            window.location.href = 'telalogin.php';
        </script>
        ";
    }
?>