<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Manga Base - Manutenção de Produto</title>
    </head>
        <body>   
            <h1>Alterar Titulo</h1>            
            <p> -- DIGITE OS NOVOS VALORES -- </p>

<form method="post" action="alterar_produto">
<?php foreach ($resultado as $result): ?>
    <div>
       <input type="hidden" name="id_produto" value="<?php echo $result->id_produto; ?>">
       <input type="text" name="descricao" value="<?php echo $result->descricao; ?>">
       <input type="text" name="valor" value="<?php echo $result->valor; ?>">
       <input type="submit" name="altera" value="Alterar">
    </div>
    </br>
<?php endforeach; ?>
</form>
                        
        </body>
    </head>
</html>