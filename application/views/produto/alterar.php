<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Manga Base - Inicio</title>
    <link rel="stylesheet" type="text/css" href="../../css/base-style.css?v=<?php echo time(); ?>">
</head>
<body class="fundo">

    <div class="cabecalho"></div>
    <form method="post" action="alterar_produto">
    <div class="conteudo">
        <div class="dentroconteudo">

        <?php foreach ($resultado as $result): ?>
        <div class="container">
                <h1> -- ALTERAR REGISTRO -- </h1>
                <input type="hidden" name="id_produto" value="<?php echo $result->id_produto; ?>">
                <input type="text" name="descricao" value="<?php echo $result->descricao; ?>">
                <input type="text" name="valor" value="<?php echo $result->valor; ?>">
                <input type="submit" name="alterar" value="Alterar">       
        </div>
        </br>
        <?php endforeach; ?>            
        </div>
        </form>
    </div>
</body>
</html>