<?php

    $nome = $_POST['nome'];
    $peso = floatval($_POST['peso']);
    
    $altura = $_POST['altura'];
    
    $altura_convert = str_replace(",",".", $altura);
    $altura_num = floatval($altura_convert);
    
    $icm = floatval($peso / ($altura_num * $altura_num));

    $estressado = $_POST['estressado'];
    $triste = $_POST['triste'];
    $alcool = $_POST['alcool'];

    $sinal_vermelho = 0;
    $sinal_amarelo = 0;

    $status = " ";

            #### STATUS ####
            if($icm > 35)
            {
               $sinal_vermelho = $sinal_vermelho + 1;
            }
            
            if($estressado == "sim")
            {
                $sinal_amarelo = $sinal_amarelo + 1;
            }

            if($triste == "sim")
            {
                $sinal_amarelo = $sinal_amarelo + 1;
            }

            if($alcool == "sim")
            {
                $sinal_vermelho = $sinal_vermelho + 1;
            }
           
            ##BASE DE CALCULO##
            if($sinal_vermelho > 0)
            {
                $status = "SINAL VERMELHO";
            }
    
            if($sinal_amarelo >= 1 && $sinal_vermelho == 0)
            {
                $status = "SINAL AMARELO";
            }
    
            if($sinal_vermelho == 0 && $sinal_amarelo == 0)
            {
                $status = "SINAL VERDE";
            }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>RESULTADO</h1>

<p>NOME: <?php echo $nome; ?></p>
<p>PESO: <?php echo $peso; ?> (Kg)</p>
<p>ALTURA: <?php echo $altura; ?> (m)</p>
<p>ICM: <?php echo $icm; ?></p>
<p>ESTRESSADO: <?php echo $estressado; ?></p>
<p>TRISTE: <?php echo $triste; ?></p>
<p>BEBEU: <?php echo $alcool; ?></p>
<p>STATUS: <?php echo $status; ?></p>

<br><br><br><br><br><br><br>
<hr>
    <p>sinal vermelho: <?php echo $sinal_vermelho; ?></p>
    <p>sinal amarelo: <?php echo $sinal_amarelo; ?></p>

</body>
</html>