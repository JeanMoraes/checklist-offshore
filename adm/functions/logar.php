<?php
    require_once('../../config/conexao.php');

    if(isset($_POST['email']) && isset($_POST['senha']) )
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_logar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ") or die( mysqli_error($conexao));
        $logar = mysqli_num_rows($sql_logar);

        if($logar == 1){
            while($percorrer = mysqli_fetch_assoc($sql_logar)){
                // $adm = $percorrer['admin'];
                $nome = $percorrer['nome'];

                session_start();
                $_SESSION['nome'] = $nome;
                echo '<script>window.location = "../index.php"</script>';


                // if($adm == 1){
                //     $_SESSION['adm'] = $nome;
                // }else{
                //     $_SESSION['monitor'] = $nome;
                // }

            }
            
        }else{
            echo 'Email ou Senha Incorretos';
        }
    }
?>