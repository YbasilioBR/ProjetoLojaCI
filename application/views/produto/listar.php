<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Manga Base - Inicio</title>
    <link rel="stylesheet" type="text/css" href="../../css/base-style.css?v=<?php echo time(); ?>">
</head>
<body class="fundo">
    
    <div class="cabecalho"></div>
    <form method="get" action="carregarProduto">
    <div class="conteudo">
        <div class="dentroconteudo">
            <div class="container">
                <?php foreach ($resultado as $result): ?>
                <div class="box">
                    <p><?php echo $result->descricao; ?></p>
                    <p><?php echo $result->valor; ?></p>
  
                    <button name="GetProd" type="submit" name="teste" value="<?php echo $result->id_produto; ?>"​​​​​>Alterar</button>
                </div>            
            <?php endforeach; ?>
            </div>
        </div>
    </form>
    </div>
</body>
</html>