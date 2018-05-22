<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Manga Base - Inserir</title>
        <link rel="stylesheet" type="text/css" href="../../css/base-style.css?v=<?php echo time(); ?>">
    </head>
    <body class="fundo">

        <div class="cabecalho"></div>
            <form method="post" action="alterar_produto">
            <div class="conteudo">
                 <div class="dentroconteudo">
                    <h1> DIGITE O PRODUTO A SER INSERIDO </h1>
                    <label>Descricao</label>
                    <input type="text" name="descricao">
                    <label>Valor</label>
                    <input type="text" name="valor">
                    <input type="submit" name="add" value="Gravar">
                </div>
            </div>
            </form>
        </div>
    </body>
</html>