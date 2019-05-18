<?php
## conectando com o banco
require("../../config/conexao.php");

$nome               = $_POST['nome'];
$nascimento         = $_POST['nascimento'];
$foto               = $_FILES["foto"];
$telefone           = $_POST['telefone'];
$email              = $_POST['email'];
$cpf                = $_POST['cpf'];
$funcao             = $_POST['funcao'];
$data               = $_POST['data'];

//converção dos valores para peso
$peso = floatval($_POST['peso']);
   
//conversão dos valores para altura, e se digitar com , alterar para ponto
$altura = $_POST['altura'];
$altura_convert = str_replace(",",".", $altura);
$altura_num = floatval($altura_convert);

//calculo do ICM
$icm = floatval($peso / ($altura_num * $altura_num));

$pressao            = $_POST['pressao'];
$nivel_pressao      = $_POST['nivel_pressao'];
$glicose            = $_POST['glicose'];
$temperatura        = $_POST['temperatura'];
$estressado         = $_POST['estressado'];
$triste             = $_POST['triste'];
$dor_dente          = $_POST['dor_dente'];
$dor_cabeca         = $_POST['dor_cabeca'];
$dor_corpo          = $_POST['dor_corpo'];
$conjuntivite       = $_POST['conjuntivite'];
$escoriacao         = $_POST['escoriacao'];
$tratamento         = $_POST['tratamento'];
$antibio            = $_POST['antibio'];
$tarjapreta         = $_POST['tarjapreta'];
$alcool             = $_POST['alcool'];
$drogas             = $_POST['drogas'];
$atendimento        = $_POST['atendimento'];

$sinal_vermelho = 0;
$sinal_amarelo = 0;

$status = " ";

        #### DEFININDO O STATUS ####            
        $glicoseFloat = floatval($glicose);
        if($glicoseFloat < 70 || $glicoseFloat > 100)
            $sinal_amarelo = $sinal_amarelo + 1;

        if($nivel_pressao == "baixa" || $nivel_pressao == "alta")
            $sinal_amarelo = $sinal_amarelo + 1;

        $temperaturaFloat = floatval($temperatura);
        if($temperaturaFloat < 36 || $temperaturaFloat > 38)
            $sinal_amarelo = $sinal_amarelo + 1;

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
        if($sinal_vermelho > 0){
            $status = "VERMELHO";
            $btn_class = "btn_vermelho";   
        }

        if($sinal_amarelo >= 1 && $sinal_vermelho == 0){
            $status = "AMARELO";
            $btn_class = "btn_amarelo";
        }

        if($sinal_vermelho == 0 && $sinal_amarelo == 0){
            $status = "VERDE";
            $btn_class = "btn_verde";   
        }
	
// upload da foto
if (!empty($foto["name"])) {
    
    // Largura máxima em pixels
    $largura_foto = 3000;
    // Altura máxima em pixels
    $altura_foto = 3000;
    // Tamanho máximo do arquivo em bytes
    $tamanho = 700000;

    $error = array();

    // Verifica se o arquivo é uma imagem
    if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
        $error[1] = "Isso não é uma imagem.";
    } 

    // Pega as dimensões da imagem
    $dimensoes = getimagesize($foto["tmp_name"]);

    // Verifica se a largura da imagem é maior que a largura permitida
    if($dimensoes[0] > $largura_foto) {
        $error[2] = "A largura da imagem não deve ultrapassar ".$largura_foto." pixels";
    }

    // Verifica se a altura da imagem é maior que a altura permitida
    if($dimensoes[1] > $altura_foto) {
        $error[3] = "Altura da imagem não deve ultrapassar ".$altura_foto." pixels";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if($foto["size"] > $tamanho) {
        $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
    }

    // Se não houver nenhum erro
    if (count($error) == 0) {

        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        // Gera um nome único para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        // Caminho de onde ficará a imagem
        $caminho_imagem = "../imagens/perfil/" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
        // Insere os dados no banco
    $sql = "INSERT INTO registros (`nome`, `nascimento`, `foto`, `telefone`, `email`, `cpf`, `funcao`, `data`, `peso`, `altura`, `icm`, `pressao`, `nivel_pressao`, `glicose`, `temperatura`, `estressado`, `triste`, `dor_dente`, `dor_cabeca`, `dor_corpo`, `conjuntivite`, `escoriacao`, `tratamento`, `antibio`, `tarjapreta`, `alcool`, `drogas`, `atendimento`, `status`, `btn_class`) VALUES ('$nome', '$nascimento', '$nome_imagem', '$telefone', '$email', '$cpf', '$funcao', '$data', '$peso', '$altura', '$icm', '$pressao', '$nivel_pressao', '$glicose', '$temperatura', '$estressado', '$triste', '$dor_dente', '$dor_cabeca', '$dor_corpo', '$conjuntivite', '$escoriacao', '$tratamento', '$antibio', '$tarjapreta', '$alcool', '$drogas', '$atendimento', '$status', '$btn_class')";
        $gravar = mysqli_query($conexao,$sql) or die("ocorreu um erro e seu registro não foi inserido");

        echo "Registro Cadastrado com Sucesso!";
    }

    // Se houver mensagens de erro, exibe-as
    if (count($error) != 0) {
        foreach ($error as $erro) {
            echo $erro . "<br />";
        }
    }

}

?>