<?php

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $funcao = $_POST['funcao'];
    $data = $_POST['data'];

    //converção dos valores para peso
    $peso = floatval($_POST['peso']);
    
    //conversão dos valores para altura, e se digitar com , alterar para ponto
    $altura = $_POST['altura'];
    $altura_convert = str_replace(",",".", $altura);
    $altura_num = floatval($altura_convert);
    
    //calculo do ICM
    $icm = floatval($peso / ($altura_num * $altura_num));

    $pressao = $_POST['pressao'];
    $nivel_pressao = $_POST['nivel_pressao'];
    $glicose = $_POST['glicose'];
    $nivel_glicose = $_POST['nivel_glicose'];
    $temperatura = $_POST['temperatura'];
    $nivel_temperatura = $_POST['nivel_temperatura'];

    $estressado = $_POST['estressado'];
    $triste = $_POST['triste'];
    $dor_dente = $_POST['dor_dente'];
    $dor_cabeca = $_POST['dor_cabeca'];
    $dor_corpo = $_POST['dor_corpo'];
    $conjuntivite = $_POST['conjuntivite'];
    $escoriacao = $_POST['escoriacao'];
    $tratamento = $_POST['tratamento'];
    $antibio = $_POST['antibio'];
    $tarjapreta = $_POST['tarjapreta'];
    $alcool = $_POST['alcool'];
    $drogas = $_POST['drogas'];
    $atendimento = $_POST['atendimento'];
    
    $sinal_vermelho = 0;
    $sinal_amarelo = 0;

    $status = " ";

            #### DEFININDO O STATUS ####            
            if($estressado == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($triste == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;
            
            if($dor_dente == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;
            
            if($dor_cabeca == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($dor_corpo == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($conjuntivite == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($escoriacao == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($tratamento == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($antibio == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($tarjapreta == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($atendimento == "sim")
                $sinal_amarelo = $sinal_amarelo + 1;

            if($icm > 35)
                $sinal_vermelho = $sinal_vermelho + 1;

            if($alcool == "sim")
                $sinal_vermelho = $sinal_vermelho + 1;

            if($drogas == "sim")
                $sinal_vermelho = $sinal_vermelho + 1;
           
            ##BASE DE CALCULO##
            if($sinal_vermelho > 0)
                $status = "SINAL VERMELHO";
    
            if($sinal_amarelo >= 1 && $sinal_vermelho == 0)
                $status = "SINAL AMARELO";
    
            if($sinal_vermelho == 0 && $sinal_amarelo == 0)
                $status = "SINAL VERDE";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>RESULTADO</h1>

<p><strong>Nome: </strong><?php echo $nome; ?></p>
<p><strong>Email: </strong><?php echo $email; ?></p>
<p><strong>Telefone: </strong><?php echo $telefone; ?></p>
<p><strong>CPF: </strong><?php echo $cpf; ?></p>
<p><strong>Função: </strong><?php echo $funcao; ?></p>
<p><strong>Data: </strong><?php echo $data; ?></p>

<p><strong>PESO: </strong><?php echo $peso; ?> (Kg)</p>
<p><strong>ALTURA: </strong><?php echo $altura; ?> (m)</p>
<p><strong>ICM: </strong><?php echo $icm; ?></p>
<p><strong>Pressão: </strong><?php echo "$pressao | $nivel_pressao"; ?></p>
<p><strong>Glicose: </strong><?php echo "$glicose | $nivel_glicose"; ?></p>
<p><strong>Temperatura: </strong><?php echo "$temperatura | $nivel_temperatura"; ?></p>

<p><strong>Estressado: </strong><?php echo $estressado; ?></p>
<p><strong>Triste: </strong><?php echo $triste; ?></p>
<p><strong>Dor de Dente: </strong><?php echo $dor_dente; ?></p>
<p><strong>Dor de Cabeça: </strong><?php echo $dor_cabeca; ?></p>
<p><strong>Dor no Corpo: </strong><?php echo $dor_corpo; ?></p>
<p><strong>Conjuntivite: </strong><?php echo $conjuntivite; ?></p>
<p><strong>Escoriação: </strong><?php echo $escoriacao; ?></p>
<p><strong>Tratamento em Andamento: </strong><?php echo $tratamento; ?></p>
<p><strong>Antibiótico ou Antiinflamatório: </strong><?php echo $antibio; ?></p>
<p><strong>Tarja Preta: </strong><?php echo $tarjapreta; ?></p>
<p><strong>Bebeu: </strong><?php echo $alcool; ?></p>
<p><strong>Drogas: </strong><?php echo $drogas; ?></p>
<p><strong>Atendimento Médico (últimos 30 dias): </strong><?php echo $atendimento; ?></p>


<p>STATUS: <?php echo $status; ?></p>

<br><br><br><br><br><br><br>
<hr>
    <p>sinal vermelho: <?php echo $sinal_vermelho; ?></p>
    <p>sinal amarelo: <?php echo $sinal_amarelo; ?></p>

</body>
</html>