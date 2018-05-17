<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
        <body>
        <?php echo form_open('Produto/index'); ?>        
            <h1>Cadastro de produtos ilicitos</h1>
            
            <p> -- DIGITE O PRODUTO A SER INSERIDO -- </p>

            <input type="text" name="descricao">
            </br>
            <input type="number" name="valor">
            </br>
            <input type="submit" name="inserir" value="Gravar">

            
        </body>
    </head>
</html>