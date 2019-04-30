<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheckList Pré-embarque</title>
</head>
<body>

    <form action="resultado.php" method="POST">

        <input type="text" name="nome" placeholder="Nome"> <br><br>
        <input type="text" name="peso" placeholder="peso"> <br><br>
        <input type="text" name="altura" placeholder="altura"> <br><br>

        <label>Estressado:</label>
        <input type="radio" name="estressado" id="" value="sim"> SIM
        <input type="radio" name="estressado" id="" value="não"> NÃO

        <br>

        <label>Triste:</label>
        <input type="radio" name="triste" id="" value="sim"> SIM
        <input type="radio" name="triste" id="" value="não"> NÃO

        <br>

        <label>Ingeriu Bebida Alcoolica:</label>
        <input type="radio" name="alcool" id="" value="sim"> SIM
        <input type="radio" name="alcool" id="" value="não"> NÃO

        <br><br>

        <input type="submit" value="enviar">

        

    </form>
    
</body>
</html>