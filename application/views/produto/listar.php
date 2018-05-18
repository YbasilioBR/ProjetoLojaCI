<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mangá Base - Titulos</title>
</head>
<body>
<h1>TITULOS CADASTRADOS</h1>
<form method="" action="<?php  echo base_url(); ?>​controller_name/function_name">
<?php foreach ($resultado as $result): ?>
    <div>
       <p><?php echo $result->descricao; ?></p>
       <p><?php echo $result->valor; ?></p>
       <button id="submit-buttons" type="submit" ​​​​​>Alterar</button>
    </div>
    </br>
<?php endforeach; ?>
</form>
</body>
</head>


</html>