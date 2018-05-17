<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
        <body>
        <form method="post" action="<?php echo base_url()?>Produto/inserir">
              
            <h1>Cadastro de produtos ilicitos</h1>
            
            <p> -- DIGITE O PRODUTO A SER INSERIDO -- </p>

            <input type="text" name="descricao">
            </br>
            <input type="number" name="valor">
            </br>
            <input type="submit" name="inserir" value="Gravar">
        </form>
            
        </body>
    </head>
</html>