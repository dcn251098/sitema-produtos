<?php

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) > 0)
        {
            if($adm == 1){
                header('Location: admin.php');
            }
            else{
                header('Location: cliente.php');
            }
        }
        else
        {
            header('Location: login.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>