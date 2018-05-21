<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mangá Base - Titulos</title>
</head>
<body>
<h1>TITULOS CADASTRADOS</h1>
<form method="get" action="carregarProduto">
<?php foreach ($resultado as $result): ?>
    <div>
       <p><?php echo $result->descricao; ?></p>
       <p><?php echo $result->valor; ?></p>
  
       <button name="GetProd" type="submit" name="teste" value="<?php echo $result->id_produto; ?>"​​​​​>Alterar</button>
    </div>
    </br>
<?php endforeach; ?>
</form>
</body>
</head>


</html>